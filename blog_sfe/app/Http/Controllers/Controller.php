<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use  Illuminate\Http\Request;
use DB;
class Controller extends BaseController
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
    	$titre=$req->input('nomPro');
    	$prix=$req->input('prix');
    	$desc=$req->input('pro_desc');
    
    	$cat=$req->input('id_categorie');



    	$data=array('nomPro'=>$titre,'prix'=>$prix,'pro_desc'=>$desc,'id_categorie'=>$cat);
    	DB::table('produit')->insert($data);
    }
    
    function insertCat(Request $reqq){
    	$titre=$reqq->input('titre_cat');
    	$description =$reqq->input('description ');
    



    	$data=array('titre_cat'=>$titre,'description '=>$description );
    	DB::table('categorie')->insertCat($data);
    }
}
