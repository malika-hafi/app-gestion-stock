<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Achats;
use App\User;
use App\Produit;
use Excel;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;

class ReportController extends Controller
{
        public function index()
    {
           $fournisseur =User::All();
         $achats = $this->get_customer_data();
        return view('system-mgmt/report/index',['achats ' => $achats ],['fournisseur' => $fournisseur])->with('achats', $achats);
    }
         
 

    public function exportExcel(Request $request) {
        $this->prepareExportingData($request)->export('xlsx');
        redirect()->intended('detail');
    }
     function get_customer_data()
    {
     $achats = DB::table('achats')
 
         ->get();
     return $achats;
    }
        function get_customer_data_user() 
    {
     $users = DB::table('users') ->get();
        
     return $users;
    }
    function get_customer_data_produit( )
    {
     $produit = DB::table('produits')
 
         ->get();
     return $produit;
    }
public function exportPDF(Request $request) {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
}
function convert_customer_data_to_html()
    {
     $achats = $this->get_customer_data();
     $users  =$this->get_customer_data_user();
     $produit = $this->get_customer_data_produit();

     $output = '
       <h2 align="left">AdaGestion      </h2>
       <h3 align="left">Hay amal champs de course    </h3>
       <h3 align="left">Agadir   </h3>
       <h3 align="left">+212 2 65 98 58   </h3>
      


        
       
     
     <h3 align="center">La liste des achats  </h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">id_produit</th>
    <th style="border: 1px solid; padding:12px;" width="30%">id_fournisseur</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Qauntite</th>
    <th style="border: 1px solid; padding:12px;" width="15%"> Date  </th>
   
   </tr>
   
    
     ';  
     foreach($achats as $achats)
     {   
                  
        
              $output .= '
              <tr>
               <td style="border: 1px solid; padding:12px;">'. $achats->id_produit.'</td>
               <td style="border: 1px solid; padding:12px;">'.$achats->id_users.'</td>
               <td style="border: 1px solid; padding:12px;">'.$achats->quantite.'</td>
               <td style="border: 1px solid; padding:12px;">'.$achats->date.'</td>
               
              </tr>
              ';
       
    }
     $output .= '</table>';
     return $output;
    }
 
    
    private function prepareExportingData($request) {
        $author = Auth::user()->username;
        $achats = $this->getExportingData(['from'=> $request['from'], 'to' => $request['to']]);
        return Excel::create('report_from_'. $request['from'].'_to_'.$request['to'], function($excel) use($achats, $request, $author) {

        // Set the title
        $excel->setTitle('List of hired ventes from '. $request['from'].' to '. $request['to']);

        // Chain the setters
        $excel->setCreator($author)
            ->setCompany('HoaDang');

        // Call them separately
        $excel->setDescription('The list of hired achats');

        $excel->sheet('Hired_Employees', function($sheet) use($achats) {

        $sheet->fromArray($achats);
            });
        });
    }

 

   

    private function getExportingData($constraints) {
        return DB::table('achats')
         
        ->select('achats.id_produit', 'achats.id_users', 'achats.quantite', 
         'achats.date' )
        
        ->get()
        ->map(function ($item, $key) {
        return (array) $item;
        })
        ->all();
    }
 
}
