
   
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Accueil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin')}}"><i class="fa fa-circle-o"></i> Accueil</a></li>
           
          </ul>
        </li>

       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('general')}}"><i class="fa fa-circle-o"></i> Afficher Articles</a></li>
            <li><a href="{{url('advanced')}}"><i class="fa fa-circle-o"></i> Ajouter Articles</a></li>
  
          </ul>
      

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Catégories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('general')}}"><i class="fa fa-circle-o"></i> Afficher Catégories</a></li>
            <li><a href="{{url('ajouterCat')}}"><i class="fa fa-circle-o"></i> Ajouter Categorie</a></li>
          
          </ul>
        </li>

        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-tag"></i>
            <span>Client</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('afficherClients')}}"><i class="fa fa-circle-o"></i> Afficher Client</a></li>
            <li><a href="{{url('AjouterClients')}}"><i class="fa fa-circle-o"></i> Ajouter Client</a></li>
             
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-tag"></i> <span>Fournisseurs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('general')}}"><i class="fa fa-circle-o"></i> Afficher Fournisseur</a></li>
            <li><a href="{{url('advanced')}}"><i class="fa fa-circle-o"></i> Ajouter Fournisseur</a></li>
          
          </ul>
        </li>

 <li>
          <a href="{{url('widgets')}}">
            <i class="fa fa-th"></i> <span>Stock</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

<li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-tag"></i> <span>Achats</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('general')}}"><i class="fa fa-circle-o"></i> Nouvelle Achat</a></li>
            <li><a href="{{url('advanced')}}"><i class="fa fa-circle-o"></i> Afficher les Achats</a></li>
          
          </ul>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-tag"></i> <span>Ventes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('general')}}"><i class="fa fa-circle-o"></i> Nouvelle Vente</a></li>
            <li><a href="{{url('advanced')}}"><i class="fa fa-circle-o"></i> Afficher les Ventes</a></li>
          
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-tag"></i> <span>Commandes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('general')}}"><i class="fa fa-circle-o"></i> Nouvelle commande</a></li>
            <li><a href="{{url('advanced')}}"><i class="fa fa-circle-o"></i> Afficher les commandes</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('simple')}}"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="{{url('data')}}"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="{{url('calender')}}">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="{{url('mailbox')}}">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('invoice')}}"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="{{url('profile')}}"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="{{url('login')}}"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="{{url('register')}}"><i class="fa fa-circle-o"></i> Register</a></li>

            <li><a href="{{url('pace')}}"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>


        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

