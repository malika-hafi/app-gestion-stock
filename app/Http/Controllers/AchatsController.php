<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Achats;
use App\Produit;
use App\User;


class AchatsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        $achats = Achats::paginate(20);
        $fournisseur =User::All();
         $produit =Produit::All();

return view('system-mgmt/achats/index',['produit' => $produit],['achats' => $achats])->with('fournisseur', $fournisseur);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseur =User::All();
        $produit =Produit::All();

        return view('system-mgmt/achats/create',['produit' => $produit])->with('fournisseur', $fournisseur);

        }
  public function store(Request $request)
    {
         
         Achats::create([
         'id_produit' => $request['id_produit'],
            'id_users' => $request['id_users'],


            'quantite' => $request['quantite'],


            'date' => $request['date']
        ]);
 $qte = DB::statement("UPDATE produits SET quantite = quantite +'". $request['quantite']."' WHERE id='".$request['id_produit']."' "  );
        return redirect()->intended('system-management/achats');
    }


    
 public function show($id)
    {   $f =User::find(5);
        $achats = Achats::find($id);
            $fournisseur =User::All();
        $produit =Produit::All();
      
        return view('system-mgmt/achats.detail', compact('f'),compact('achats'),compact('ventes'))->with('fournisseur', $fournisseur)->with('produit', $produit);
    }
   

 


    

       public function edit($id)
    {
        $achats = Achats::find($id);
        // Redirect to user list if updating user wasn't existed
         $fournisseur =User::All();

         $produit =Produit::All();
    
    return view('system-mgmt/achats/edit',['produit' => $produit],['achats' => $achats])->with('fournisseur', $fournisseur);
    }
    



      public function update(Request $request, $id)
    {
        $achats = Achats::findOrFail($id);
        $constraints = [
            'id_produit' => $request['id_produit'],
            'id_users' => $request['id_users'],
            'quantite' => $request['quantite'],
            'date' => $request['date'],
            'statut' => $request['statut']
            ];
        $input = [
            'id_produit' => $request['id_produit'],
            'id_users' => $request['id_users'],
            'quantite' => $request['quantite'],
            'date' => $request['date'],
              'statut' => $request['statut']
        ];
       
       Achats::where('id', $id)
            ->update($input);
        
       return redirect()->intended('system-management/achats');
    }


    public function destroy($id)
    {
        Achats::where('id', $id)->delete();
         return redirect()->intended('system-management/achats');
    }

 
    public function search(Request $request) {
        $constraints = [
            'id_produit' => $request['id_produit'],
            'id_users' => $request['id_users'],
            'quantite' => $request['quantite'],
            'date' => $request['date']
            ];

       $achats = $this->doSearchingQuery($constraints);
       return view('system-mgmt/achats/index', ['achats' => $achats, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = Achats::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
        'id_produit' => 'required|max:60|unique:achats',
        'id_users' => 'required|max:3|unique:achats',
        'quantite' => 'required|max:15|unique:achats'

     
    ]);
    }
}
