<?php

namespace App\Http\Controllers;

use Request;
use View;
use Validator;
use Session;
use Redirect;

use App\Proposal;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $proposals = Proposal::
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
            'page_id' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return Redirect::to('/pages/' . Request::get('page_id'))
                ->withErrors($validator)
                ->withInput();
        }

        $owner_id = Page::find(Request::get('page_id'))->user_id;

        $proposal = new Proposal;
        $proposal->create([
            'name' => Request::get('name'),
            'email' => Request::get('email'),
            'phone' => Request::get('phone'),
            'page_id' => Request::get('page_id'),
            'owner_id' =>
        ]);

        Session::flash('success', 'Спасибо. Данные формы успешно отправлены.');

        return Redirect::to("/pages/" . Request::get('page_id'));
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
        //
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
