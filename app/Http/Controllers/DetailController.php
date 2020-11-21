<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Ventes;
use App\User;
use App\Produit;
use Excel;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;

class DetailController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        date_default_timezone_set('asia/ho_chi_minh');
        $format = 'Y/m/d';
        $now = date($format);
        $to = date($format, strtotime("+30 days"));
        
  $constraints = [
            'from' => $now,
            'to' => $to
        ];

        $ventes = $this->getHiredEmployees($constraints);
        return view('detail', ['ventes' => $ventes, 'searchingVals' => $constraints]);
         
        return view('detail');
    }
      private function getHiredEmployees($constraints) {
        $ventes = Ventes::where('date', '>=', $constraints['from'])
                        ->where('date', '<=', $constraints['to'])
                        ->get();
        return $ventes;
    }

    public function exportExcel(Request $request) {
        $this->prepareExportingData($request)->export('xlsx');
        redirect()->intended('detail');
    }
     function get_customer_data()
    {
     $ventes = DB::table('ventes')
         ->limit(10)
         ->get();
     return $ventes;
    }
public function exportPDF(Request $request) {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
}
function convert_customer_data_to_html()
    {
     $ventes = $this->get_customer_data();
     $output = '
       <h2 align="left">AdaGestion      </h2>
       <h3 align="left">Hay amal champs de course    </h3>
       <h3 align="left">Agadir   </h3>
       <h3 align="left">+212 2 65 98 58   </h3>
      


        
       
     
     <h3 align="center">La liste des ventes  </h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">id id_produit</th>
    <th style="border: 1px solid; padding:12px;" width="30%">id_fournisseur</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Qauntite</th>
    <th style="border: 1px solid; padding:12px;" width="15%"> Date  </th>
   
   </tr>
   
    
     ';  
     foreach($ventes as $ventes)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$ventes->id_produit.'</td>
       <td style="border: 1px solid; padding:12px;">'.$ventes->id_users.'</td>
       <td style="border: 1px solid; padding:12px;">'.$ventes->quantite.'</td>
       <td style="border: 1px solid; padding:12px;">'.$ventes->date.'</td>
       
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }

    
    private function prepareExportingData($request) {
        $author = Auth::user()->username;
        $ventes = $this->getExportingData(['from'=> $request['from'], 'to' => $request['to']]);
        return Excel::create('report_from_'. $request['from'].'_to_'.$request['to'], function($excel) use($ventes, $request, $author) {

        // Set the title
        $excel->setTitle('List of hired ventes from '. $request['from'].' to '. $request['to']);

        // Chain the setters
        $excel->setCreator($author)
            ->setCompany('HoaDang');

        // Call them separately
        $excel->setDescription('The list of hired ventes');

        $excel->sheet('Hired_Employees', function($sheet) use($ventes) {

        $sheet->fromArray($ventes);
            });
        });
    }

 

   

    private function getExportingData($constraints) {
        return DB::table('ventes')
         
        ->select('ventes.id_produit', 'ventes.id_users', 'ventes.quantite', 
         'ventes.date' )
        
        ->get()
        ->map(function ($item, $key) {
        return (array) $item;
        })
        ->all();
    }
 

}
