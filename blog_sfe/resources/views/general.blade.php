
@include('/layouts/header')
@include('/layouts/nav')
@include('/layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
        <small>Afficher Articles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Catégories</a></li>
        <li class="active">Afficher Articles</li>
      </ol>
    </section>
<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> Afficher Articles
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                      <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Produit ID: </th>
                                <th> Titre de Produit: </th>
                                <th> Image de Produit: </th>
                                <th> Prix de Produit: </th>
                                <th> Solde de Produit: </th>
                                <th> Mot-cles Produit: </th>
                                <th> Date de Produit: </th>
                                <th> Supprimer Produit: </th>
                                <th> Modifier Produit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                           
                            
                            <tr><!-- tr begin -->
                                <td>  </td>
                                <td>  </td>
                                <td> </td>
                                <td>  </td>
                                <td> 
                                </td>
                                <td> </td>
                                <td> </td>
                                <td> 
                                     
                                     <a >
                                     
                                        <i class="fa fa-trash-o"></i> Supprimer
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a>
                                     
                                        <i class="fa fa-pencil"></i> Modifier
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                         
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


 @include('/layouts/footer')
  @include('/layouts/control')

  