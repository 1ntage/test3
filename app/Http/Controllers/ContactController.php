<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Phone;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('lastname')->get();
        return view('contacts', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findorfail($id);
        $phone = Phone::all();
        return view('contact', compact('contact', 'phone'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'lastname' => 'required|string|min:4',
            'firstname' => 'required|string|min:3',
            'middlename' => 'required|string|min:6',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Контакт успешно сохранен');
    }

    public function phone_store(Request $request, Contact $contact){
        $validated = $request->validate([
            'phone' => 'required|min:11',
        ]);

        $contact->phones()->create($validated);

        return redirect()->route('phone_store', $contact);
    }

}
