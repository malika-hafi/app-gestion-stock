  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> AdaGestion</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset("/bower_components/AdminLTE/dist/img/user.png") }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->username }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user.png") }}" class="img-circle" alt="User Image">

                <p>
                  Bienvenue {{ Auth::user()->username }}
                </p>

              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               @if (Auth::guest())
                  <div class="pull-left">
                    <a href="{{ route('login') }}" class="btn btn-default btn-flat">Login</a>
                  </div>
               @else
                 <div class="pull-left">
                   
                  </div>
                 <div class="pull-right">

                         <a href="{{ route('logout') }}">
                                            Déconnexion
                                        </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
  </form>
                 </div>
                @endif
              </li>
            </ul>
          </li>

        </ul>

      </div>

    </nav>
  </header>
  