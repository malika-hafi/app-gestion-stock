<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Produit;
 
use App\Ventes1;
use PDF;
class VentesController1 extends Controller
{
     
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function orderPdf($id)
 {
     $ventes= Ventes1::findOrFail($id);
     $pdf = PDF::loadView('ventes_pdf', compact('order'));
     $name = "commandeNo-".$order->id.".pdf";
     return $pdf->download($name);
 }
    public function index()
    {
             $ventes = Ventes1::paginate(20);
             $fournisseur =User::All();
             $produit =Produit::All();
       

          return view('system-mgmt/ventes1/index',['produit' => $produit],['ventes' => $ventes])->with('fournisseur', $fournisseur);
          
    }
 
    public function create()
    {
          
           $fournisseur =User::All();
        $produit =Produit::All();

        return view('system-mgmt/ventes1/create',['produit' => $produit])->with('fournisseur', $fournisseur); 
    }
 
  public function store(Request $request)
    {
         
         Ventes1::create([
         'id_produit' => $request['id_produit'],
            'id_users' => $request['id_users'],
            'quantite' => $request['quantite'],
            'date' => $request['date'],
            'statut' => $request['statut']

        ]);
        return redirect()->intended('system-management/ventes1');
    }
 
   public function show($id)
    {   $f =User::find(5);
        $ventes = Ventes1::find($id);
         $fournisseur =User::All();
        $produit =Produit::All();
        return view('system-mgmt/ventes1.detail', compact('f'),compact('ventes'))->with('fournisseur', $fournisseur)->with('produit', $produit);
    }


 
public function edit($id)
    {
        $ventes = Ventes1::find($id);
        $fournisseur =User::All();
        $produit =Produit::All();
    
    return view('system-mgmt/ventes1/edit',['produit' => $produit],['ventes' => $ventes])->with('fournisseur', $fournisseur);
          
    }
    



      public function update(Request $request, $id)
    {
        $ventes = Ventes1::findOrFail($id);
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
       
       Ventes1::where('id', $id)
            ->update($input);
        
       return redirect()->intended('system-management/ventes1');
    }
 
    public function destroy($id)
    {
         Ventes1::where('id', $id)->delete();
         return redirect()->intended('system-management/ventes1');
    }
 
    public function search(Request $request) {
        $constraints = [
            'firstname' => $request['firstname'],
            'department.name' => $request['department_name']
            ];
        $employees = $this->doSearchingQuery($constraints);
        $constraints['department_name'] = $request['department_name'];
        return view('system-mgmt/ventes/index', ['employees' => $employees, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = DB::table('ventes')
             ->leftJoin('produit', 'ventes.id_produit', '=', 'produit.id_produit')
        ->leftJoin('users', 'ventes.id_users', '=', 'users.id');
 $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
 
 
    private function validateInput($request) {
        $this->validate($request, [
            'id_produit' => 'required|max:60',
            'id_users' => 'required|max:60',
            'nom_client' => 'required|max:60',
            'total' => 'required|max:120',
            'qte_nbr' => 'required',
                'statut' => 'required'
        ]);
    }

    private function createQueryInput($keys, $request) {
        $queryInput = [];
        for($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }
}
