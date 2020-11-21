<?php

namespace App\Http\Controllers;
use InvoiceVentes;
use App\Country;
use App\Ventes;
use App\User;
use DB;
use Illuminate\Http\Request;

class InvoiceVentesController extends Controller
{
    	    public function index()
    {
    	   $fournisseur =User::All();
         $ventes = $this->get_customer_data();
        return view('invoiceVentes',['ventes ' => $ventes ],['fournisseur' => $fournisseur])->with('ventes', $ventes);
    }
 
      function get_customer_data($id)
    {
     $ventes = DB::table('ventes')
         ->limit(10)
         ->get()->where('id','=',$id);
     return $ventes;
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
     $ventes = $this->get_customer_data($id);
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
     foreach($ventes as $ventes)
     {
    
          foreach($produit as $produit)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$produit->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$produit->details .'</td>
       <td style="border: 1px solid; padding:12px;">'.$ventes->quantite.'</td>
       <td style="border: 1px solid; padding:12px;">'.$produit->prix.'</td>
     
      </tr>
       <div class="col-xs-6">
          <p class="lead">Amount Due '.$ventes->date.'</p><br>
          <p class="lead"><b>Total : </b>'.$produit->prix * $ventes->quantite.'  DH</p> 
 
   
        </div>
      ';
     }}}
     $output .= '</table>';
     return $output;
    }
}
