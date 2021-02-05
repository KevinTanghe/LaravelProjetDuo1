<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Footer;
use App\Models\liensFooter;
use App\Models\Navbar;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $nav = Navbar::all();
        $footer = Footer::all();
        $reseaux = liensFooter::all();
        $card = Article::all();
        return view('pages/article', compact('card', 'nav', 'footer', 'reseaux'));
    }
}
