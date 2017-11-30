<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AnswerContact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastSeen = Contact::where('seen', null)->orderBy('created_at', 'asc')->first();
        if($lastSeen != null){
            $lastSeen->seen = now();
            $lastSeen->save();    
        }else{
            $lastSeen = Contact::where('seen', '!=', null)->orderBy('seen', 'desc')->first();
        }

        
        $inboxes = Contact::orderBy('created_at', 'desc')->get();
        return view('admin/contact/index', compact('inboxes', 'lastSeen'));

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
        $contact = request()->validate([
            "name" => "required|string",
            "message" => "required|string|min:10",
            "email" => "required|email"
        ]);

        $inbox = Contact::create($contact);
        $message = "Hi ". ucfirst($inbox->name). ", Your message has been sent, I will answer as soon as possible";
        \Session::flash("success",$message);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $lastSeen = Contact::find($contact->id);
        $lastSeen->seen = now();
        $lastSeen->save();    
        $inboxes = Contact::orderBy('created_at', 'desc')->get();
        return view('admin/contact/index', compact('inboxes', 'lastSeen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }

    public function answer(Request $request)
    {
        Mail::to($request->senderEmail)->send(new AnswerContact($request->message));
        $inbox = Contact::find($request->senderId);
        $inbox->answered = now();
        $inbox->save();
        
        \Session::flash("success", "Message sent successfully");        
        return back();
    }
}
