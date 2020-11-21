<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listeAr;

use App\User;
use App\Ventes;
use App\Achats;
use App\Produit;
use DB;
class listeArController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('role','=','fournisseur')->count();
        $client = DB::table('users')->where('role','=','client')->count();
         $ventes  = DB::table('ventes')->count();
         $achats  = DB::table('achats')->count();
           $produit =Produit::All();
       
         //$achat = DB::table('country')->count();
        return view('article',['users' => $users],['client' => $client])->with('produit', $produit)->with('ventes', $ventes)->with('achats', $achats);
    }
}
