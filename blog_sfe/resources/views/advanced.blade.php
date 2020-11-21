@include('/layouts/header')
@include('/layouts/nav')
@include('/layouts/sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Article
        <small>Ajouter Article</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Catégories</a></li>
        <li class="active">Ajouter Article</li>
      </ol>
    </section>

    <!-- Main content -->
   <div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Ajouter Produit
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
      
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form action='/general' method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   {!! csrf_field() !!}
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Titre Produit </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="nomPro" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                 <!-- form-group Finish -->
                   
                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label">  Categorie ID  </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="id_categorie" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div>
                   
      
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Produit Prix </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="prix" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Description Produit </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="pro_desc" cols="19" rows="6" class="form-control"></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Ajouter Produit" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

    @include('/layouts/footer')
    @include('/layouts/control')