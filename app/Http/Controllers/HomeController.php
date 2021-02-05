<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\SecondHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $home = Home::all();
        $secondHome = SecondHome::all();

        return view('pages/home', compact('home', 'secondHome'));
    }
}
