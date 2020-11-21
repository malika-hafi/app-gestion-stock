@include('/layouts/header')
@include('/layouts/nav')
@include('/layouts/sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Produits
        <small>Afficher Produits</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Produits</a></li>
        <li class="active">Afficher Produits</li>
      </ol>
    </section>

 



<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Afficher Produits
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID Produit : </th>
                                <th> Titre Product : </th>
                                <th>   Image: </th>
                                <th>   Prix: </th>
                                <th>   Solde: </th>
                                <th> Code Produit  : </th>
                                <th>   Date: </th>
                                <th> Supprimer: </th>
                                <th> Modifier: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                        
                            
                            <tr><!-- tr begin -->
                                <td>   </td>
                                <td>   </td>
                                <td> <img src="product_images/ " width="60" height="60"></td>
                                <td>  </td>
                                <td>  
                                </td>
                                <td>   </td>
                                <td>   </td>
                                <td> 
                                     
                                     <a href="index.php?delete_product= ">
                                     
                                        <i class="fa fa-trash-o"></i> Supprimer
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_product= ">
                                     
                                        <i class="fa fa-pencil"></i> Modifier
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                          
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('/layouts/footer')
 
     @include('/layouts/control')

  