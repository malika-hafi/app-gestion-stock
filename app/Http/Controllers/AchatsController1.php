<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Achats;
use App\Achats1;
use App\Produit;
use App\User;

class AchatsController1 extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        $achats = Achats1::paginate(20);
        $fournisseur =User::All();
         $produit =Produit::All();

return view('system-mgmt/achats1/index',['produit' => $produit],['achats' => $achats])->with('fournisseur', $fournisseur);
  
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

        return view('system-mgmt/achats1/create',['produit' => $produit])->with('fournisseur', $fournisseur);
        }
  public function store(Request $request)
    {
         
         Achats1::create([
         'id_produit' => $request['id_produit'],
            'id_users' => $request['id_users'],
            'quantite' => $request['quantite'],
            'date' => $request['date'],
                        
        ]);

        return redirect()->intended('system-management/achats1');
    }
    
 public function show($id)
    {   $f =User::find(5);
        $achats = Achats1::find($id);
            $fournisseur =User::All();
        $produit =Produit::All();
      
        return view('system-mgmt/achats1.detail', compact('f'),compact('achats'),compact('ventes'))->with('fournisseur', $fournisseur)->with('produit', $produit);
    }
   

 


    

       public function edit($id)
    {
        $achats = Achats1::find($id);
        // Redirect to user list if updating user wasn't existed
         $fournisseur =User::All();

         $produit =Produit::All();
    
    return view('system-mgmt/achats1/edit',['produit' => $produit],['achats' => $achats])->with('fournisseur', $fournisseur);
    }
    



      public function update(Request $request, $id)
    {
        $achats = Achats1::findOrFail($id);
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
       
       Achats1::where('id', $id)
            ->update($input);
        
       return redirect()->intended('system-management/achats1');
    }


    public function destroy($id)
    {
        Achats::where('id', $id)->delete();
         return redirect()->intended('system-management/achats1');
    }

 
    public function search(Request $request) {
        $constraints = [
            'id_produit' => $request['id_produit'],
            'id_users' => $request['id_users'],
            'quantite' => $request['quantite'],
            'date' => $request['date'],
               'statut' => $request['statut']
            ];

       $achats = $this->doSearchingQuery($constraints);
       return view('system-mgmt/achats1/index', ['achats' => $achats, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = Achats1::query();
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
