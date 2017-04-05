<?php

Route::get('/', function () {
    $name = Request::server("HTTP_HOST");
    $file = str_replace(".", "-", $name);
    if (file_exists("../resources/views/lp/$file.blade.php") == true) {
        return View("lp.$file");
    } else {
        $env = explode(".", Request::server("HTTP_HOST"));
        $subdomain = array_shift($env);
        if (file_exists("../resources/views/lp/$subdomain.blade.php") == true) {
            return view("lp.$subdomain");
        }
    }
});

Route::get('users/login', 'UserController@viewLogin');
Route::post('users/login', 'UserController@login');
Route::get('users/logout', 'UserController@logout');
Route::resource('users', 'UserController');

Route::get('pages/{id}/a', 'PageController@showA');
Route::get('pages/{id}/b', 'PageController@showB');
Route::get('pages/{id}/c', 'PageController@showC');
Route::get('pages/{id}/d', 'PageController@showD');
Route::get('pages/{id}/e', 'PageController@showE');
Route::get('pages/{id}/f', 'PageController@showF');
Route::get('pages/{id}/g', 'PageController@showG');
Route::get('pages/{id}/h', 'PageController@showH');
Route::get('pages/{id}/thanks', 'PageController@showThanks');
Route::get('pages/all', 'PageController@showAll');
Route::resource('pages', 'PageController');

Route::resource('proposals', 'ProposalController');

Route::get("articles/{name}", function($name) {
    if (file_exists("../database/seeds/$name.json") == true) {
        $product_json = file_get_contents("../database/seeds/$name.json");
        $product = json_decode($product_json, true);

        return View("article.$name")
            ->with("product", $product);
    }

    return View("article.$name");
});
Route::resource("articles", "ArticleController");

Route::get("lp/{name}", function($name) {
    if (file_exists("../resources/views/lp/$name.blade.php") == true) {
        return View("lp.$name");
    } else {
        return Redirect::to("/");
    }
});

Route::get("orders/thanks", "OrderController@showThanks");
Route::get("orders/thanksfororder", "OrderController@showThanksShop");
Route::get("orders/thanksforpromokod", "OrderController@showThanksPromokod");
Route::resource("orders", "OrderController");

Route::resource("lead", "LeadController");

Route::get("thanks", function () {
    return View("thanks");
});

Route::post("leads/beautykitchen", "LeadController@storeBeautykitchen");
