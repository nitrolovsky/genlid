<?php

namespace App\Http\Controllers;

use Validator;
use Request;
use Session;
use View;
use Redirect;

use App\User;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('needAuth', ['only' => ['logout']]);
        $this->middleware('alreadyAuth', ['only' => ['viewLogin', 'login']]);
    }
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
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'confirmPassword' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return Redirect::to('users/login')
                ->withErrors($validator)
                ->withInput();
        }

        $password = Request::get('password');
        $confirmPassword = Request::get('confirmPassword');

        if ($password != $confirmPassword) {
            $validator->errors()
                ->add('confirmPassword', "Подтверждение пароля не совпадает с паролем.");
            return Redirect::to('users/login')
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User;
        $user = $user->create([
            'email' => Request::get('email'),
            'password' => Request::get('password')
        ]);

        Session::flash('info', 'Вы успешно зарегистрированы.');

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
        $user = User::find(Session::get('id'));
        return View::make('user.show')
            ->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(Session::get('id'));
        return View::make('user.edit')
            ->with('user', $user);
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
        $user = User::find($id);
        if ($id != Session::get('id')) {
            Session::flash('danger', 'Редактировать профиль имеет право только владелец.');
            Redirect::back();
        }

        $validator = Validator::make(Request::all(), [
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return Redirect::to('/users/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $user->update([
            'email' => Request::get('email'),
            'password' => Request::get('password')
        ]);

        Session::flash('success', 'Профиль обновлен.');

        return Redirect::to("/users/$user->id");
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
        Session::flash('success', 'Вы покинули учетную запись.');
        return Redirect::to('/');
    }
}
