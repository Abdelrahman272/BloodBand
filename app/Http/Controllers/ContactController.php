<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $models = ContactUs::all();
        return view('contact.index', compact('models'));
    }

    public function destroy($id)
    {
        ContactUs::destroy($id);
        flash('Message has been deleted')->success();
        return redirect()->route('contact.index');
    }
}
