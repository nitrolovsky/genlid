<?php

namespace App\Http\Controllers;

use Request;
use Validator;
use Session;
use Redirect;
use View;
use Mail;

use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View("order.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Request::get("type") == "Order by phone") {
            $validator = Validator::make(Request::all(), [
                "name" => "required|max:255",
                "email" => "required|email|max:255",
                "phone" => "required|max:255"
            ]);
            if ($validator->fails()) {
                Session::flash("danger", "Заполните форму.");
                return Redirect::to("/products/" . Request::get("product_url"))
                    ->withErrors($validator, "orders")
                    ->withInput();
            }

            $order = new Order;
            $orderLastId = $order->create([
                "name" => Request::get("name"),
                "email" => Request::get("email"),
                "phone" => Request::get("phone"),
                "product_id" => Request::get("product_id"),
                "product_url" => Request::get("product_url"),
                "status" => "Order by phone"
            ])->id;

            Session::flash("success", "Заявка отправлена.");

            $data = array(
                "name" => Request::get("name"),
                "email" => Request::get("email"),
                "phone" => Request::get("phone"),
                "product_id" => Request::get("product_id"),
                "product_url" => Request::get("product_url")
            );

            Mail::send("email.comeOrder", $data, function ($message) {
                $message->from("shop.genlid@gmail.com", "shop.genlid.com");
                $message->to("nitrolovsky@gmail.com");
                $message->subject("Order");
            });

            Session::put("order_id", $orderLastId);

            return Redirect::action("OrderController@showThanks");
        }

        if (Request::get("type") == "Order from article") {
            $validator = Validator::make(Request::all(), [
                "email" => "email|max:255",
                "phone" => "max:255"
            ]);
            if ($validator->fails()) {
                Session::flash("danger", "Заполните форму.");
                return Redirect::to("/articles/" . Request::get("product_url") . "#request")
                    ->withErrors($validator, "orders")
                    ->withInput();
            }

            $order = new Order;
            $orderLastId = $order->create([
                "email" => Request::get("email"),
                "phone" => Request::get("phone"),
                "comment" => Request::get("comment"),
                "product_url" => Request::get("product_url")
            ])->id;

            Session::flash("success", "Заявка отправлена.");

            $data = array(
                "email" => Request::get("email"),
                "phone" => Request::get("phone"),
                "comment" => Request::get("comment"),
                "product_url" => Request::get("product_url"),
                "status" => "Order by article"
            );

            Mail::send("email.comeOrder", $data, function ($message) {
                $message->from("shop.genlid@gmail.com", "shop.genlid.com");
                $message->to("nitrolovsky@gmail.com");
                $message->subject("Order");
            });

            Session::put("order_id", $orderLastId);

            return Redirect::action("OrderController@showThanks");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

    public function showThanks() {
        $order = Order::find(Session::get("order_id"));

        $product_json = file_get_contents("../database/seeds/$order->product_url.json");
        $product = json_decode($product_json, true);

        return View::make("order.thanks")
            ->with("order", $order)
            ->with("product", $product);
    }
}
