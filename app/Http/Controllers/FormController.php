<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\FormMail;

class FormController extends Controller
{
    public function index()
    {
        return view('shop.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $contact = new Contact;
        $form = $request->all();
        $contact->fill($form);
        unset($form['_token']);
        $contact->save();

        //mail
        Mail::to($contact)->send(new FormMail());

        return redirect('shop/form/conp');
    }

    public function formConp()
    {
        return view('shop.form_conp');
    }
}
