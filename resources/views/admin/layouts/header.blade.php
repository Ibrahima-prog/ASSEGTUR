<header class="main-header">
    <!-- Logo -->

    <a href="/admin/anasayfa" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>AP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ASSEGTUR </b> ADMIN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
             PROFİL
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('admin/images/user.png') }}" class="img-circle" alt="User Image">

                <p>
                  <span class="hidden-xs">@if(Auth::user()) {{ Auth::user()->name }} @endif</span>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
          <li class="user-footer">
                <div class="pull-left">
                  <a class="btn btn-default btn-flat" href="{{ route('admin.kullanici.sifredegistir') }}">Şifreyi Değiştir</a>
                </div>
                <div class="pull-right">
                      <a class="btn btn-default btn-flat" href="#"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                         Çıkış yap
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>