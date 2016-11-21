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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('page.index')
            ->with('pages', $pages = Page::orderBy('id', 'desc')->get());
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
            'brand' => 'required|max:255',
            'phone' => 'required|max:255',
            'descriptor' => 'required|max:255',
            'video' => 'required|url',
            'profit' => 'required',
            'form_title' => 'required|max:255',
            'call_to_action' => 'required|max:255',
            'legal' => 'required',
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return Redirect::to('/pages/create')
                ->withErrors($validator)
                ->withInput();
        }

        $page = new Page;
        $page_last_id = $page->create([
            'brand' => Request::get('brand'),
            'phone' => Request::get('phone'),
            'descriptor' => Request::get('descriptor'),
            'video' => Request::get('video'),
            'profit' => Request::get('profit'),
            'form_title' => Request::get('form_title'),
            'call_to_action' => Request::get('call_to_action'),
            'legal' => Request::get('legal'),
            'email' => Request::get('email'),
            'status' => 'publish',
            'user_id' => Session::get('id')
        ])->id;

        Session::flash('success', 'Страница создана.');

        return Redirect::to("/pages/" . $page_last_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return View('page.show')
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return View('page.edit')
            ->with('page', Page::find($id));
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
        $validator = Validator::make(Request::all(), [
            'brand' => 'required|max:255',
            'phone' => 'required|max:255',
            'descriptor' => 'required|max:255',
            'video' => 'required|url',
            'profit' => 'required',
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

        //$now = new DateTime();
        //$extension = Request::file('bg')->getClientOriginalExtension();
        //$uploadPath = public_path('upload\images');
        //$fileName = $now->format('Y-m-d-H-i-s') . '-' . $page->user_id . '.' . $extension;
        //Request::file('bg')->move($uploadPath, $fileName);

        $page->update([
            'brand' => Request::get('brand'),
            'phone' => Request::get('phone'),
            'descriptor' => Request::get('descriptor'),
            'video' => Request::get('video'),
            'profit' => Request::get('profit'),
            'form_title' => Request::get('form_title'),
            'call_to_action' => Request::get('call_to_action'),
            'legal' => Request::get('legal'),
            'email' => Request::get('email')
        ]);

        //Session::flash('danger', $uploadPath . '/' . $fileName);
        Session::flash('success', 'Страница обновлена.');

        return Redirect::to("/pages/" . $id);
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
