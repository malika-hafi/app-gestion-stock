@include('/layouts/header')
@include('/layouts/nav')
@include('/layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clients
        <small>Afficher Clients</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Clients</a></li>
        <li class="active">Afficher Clients</li>
      </ol>
    </section>

 



<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Afficher Clients
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Nom: </th>
                                <th> Image: </th>
                                <th>  E-Mail: </th>
                                
                                <th> Age: </th>
                                <th> Contact: </th>
                                <th> Modifier: </th>
                                <th> Supprimer: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                           
                            
                            <tr>   
                    
                                     
                                     
                                        <i class="fa fa-pencil"></i> Modifier
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                    
                                     
                                        <i class="fa fa-trash-o"></i> Supprimer
                                    
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

  