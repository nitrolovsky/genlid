<?php

namespace App\Http\Controllers;

use Request;
use Validator;
use Session;
use Redirect;
use View;
use Mail;
use DB;
use Mailchimp;

use App\Lead;
use App\KrossovkioptLead;
use App\BeautykitchenLead;
use App\BelioLead;

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
            "source" => Request::get("source"),
            "calc" => Request::get("calc"),
            "nar" => Request::get("nar"),
            "vn" => Request::get("vn"),
            "kol" => Request::get("kol"),
            "davl" => Request::get("davl"),
            "dlina" => Request::get("dlina"),
            "dym" => Request::get("dym"),
            "kotel" => Request::get("kotel"),
            "ob" => Request::get("ob"),
            "op1" => Request::get("op1"),
            "op2" => Request::get("op2"),
            "op3" => Request::get("op3"),
            "op4" => Request::get("op4"),
            "op5" => Request::get("op5"),
            "op6" => Request::get("op6"),
            "op7" => Request::get("op7"),
            "op8" => Request::get("op8"),
            "op9" => Request::get("op9"),
            "op10" => Request::get("op10")
        ])->id;

        $email = array(
            "name" => Request::get("name"),
            "email" => Request::get("email"),
            "phone" => Request::get("phone"),
            "source" => Request::get("source"),
            "calc" => Request::get("calc"),
            "nar" => Request::get("nar"),
            "vn" => Request::get("vn"),
            "kol" => Request::get("kol"),
            "davl" => Request::get("davl"),
            "dlina" => Request::get("dlina"),
            "dym" => Request::get("dym"),
            "kotel" => Request::get("kotel"),
            "ob" => Request::get("ob"),
            "op1" => Request::get("op1"),
            "op2" => Request::get("op2"),
            "op3" => Request::get("op3"),
            "op4" => Request::get("op4"),
            "op5" => Request::get("op5"),
            "op6" => Request::get("op6"),
            "op7" => Request::get("op7"),
            "op8" => Request::get("op8"),
            "op9" => Request::get("op9"),
            "op10" => Request::get("op10"),
            "lead_id" => $leadLastId
        );

        Mail::send("email.lead", $email, function ($message) {
            $message->from("genlid.proposals@gmail.com", "genlid.proposals");
            $message->to("nitrolovsky@gmail.com");
            $message->subject("Заявка № " . date ("Y.m.d H:m:s"));
        });

        Mail::send("email.lead", $email, function ($message) {
            $message->from("genlid.proposals@gmail.com", "genlid.proposals");
            $message->to("domshowaltair@gmail.com");
            $message->subject("Заявка № " . date ("Y.m.d H:m:s"));
        });

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

    public function storeBeautykitchen(Request $request) {
        $data = array(
            "name" => Request::get("name"),
            "email" => Request::get("email"),
            "phone" => Request::get("phone"),
            "source" => Request::server("HTTP_REFERER")
        );
        $lead = new BeautykitchenLead;
        $lead_last_id = $lead->create($data)->id;
        $data["lead_id"] = $lead_last_id;

        Mail::send("email", $data, function ($message) use ($data) {
            $message->from("info@genlid.com", "genlid.com");
            $message->to("nitrolovsky@gmail.com");
            $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
        });

        return Redirect::to("http://beautykitchen-thanks.genlid.com");
    }

    public function storeBelio(Request $request) {
        $data = array(
            "email" => Request::get("email"),
            "source" => Request::server("HTTP_REFERER")
        );
        $lead_last_id = DB::table("belio_leads")->insertGetId($data);
        $data["lead_id"] = $lead_last_id;

        Session::put("lead_id", $lead_last_id);

        Mail::send("emails.lead", $data, function ($message) use ($data) {
            $message->from("info@genlid.com", "genlid.com");
            $message->to("nitrolovsky@gmail.com");
            $message->subject("Заявка от " . $data['source'] . " в " . date ("Y.m.d H:m:s"));
        });

        return Redirect::to("http://belio-dostavka.genlid.com");
    }

    public function input(Request $request) {
        $lead = BelioLead::find(Session::get("lead_id"));
        $lead->update([
            Request::get("namei") => Request::get("valuei")
        ]);
        return Request::get("valuei");
    }

    public function storeKrossovkiopt(Request $request) {
        $data = array(
            "name" => Request::get("name"),
            "email" => Request::get("email"),
            "phone" => Request::get("phone"),
            "source" => Request::server("HTTP_REFERER")
        );
        $lead = new KrossovkioptLead;
        $lead_last_id = $lead->create($data)->id;
        $data["lead_id"] = $lead_last_id;

        Mail::send("emails.lead", $data, function ($message) use ($data) {
            $message->from("info@genlid.com", "genlid.com");
            $message->to("nitrolovsky@gmail.com");
            $message->subject("Заявка от " . $data["source"] . " в " . date ("Y.m.d H:m:s"));
        });

        Mail::send("emails.krossovkiopt", $data, function ($message) use ($data) {
            $message->from("info@genlid.com", "genlid.com");
            $message->to($data["email"]);
            $message->subject("Прайс кроссовки");
            $message->attach("files/krossovkiopt/krossovki-opt-price.xlsx");
            $message->attach("files/krossovkiopt/krossovki-opt-price.pdf");
        });

        return Redirect::to("/files/krossovkiopt/krossovki-opt-price.pdf");
    }

    public function storeDetoxya(Request $request) {
        $data = array(
            "name" => Request::get("name"),
            "email" => Request::get("email"),
            "phone" => Request::get("phone"),
            "source" => Request::server("HTTP_REFERER")
        );
        $lead_last_id = DB::table("detoxya_leads")->insertGetId($data);
        $data["lead_id"] = $lead_last_id;

        $list_id = "f315a1ed5c";
        $mailchimp = new Mailchimp("aeb1391031954768639c82b75a9fdc30-us11");
        $mailchimp->lists->subscribe(
            $list_id,
            ["email" => Request::get("email")]
        );
        return Redirect::to("http://detoxya.ru/");
    }
}
