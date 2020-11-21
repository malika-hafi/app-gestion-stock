<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ventes;
use App\Achats;
use App\Produit;
use App\Categorie;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $users = DB::table('users')->where('role','=','fournisseur')->count();
        $client = DB::table('users')->where('role','=','client')->count();
        $ventes  = DB::table('ventes')->count();
        $achats  = DB::table('achats')->count();
        $produit =Produit::All();
        $categorie =Categorie::All();
        $achat =Achats::All();
        
        return view('dashboard',['users' => $users],['client' => $client])->with('produit', $produit)->with('ventes', $ventes)->with('achats', $achats)->with('categorie', $categorie)->with('achat', $achat);
    }
}
