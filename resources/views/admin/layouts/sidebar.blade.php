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
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Hızlı Menü</li>
          

         <li class="treeview {{ str_contains(request()->url(), '/etkinlik') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Etkinlikleri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.etkinlik.yonet') }}"><i class="fa fa-hand-o-right"></i> Etkinliği Yönet</a></li>
            <li><a href="{{ route('admin.etkinlik.ekle') }}"><i class="fa fa-hand-o-right"></i> Etkinliği Ekle</a></li>
           
          </ul>
        </li>


        <li class="treeview {{ str_contains(request()->url(), '/kurumsal') ? 'active' : '' }}">
          <a href="{{ route('admin.kurumsal') }}">
            <i class="fa fa-dashboard"></i> <span>Kurumal Metinleri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.kurumsal.tarigi') }}"><i class="fa fa-hand-o-right"></i> Tariğimiz</a></li>
            <li><a href="{{ route('admin.kurumsal.hakkimizda') }}"><i class="fa fa-hand-o-right"></i> Hakkımızda</a></li>
            <li><a href="{{ route('admin.kurumsal.misyon') }}"><i class="fa fa-hand-o-right"></i> Misyon</a></li>
            <li><a href="{{ route('admin.kurumsal.plan') }}"><i class="fa fa-hand-o-right"></i> plan</a></li>
            <li><a href="{{ route('admin.kurumsal.visyon') }}"><i class="fa fa-hand-o-right"></i> Visyon</a></li>
            {{-- <li><a href="{{ route('admin.kurumsal.sikcasorulansorular') }}"><i class="fa fa-hand-o-right"></i> Sıkça Sorulan Soruları</a></li> --}}
          </ul>
        </li>

         <li class="treeview {{ str_contains(request()->url(), '/yonetim') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Yönetim Kurulu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{ route('admin.yonetim.yonet') }}"><i class="fa fa-hand-o-right"></i> Yönetim Üyeleri</a></li>
            <li><a href="{{ route('admin.yonetim.ekle') }}"><i class="fa fa-hand-o-right"></i> Üye Ekle</a></li>
          </ul>
        </li>

         <li class="treeview {{ str_contains(request()->url(), '/onkayi') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Ön kayıt Bilgileri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.onkayi.yonet') }}"><i class="fa fa-hand-o-right"></i> Kayıtları</a></li>
            {{-- <li><a href="{{ route('admin.onkayi.saatlarvekosullari') }}"><i class="fa fa-hand-o-right"></i> Şartlar ve Koşulları</a></li> --}}
          </ul>
        </li>

       

          {{-- <li class="treeview {{ str_contains(request()->url(), '/gallery') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Fotoğraf Galerisi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.gallery.yonet') }}"><i class="fa fa-hand-o-right"></i> Mevcut Fotoğrafları</a></li>
             <li><a href="{{ route('admin.gallery.ekle') }}"><i class="fa fa-hand-o-right"></i>  Fotoğraf(lar) Ekle</a></li>
          </ul>
        </li> --}}

            {{-- <li class="treeview {{ str_contains(request()->url(), '/video') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Video Galerisi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.video.yonet') }}"><i class="fa fa-hand-o-right"></i> Mevcut Videoları</a></li>
            <li><a href="{{ route('admin.video.ekle') }}"><i class="fa fa-hand-o-right"></i> Video Ekle</a></li>
          </ul>
        </li> --}}

        {{-- <li class="treeview {{ str_contains(request()->url(), '/topluluk') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Topluluk İşleri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{ route('admin.topluluk.yonet') }}"><i class="fa fa-hand-o-right"></i> Yönetim Üyeleri</a></li>
             <li><a href="{{ route('admin.topluluk.ekle') }}"><i class="fa fa-hand-o-right"></i> Yönetim Üye Ekle</a></li>
             <li><a href="{{ route('admin.topluluk.aktathakkinda') }}"><i class="fa fa-hand-o-right"></i> SÜ AKTAT Hakkında</a></li>

          </ul>
        </li> --}}

         <li class="treeview {{ str_contains(request()->url(), '/haber') ? 'active' : '' }}">
          <a href="{{ route('admin.haber') }}">
            <i class="fa fa-dashboard"></i> <span>Haberler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.haber.yonet') }}"><i class="fa fa-hand-o-right"></i> Mevcut Haberleri</a></li>
            <li><a href="{{ route('admin.haber.ekle') }}"><i class="fa fa-hand-o-right"></i>  Haber Ekle</a></li>

          </ul>
        </li>


        <li class="treeview {{ str_contains(request()->url(), '/makale') ? 'active' : '' }}">
          <a href="{{ route('admin.makale') }}">
            <i class="fa fa-dashboard"></i> <span>Makaleler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.makale.yonet') }}"><i class="fa fa-hand-o-right"></i> Mevcut Makaleleri</a></li>
            <li><a href="{{ route('admin.makale.ekle') }}"><i class="fa fa-hand-o-right"></i>  Makale Ekle</a></li>
            <li> <a href="{{route('departments.index')}}"> <i class="fa fa-hand-o-right"></i>Departments </a></li>
            <li> <a href="{{route('faculties.index')}}"> <i class="fa fa-hand-o-right"></i>Faculties </a></li>
          </ul>
        </li>

        
         {{-- <li class="treeview {{ str_contains(request()->url(), '/duyuru') ? 'active' : '' }}">
          <a href="{{ route('admin.duyuru') }}">
            <i class="fa fa-dashboard"></i> <span>Duyuru</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.duyuru.yonet') }}"><i class="fa fa-hand-o-right"></i> Mevcut Duyuruları</a></li>
            <li><a href="{{ route('admin.duyuru.ekle') }}"><i class="fa fa-hand-o-right"></i>  Duyuru Ekle</a></li>

          </ul>
        </li> --}}


          <li class="treeview {{ str_contains(request()->url(), '/kullanici') ? 'active' : '' }}">
          <a href="{{ route('admin.kullanici') }}">
            <i class="fa fa-dashboard"></i> <span>Kullanıcı</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.kullanici.yonet') }}"><i class="fa fa-hand-o-right"></i> Admin Kullanıcılar</a></li>
            <li><a href="{{ route('admin.kullanici.ekle') }}"><i class="fa fa-hand-o-right"></i> Admin Ekle</a></li>
          </ul>
        </li>
        <li class="treeview {{ str_contains(request()->url(), '/ayarlari') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Ayarları</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.ayarlari.slider') }}"><i class="fa fa-hand-o-right"></i> Slider Fotoğraflar</a></li>        
            <li><a href="{{ route('admin.ayarlari.genelayarlari') }}"><i class="fa fa-hand-o-right"></i> Genel Ayarları</a></li>        
          </ul>
        </li>


        <li class="header" style="text-align: center;">ASSEGTUR</li>
      

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
