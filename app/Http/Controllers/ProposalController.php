<?php

namespace App\Http\Controllers;

use Request;
use View;
use Validator;
use Session;
use Redirect;
use URL;
use Mail;

use App\Proposal;
use App\Page;
use App\User;

class ProposalController extends Controller
{
    public function __construct() {
        $this->middleware('needAuth', ['only' => ['index', 'update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposals = Proposal::where('owner_id', Session::get('id'))
            ->orderBy('id', 'desc')
            ->get();

        return View('proposal.index')
            ->with('proposals', $proposals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(Request::all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'page_id' => 'required|max:255',
            'template' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return Redirect::to('/pages/' . Request::get('page_id') . '/' . Request::get('template'))
                ->withErrors($validator, 'proposal')
                ->withInput();
        }

        $owner_id = Page::find(Request::get('page_id'))->user_id;
        $user = User::find($owner_id);

        $proposal = new Proposal;
        $proposal->create([
            'name' => Request::get('name'),
            'email' => Request::get('email'),
            'phone' => Request::get('phone'),
            'page_id' => Request::get('page_id'),
            'owner_id' => $owner_id,
            'template' => Request::get('template')
        ]);

        $data = array(
            'name' => Request::get('name'),
            'email' => Request::get('email'),
            'phone' => Request::get('phone'),
            'template' => Request::server("HTTP_REFERER")
        );

        Mail::send("email.proposal", $data, function ($message) use ($user) {
            $message->from("genlid.proposal@gmail.com", "genlid.com");
            $message->to($user->email);
            $message->subject("Заявка");
        });

        Session::flash('success', 'Спасибо за вашу заявку. Мы свяжемся с вами в ближайшее время.');

        return Redirect::to("/pages/" . Request::get('page_id') . "/thanks");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proposal = Proposal::find($id);
        if ($proposal->owner_id != Session::get('id')) {
            Session::flash('danger', 'Редактировать заявку имеет право только владелец.');
            Redirect::back();
        }

        $validator = Validator::make(Request::all(), [
            'status' => 'max:255'
        ]);
        if ($validator->fails()) {
            return Redirect::to('/proposals/')
                ->withErrors($validator)
                ->withInput();
        }

        $proposal = Proposal::find($id);
        $proposal->update([
            'status' => Request::get('status')
        ]);

        Session::flash('success', 'Статус заявки обновлен.');

        return Redirect::to("/proposals/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
