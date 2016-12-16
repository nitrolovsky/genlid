<?php

namespace App\Http\Controllers;

use View;
use Validator;
use Request;
use Session;
use Redirect;
use DateTime;

use App\Page;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('needAuth', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::where('user_id', Session::get('id'))
            ->orderBy('id', 'desc')
            ->get();

        return View('page.index')
            ->with('pages', $pages);
    }

    public function showAll()
    {
        $pages = Page::orderBy('id', 'desc')
            ->get();

        return View('page.showAll')
            ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('page.create');
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
            'descriptor' => 'required|max:255',
            'phone' => 'required|max:255',
            'offer' => 'required|max:255',
            'video' => 'required|url',
            'details' => 'required',
            'form_title' => 'required|max:255',
            'call_to_action' => 'required|max:255',
            'legal' => 'required',
            'email' => 'required|email',
            'bg' => 'required'
        ]);
        if ($validator->fails()) {
            return Redirect::to('/pages/create')
                ->withErrors($validator)
                ->withInput();
        }

        $page = new Page;

        $now = new DateTime();
        $extension = Request::file('bg')->getClientOriginalExtension();
        $uploadPath = public_path('upload/images');
        $fileName = $now->format('Y-m-d-H-i-s') . '-' . Session::get('id') . '.' . $extension;
        Request::file('bg')->move($uploadPath, $fileName);

        $page_last_id = $page->create([
            'descriptor' => Request::get('descriptor'),
            'phone' => Request::get('phone'),
            'offer' => Request::get('offer'),
            'video' => Request::get('video'),
            'details' => Request::get('details'),
            'form_title' => Request::get('form_title'),
            'call_to_action' => Request::get('call_to_action'),
            'legal' => Request::get('legal'),
            'email' => Request::get('email'),
            'status' => 'publish',
            'user_id' => Session::get('id'),
            'bg' => $fileName
        ])->id;

        Session::flash('success', 'Страница создана.');

        return Redirect::to("/pages/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return View('page.showA')
            ->with('page', Page::find($id));
    }

    public function showA($id)
    {
        return View('page.showA')
            ->with('page', Page::find($id));
    }

    public function showB($id)
    {
        return View('page.showB')
            ->with('page', Page::find($id));
    }

    public function showC($id)
    {
        return View('page.showC')
            ->with('page', Page::find($id));
    }

    public function showD($id)
    {
        return View('page.showD')
            ->with('page', Page::find($id));
    }

    public function showE($id)
    {
        return View('page.showE')
            ->with('page', Page::find($id));
    }

    public function showF($id)
    {
        return View('page.showF')
            ->with('page', Page::find($id));
    }

    public function showThanks($id)
    {
        return View('page.showThanks')
            ->with('page', Page::find($id));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        if ($page->user_id != Session::get('id')) {
            Session::flash('danger', 'Редактировать страницу имеет право только автор.');
            Redirect::back();
        }
        return View('page.edit')
            ->with('page', $page);
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
        $page = Page::find($id);
        if ($page->user_id != Session::get('id')) {
            Session::flash('danger', 'Редактировать страницу имеет право только автор.');
            Redirect::back();
        }

        $validator = Validator::make(Request::all(), [
            'descriptor' => 'required|max:255',
            'phone' => 'required|max:255',
            'offer' => 'required|max:255',
            'video' => 'required|url',
            'details' => 'required',
            'form_title' => 'required|max:255',
            'call_to_action' => 'required|max:255',
            'legal' => 'required',
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return Redirect::to('/page/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $page = Page::find($id);

        if (Request::hasFile('bg')) {
            $now = new DateTime();
            $extension = Request::file('bg')->getClientOriginalExtension();
            $uploadPath = public_path('upload/images');
            $fileName = $now->format('Y-m-d-H-i-s') . '-' . $page->user_id . '.' . $extension;
            Request::file('bg')->move($uploadPath, $fileName);

            unlink(public_path('upload/images/') . $page->bg);

            $page->update([
                'bg' => $fileName
            ]);
        }

        $page->update([
            'descriptor' => Request::get('descriptor'),
            'phone' => Request::get('phone'),
            'offer' => Request::get('offer'),
            'video' => Request::get('video'),
            'details' => Request::get('details'),
            'form_title' => Request::get('form_title'),
            'call_to_action' => Request::get('call_to_action'),
            'legal' => Request::get('legal'),
            'email' => Request::get('email'),
        ]);

        Session::flash('success', "Страница № $page->id обновлена .");

        return Redirect::to("/pages");
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

    public function hide($id) {
        $page = Page::find($id);
        $page->update([
            'status' => 'hide'
        ]);

        Session::flash('success', 'Страница скрыта.');

        return Redirect::to("/pages");
    }

    public function publish($id) {
        $page = Page::find($id);
        $page->update([
            'status' => 'publish'
        ]);

        Session::flash('success', 'Страница опубликована.');

        return Redirect::to("/pages");
    }
}
