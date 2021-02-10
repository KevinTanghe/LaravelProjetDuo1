<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\liensFooter;
use App\Models\SecondAbout;
use App\Models\SecondHome;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function index() {
        return view('backoffice/backoffice');
    }

    
    public function reseau() {

        $reseau = liensFooter::all();

        return view('backoffice/pages/reseau', compact('reseau'));
    }

    public function storeReseau(Request $request) {
        $store = new liensFooter;
        $store->Reseaux = $request->reseau;
        $store->save();
        return redirect()->back();
    }

    public function destroyReseau($id) {
        $destroy = liensFooter::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function liHome() {

        $secondHome = SecondHome::all();

        return view('backoffice/pages/liHome', compact('secondHome'));
    }

    public function storeHome(Request $request) {
        $store = new SecondHome;
        $store->titre = $request->titre;
        $store->save();
        return redirect()->back();
    }

    public function destroyHome($id) {
        $destroy = SecondHome::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function liAbout() {

        $secondAbout = SecondAbout::all();

        return view('backoffice/pages/liAbout', compact('secondAbout'));

    }

    public function storeAbout(Request $request){
        $store = new SecondAbout;
        $store->liAbout = $request->titre;
        $store->save();
        return redirect()->back();
    }

    public function destroyAbout($id) {
        $destroy = SecondAbout::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function cardArticle() {
        
        $card = Article::all();

        return view('/backoffice/pages/cardArticle', compact('card'));
    }

    public function storeCard(Request $request){
        $store = new Article;
        $store->titre = $request->titre;
        $store->chiffre = $request->chiffre;
        $store->sousTitre = $request->sousTitre;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    public function destroyCard($id) {
        $destroy = Article::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
