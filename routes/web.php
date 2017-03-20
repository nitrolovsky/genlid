<?php

Route::get('/', function () {
    $name = Request::server("HTTP_HOST");
    $file = str_replace(".", "-", $name);
    if (file_exists("../resources/views/landingpages/$file.blade.php") == true) {
        return View("landingpages.$file");
    } else {
        return View('landingpages.genlid');
    }
    //$json = file_get_contents("../database/data/2016-11-03-10-12-pilka.json");
    //$data = json_decode($json, true);
    //return view('welcome1')
        //->with('data', $data);
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
    if (file_exists("../resources/views/landingpages/$name.blade.php") == true) {
        return View("landingpages.$name");
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
