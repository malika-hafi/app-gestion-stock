<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\listeCat;
use App\Ventes;
use App\Achats;
use App\Produit;
use App\Categorie;
use DB;
class listeCatController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('role','=','fournisseur')->count();
        $client = DB::table('users')->where('role','=','client')->count();
        $ventes  = DB::table('ventes')->count();
        $achats  = DB::table('achats')->count();
        $categorie =Categorie::All();
       
       
        return view('categorie',['users' => $users],['client' => $client])->with('categorie', $categorie)->with('ventes', $ventes)->with('achats', $achats);
    }
}
