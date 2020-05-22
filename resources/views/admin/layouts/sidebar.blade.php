  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/images/user.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>@if(Auth::user()) {{ Auth::user()->name }} @endif</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En Ligne</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu rapide</li>

        <li class="treeview {{ str_contains(request()->url(), '/slider') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.ayarlari.slider') }}"><i class="fa fa-hand-o-right"></i> Les Photos Du Slider</a></li>        
          </ul>
        </li>

         <li class="treeview {{ str_contains(request()->url(), '/etkinlik') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Activités</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.etkinlik.yonet') }}"><i class="fa fa-hand-o-right"></i> Gerer Les Activités</a></li>
            <li><a href="{{ route('admin.etkinlik.ekle') }}"><i class="fa fa-hand-o-right"></i> Ajouter Des Activités</a></li>
           
          </ul>
        </li>


        <li class="treeview {{ str_contains(request()->url(), '/kurumsal') ? 'active' : '' }}">
          <a href="{{ route('admin.kurumsal') }}">
            <i class="fa fa-dashboard"></i> <span>Textes De Presentation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.kurumsal.tarigi') }}"><i class="fa fa-hand-o-right"></i> Notre Histoire</a></li>
            <li><a href="{{ route('admin.kurumsal.hakkimizda') }}"><i class="fa fa-hand-o-right"></i> A propos De L'ASSEGTUR</a></li>
            <li><a href="{{ route('admin.kurumsal.misyon') }}"><i class="fa fa-hand-o-right"></i> Notre Mission</a></li>
            <li><a href="{{ route('admin.kurumsal.plan') }}"><i class="fa fa-hand-o-right"></i> Notre Plan</a></li>
            <li><a href="{{ route('admin.kurumsal.visyon') }}"><i class="fa fa-hand-o-right"></i> Notre Vision</a></li>
            {{-- <li><a href="{{ route('admin.kurumsal.sikcasorulansorular') }}"><i class="fa fa-hand-o-right"></i> Sıkça Sorulan Soruları</a></li> --}}
          </ul>
        </li>

         <li class="treeview {{ str_contains(request()->url(), '/yonetim') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Bureau Éxécutif</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{ route('admin.yonetim.yonet') }}"><i class="fa fa-hand-o-right"></i> Les Membres Du Bureau</a></li>
            <li><a href="{{ route('admin.yonetim.ekle') }}"><i class="fa fa-hand-o-right"></i> Ajouter Un Membre</a></li>
          </ul>
        </li>

         <li class="treeview {{ str_contains(request()->url(), '/onkayi') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Membres De L'ASSEGTUR</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.onkayi.yonet') }}"><i class="fa fa-hand-o-right"></i>Les Membres</a></li>
            {{-- <li><a href="{{ route('admin.onkayi.saatlarvekosullari') }}"><i class="fa fa-hand-o-right"></i> Şartlar ve Koşulları</a></li> --}}
          </ul>
        </li>

       

      

         <li class="treeview {{ str_contains(request()->url(), '/haber') ? 'active' : '' }}">
          <a href="{{ route('admin.haber') }}">
            <i class="fa fa-dashboard"></i> <span>Le Journal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.haber.yonet') }}"><i class="fa fa-hand-o-right"></i> Les Nouvelles</a></li>
            <li><a href="{{ route('admin.haber.ekle') }}"><i class="fa fa-hand-o-right"></i>  Ajouter Une Nouvelle</a></li>

          </ul>
        </li>


        <li class="treeview {{ str_contains(request()->url(), '/makale') ? 'active' : '' }}">
          <a href="{{ route('admin.makale') }}">
            <i class="fa fa-dashboard"></i> <span>Thèses Et Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.makale.yonet') }}"><i class="fa fa-hand-o-right"></i> Les Thèses Et Articles</a></li>
            <li><a href="{{ route('admin.makale.ekle') }}"><i class="fa fa-hand-o-right"></i>  Ajouter Une Thèse Ou Un Article</a></li>
            <li> <a href="{{route('departments.index')}}"> <i class="fa fa-hand-o-right"></i>Les Départments </a></li>
            <li> <a href="{{route('faculties.index')}}"> <i class="fa fa-hand-o-right"></i>Les Facultés </a></li>
          </ul>
        </li>

        

          <li class="treeview {{ str_contains(request()->url(), '/kullanici') ? 'active' : '' }}">
          <a href="{{ route('admin.kullanici') }}">
            <i class="fa fa-dashboard"></i> <span>Les Administrateurs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.kullanici.yonet') }}"><i class="fa fa-hand-o-right"></i> Les Administrateurs</a></li>
            <li><a href="{{ route('admin.kullanici.ekle') }}"><i class="fa fa-hand-o-right"></i> Ajouter Un Administrateur</a></li>
          </ul>
        </li>
        <li class="treeview {{ str_contains(request()->url(), '/ayarlari') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Réglages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li><a href="{{ route('admin.ayarlari.slider') }}"><i class="fa fa-hand-o-right"></i> Les Photos Du Slider</a></li>         --}}
            <li><a href="{{ route('admin.ayarlari.genelayarlari') }}"><i class="fa fa-hand-o-right"></i> Les Réglages Du Sites</a></li>        
          </ul>
        </li>


        <li class="header" style="text-align: center;">ASSEGTUR</li>
      

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
