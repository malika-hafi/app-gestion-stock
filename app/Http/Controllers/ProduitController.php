<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produit;
use App\ Categorie;

class ProduitController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index()
    {
        $produit = Produit::paginate(20);
 $categorie =Categorie::All();
        return view('system-mgmt/produit/index', ['produit' => $produit], ['categorie' => $categorie]);
    }

 
    public function create()
    {
        $categorie =Categorie::All();
        return view('system-mgmt/produit/create', ['categorie' => $categorie]);
    }

 
    public function store(Request $request)
    {
        $this->validateInput($request);
         Produit::create([
          'name' => $request['name'],
            'id_categorie' => $request['id_categorie'],
'prix' => $request['prix'],

'details' => $request['details'],
'quantite' => $request['quantite']
        ]);

        return redirect()->intended('system-management/produit');
    }

 
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $produit = Produit::find($id);
        $categorie =Categorie::All();
        // Redirect to division list if updating division wasn't existed

        return view('system-mgmt/produit/edit', ['produit' => $produit], ['categorie' => $categorie]);
    }
 
    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $this->validateInput($request);
        $input = [
                'name' => $request['name'],
                'prix' => $request['prix'],

                'id_categorie' => $request['id_categorie'],
                'details' => $request['details'],
                'quantite' => $request['quantite'],
        ];
        Produit::where('id', $id)
            ->update($input);
        
        return redirect()->intended('system-management/produit');
    }
 
    public function destroy($id)
    {
        Produit::where('id', $id)->delete();
         return redirect()->intended('system-management/produit');
    }

 
 

 
    private function validateInput($request) {
        $this->validate($request, [
              'name' => 'required|max:60|unique:produits',
              'prix' => '',
              'id_categorie' =>'',
              'details' =>'',
    ]);
    }
}
