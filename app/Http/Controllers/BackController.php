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

    public function editReseau($id) {
        $edit = liensFooter::find($id);

        return view('backoffice/pages/editPages/editReseau', compact('edit'));
    }
    
    public function updateReseau(Request $request, $id) {
        $update = liensFooter::find($id);
        $update->Reseaux = $request->Reseaux;
        $update->save();
        return redirect('/back/reseau');
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

    public function editHome($id) {
        $edit = SecondHome::find($id);

        return view('backoffice/pages/editPages/editLiHome', compact('edit'));
    }

    public function updateHome(Request $request, $id) {
        $update = SecondHome::find($id);
        $update->titre = $request->titre;
        $update->save();
        return redirect('/back/lihome');
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

    public function editAbout($id) {
        $edit = SecondAbout::find($id);

        return view('backoffice/pages/editPages/editLiAbout', compact('edit'));
    }

    public function updateAbout(Request $request, $id) {
        $update = SecondAbout::find($id);
        $update->liAbout = $request->titre;
        $update->save();
        return redirect('/back/liabout');
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

    public function show($id) {
        $show = Article::find($id);
        return view('backoffice/pages/show', compact('show'));
    }

    public function destroyCard($id) {
        $destroy = Article::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function editCard($id) {
        $edit = Article::find($id);

        return view('/backoffice/pages/editPages/editCard', compact('edit'));
    }

    public function updateCard(Request $request, $id) {
        $update = Article::find($id);
        $update->titre = $request->titre;
        $update->chiffre = $request->chiffre;
        $update->sousTitre = $request->sousTitre;
        $update->content = $request->content;
        $update->save();
        return redirect('/back/cardarticle');
    }
}
