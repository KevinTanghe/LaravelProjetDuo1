<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\liensFooter;
use App\Models\Navbar;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $nav = Navbar::all();
        $reseaux = liensFooter::all();
        $footer = Footer::all();
        $contact = Contact::all();

        return view('pages/contact', compact('nav', 'footer', 'reseaux', 'contact'));
    }
}
