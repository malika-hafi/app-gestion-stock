<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Invoice;
use App\Country;
use App\Ventes;
use App\User;
use DB;

class InvoiceController extends Controller
{


	    public function index()
    {
    	   $fournisseur =User::All();
         $achats = $this->get_customer_data();
        return view('invoice',['achats ' => $achats ],['fournisseur' => $fournisseur])->with('achats', $achats);
    }
 
 public function show($id)
    {   $f =User::find(5);
        $achats = Achats::find($id);
            $fournisseur =User::All();
        $produit =Produit::All();
      
        return view('system-mgmt/achats.detail', compact('f'),compact('achats'),compact('achats'))->with('fournisseur', $fournisseur)->with('produit', $produit);
    }
    function get_customer_data($id)
    {
     $achats = DB::table('achats')
         ->limit(10)
         ->get()->where('id','=',$id);
     return $achats;
    }
    function get_customer_data_user($id)
    {
     $users = DB::table('users')
         ->limit(1111)
         ->get()->where('id','=',$id);
     return $users;
    }
    function get_customer_data_produit($id)
    {
     $produit = DB::table('produits')
         ->limit(10)
         ->get()->where('id','=',$id);
     return $produit;
    }

    function exportPDF($id)
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html($id));
     return $pdf->stream();
    }

    function convert_customer_data_to_html($id)
    {
     $users = $this->get_customer_data_user($id);
     $achats = $this->get_customer_data($id);
     $produit = $this->get_customer_data_produit($id);
     $output = '
     <h3 align="center">invoice  </h3>
           <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>';          foreach($users as $u)
     {
      $output .= '
            <strong>Admin, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (+212) 6 23 54 32<br>
            Email: adagestion@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>      
          
            <strong> '.$u->lastname.' '.$u->firstname.'</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: '.$u->email.'
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Produit</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Détails</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Quantité</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Prix  </th>
    
   </tr>
     ';  
     foreach($achats as $achats)
     {
    
          foreach($produit as $produit)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$produit->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$produit->details .'</td>
       <td style="border: 1px solid; padding:12px;">'.$achats->quantite.'</td>
       <td style="border: 1px solid; padding:12px;">'.$produit->prix.'</td>
     
      </tr>
       <div class="col-xs-6">
          <p class="lead">Amount Due '.$achats->date.'</p><br>
          <p class="lead"><b>Total : </b>'.$produit->prix * $achats->quantite.'  DH</p> 
 
   
        </div>
      ';
     }}}
     $output .= '</table>';
     return $output;
    }

}
