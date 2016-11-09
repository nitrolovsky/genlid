<?php

namespace App\Http\Controllers;

use Validator;
use Request;
use Session;
use View;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return Redirect::to('/users/login')
                ->withErrors($validator)
                ->withInput();
        }

        $email = Request::get('email');
        $user = User::where('email', $email)
            ->get()
            ->first();

        if (empty($user)) {
            $validator->errors()
                ->add('email', "Пользователя с логином: '$email'  не существует.");
            return Redirect::to('/users/login')
                ->withErrors($validator)
                ->withInput();
        }

        $password = Request::get('password');
        $user = User::where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if (empty($user)) {
            $validator->errors()
                ->add('password', "Неверный пароль.");
            return Redirect::to('/users/login')
                ->withErrors($validator)
                ->withInput();
        }

        Session::put('id', $user->id);
        Session::put('authed', 1);

        return Redirect::to("/pages");
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

    public function viewLogin(Request $request) {
        return View('user.login');
    }

    public function login(Request $request) {
        $validator = Validator::make(Request::all(), [
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return Redirect::to('/users/login')
                ->withErrors($validator)
                ->withInput();
        }

        $email = Request::get('email');
        $user = User::where('email', $email)
            ->get()
            ->first();

        if (empty($user)) {
            $validator->errors()
                ->add('email', "Пользователя с логином: '$email'  не существует.");
            return Redirect::to('/users/login')
                ->withErrors($validator)
                ->withInput();
        }

        $password = Request::get('password');
        $user = User::where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if (empty($user)) {
            $validator->errors()
                ->add('password', "Неверный пароль.");
            return Redirect::to('/users/login')
                ->withErrors($validator)
                ->withInput();
        }

        Session::put('id', $user->id);
        Session::put('authed', 1);

        return Redirect::to("/pages");
    }

    public function logout() {
        Session::flush();
        return Redirect::to('/');
    }
}
