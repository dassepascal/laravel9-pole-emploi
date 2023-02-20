<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', [
            'contacts'=>$contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:50',
            'firstName'=>'required|max:50',
            'phone'=>'required|max:50',
            'email'=>'required|max:50',
            'jobTitle'=>'required|max:50',
        ]);
        // $contact = new Contact();
        // $contact->name=$request->name;
        // $contact->firstName = $request->firstName;
        // $contact->phone = $request->phone;
        // $contact->email = $request->email;
        // $contact->jobTitle = $request->jobTitle;

        // $contact->save();
         $request->user()->contacts()->create($validated);

        return back()->with('message', ' le contact a bien été crée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->name = $request->name;
        $contact->firstName = $request->firstName;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->jobTitle = $request->jobTitle;
        $contact->save();
        return back()->with('message', ' le contact a bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('message', ' le contact a bien été supprimé !');
    }
}
