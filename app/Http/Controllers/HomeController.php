<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\Home;
use App\Models\liensFooter;
use App\Models\Navbar;
use App\Models\SecondAbout;
use App\Models\SecondHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $nav = Navbar::all();
        $footer = Footer::all();
        $reseaux = liensFooter::all();
        $home = Home::all();
        $secondHome = SecondHome::all();
        $about = About::all();
        $secondAbout = SecondAbout::all();

        return view('pages/home', compact('home', 'secondHome', 'nav', 'footer', 'reseaux', 'about', 'secondAbout'));
    }
}
