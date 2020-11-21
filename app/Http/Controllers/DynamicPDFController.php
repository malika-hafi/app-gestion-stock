<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DynamicPDFController extends Controller
{
    function index()
    {
     $countries = $this->get_customer_data();
     return view('system-mgmt/country/dynamic_pdf')->with('countries', $countries);
    }

    function get_customer_data()
    {
     $countries = DB::table('country')
         ->limit(10)
         ->get();
     return $countries;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '
     <h3 align="center">countries Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="15%">City</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Postal Code</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Country</th>
   </tr>
     ';  
     foreach($countries as $countries)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$countries->CustomerName.'</td>
       <td style="border: 1px solid; padding:12px;">'.$countries->Address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$countries->City.'</td>
       <td style="border: 1px solid; padding:12px;">'.$countries->PostalCode.'</td>
       <td style="border: 1px solid; padding:12px;">'.$countries->Country.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
