<?php

namespace App\Http\Controllers;

use Request;
use Validator;
use Session;
use Redirect;
use View;
use Mail;

use App\Lead;

class LeadController extends Controller
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
        $lead = new Lead;
        $leadLastId = $lead->create([
            "name" => Request::get("name"),
            "email" => Request::get("email"),
            "phone" => Request::get("phone"),
            "source" => Request::get("source")
            "nar" => Request::get("nar");
            "vn" => Request::get("vn");
            "kol" => Request::get("kol");
            "davl" => Request::get("davl");
            "dlina" => Request::get("dlina");
            "dym" => Request::get("dym");
            "kotel" => Request::get("kotel");
        ])->id;

        $email = array(
            "name" => Request::get("name"),
            "email" => Request::get("email"),
            "phone" => Request::get("phone"),
            "source" => Request::get("source"),
            "nar" => Request::get("nar");
            "vn" => Request::get("vn");
            "kol" => Request::get("kol");
            "davl" => Request::get("davl");
            "dlina" => Request::get("dlina");
            "dym" => Request::get("dym");
            "kotel" => Request::get("kotel");
            "lead_id" => $leadLastId
        );

        Mail::send("email.lead", $email, function ($message) {
            $message->from("genlid.proposals@gmail.com", "genlid.proposals");
            $message->to("nitrolovsky@gmail.com");
            $message->subject("Заявка № " . date ("Y.m.d H:m:s"));
        });
        /*
        Mail::send("email.lead", $email, function ($message) {
            $message->from("genlid.proposals@gmail.com", "genlid.proposals");
            $message->to("domshowaltair@gmail.com");
            $message->subject("Заявка № " . date ("Y.m.d H:m:s"));
        });
*/
        return Redirect::to("/thanks");
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
