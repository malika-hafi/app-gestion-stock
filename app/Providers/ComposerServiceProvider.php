<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\User;
use App\Achats;
use DB;
class ComposerServiceProvider extends ServiceProvider 
{

    public function boot()
    {
        View()->composer('*', function($view)
        {
  	        $view->with('new_users',DB::table('users')->where('role','=','nouveau')->count());

  	         $view->with('new_achats',DB::table('achats')->where('statut','=','en attente')->count());

  $view->with('new_ventes',DB::table('ventes')->where('statut','=','en attende')->count());


  	     });
 
    }




    
}