  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user.png") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        
 
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      
 @if(Auth::user()->role=='nouveau')
 
<script>window.location = "/welcome";</script>
 
 
      
      </ul>
    @endif

    @if(Auth::user()->role=='admin')
    <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/dashboard"><i class=" fa fa-fw fa-home  "></i> <span>Accueil</span></a></li>
        
             
 <li><a href="{{  url('system-management/categorie') }}"><i class="fa fa-pie-chart"></i> <span>Catégories </span></a></li>

           <li><a href="{{  url('system-management/produit') }}"><i class="fa fa-th"></i> <span>Article </span></a></li>

         

           
           
      <li class="treeview">
          <a href="{{ url('system-management/achats') }}"><i class="fa fa-edit"></i><span>Achats</span>
              <span class="pull-right-container">
              
                
              <small class="label pull-right bg-blue"> {{$new_achats}}</small>
            
            </span>
          </a>
       </li>   
      <li class="treeview"><a href="{{ url('system-management/ventes') }}"><i class=" glyphicon glyphicon-list-alt "></i> <span>Ventes<span class="pull-right-container">
              
                
              <small class="label pull-right bg-red"> {{$new_ventes}}</small>
            
            </span> </span></a></li>


    
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-fw fa-user"></i> <span>Utilisateur </span>
                 <span class="pull-right-container">
              
                
              <small class="label pull-right bg-green"> {{$new_users }}</small>
            
            </span></a></li>
       
       
     
      </ul>
      @endif 

        <!-- Clientss -->
      @if(Auth::user()->role=='client')
    <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
       
        <li class="active"><a href="/dashboard"><i class=" fa fa-fw fa-home  "></i> <span>Accueil</span></a></li>    
             
 <li><a  href="/categorie"><i class="fa fa-pie-chart"></i> <span>Categories </span></a></li>

             

           <li><a href="{{  url('system-management/ventes1') }}"><i class="fa fa-th"></i> <span>Achats </span></a></li>
           
           <li><a href="{{ route('user-management.index') }}"><i class="fa fa-fw fa-user"></i> <span>Profile </span>
                 </a></li>

      </ul>
      @endif 


         @if(Auth::user()->role=='fournisseur')
    <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
       
        
    <li class="active"><a href="/dashboard"><i class=" fa fa-fw fa-home  "></i> <span>Accueil</span></a></li>   

 <li><a href="/categorie"><i class="fa fa-pie-chart"></i> <span>Categories </span></a></li>

             


      <li><a href="{{  url('system-management/achats1') }}"><i class=" glyphicon glyphicon-list-alt "></i> <span>Ventes </span></a></li>  

<li><a href="{{ route('user-management.index') }}"><i class="fa fa-fw fa-user"></i> <span>Profile </span>
                 </a></li>
 
      
      </ul>
      @endif 
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>