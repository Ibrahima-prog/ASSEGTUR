@extends('admin/app')


@section('mainBody')
     <!-- Main content -->

 
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>EK</h3>

              <p>ETKİNLİK</p>
            </div>
            <div class="icon">
              <i class="ion-information"></i>
            </div>
            <a href="{{ route('admin.etkinlik') }}" class="small-box-footer">ETKİNLİK METİNLER <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>KM</h3>

              <p>KURUMSAL</p>
            </div>
            <div class="icon">
              <i class="ion-information"></i>
            </div>
            <a href="{{ route('admin.kurumsal') }}" class="small-box-footer">KURUMSAL METİNLER <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

       <!-- ./col -->
           <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>YK</h3>

              <p>YÖNETİM KURULU</p>
            </div>
            <div class="icon">
              <i class="ion-android-people"></i>
            </div>
            <a href="{{ route('admin.yonetim') }}" class="small-box-footer">YÖNETİM KURULU BİLGİLERİ <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>ÖK</h3>

              <p>ÖN KAYIT BİLGİLERİ</p>
            </div>
            <div class="icon">
              <i class="ion-android-done-all"></i>
            </div>
            <a href="{{ route('admin.onkayit') }}" class="small-box-footer">ÖN KAYIT BİLGİLERİ YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>ÖK</h3>

              <p>Galleries</p>
            </div>
            <div class="icon">
              <i class="ion-android-done-all"></i>
            </div>
            <a href="{{ route('admin.onkayit') }}" class="small-box-footer">ÖN KAYIT BİLGİLERİ YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <!-- ./col -->
          {{-- <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>FG</h3>

              <p>FOTOĞRAF GALERİ</p>
            </div>
            <div class="icon">
              <i class="ion-android-image"></i>
            </div>
            <a href="{{ route('admin.gallery.yonet') }}" class="small-box-footer">FOTOĞRAF GALERİ YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}
        <!-- ./col -->

         <!-- ./col -->
          {{-- <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>VG</h3>

              <p>VİDEO GALERİ</p>
            </div>
            <div class="icon">
              <i class="ion-ios-videocam"></i>
            </div>
            <a href="{{ route('admin.video.yonet') }}" class="small-box-footer">VİDEO GALERİ YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}
        <!-- ./col -->
      {{-- <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Tİ</h3>

              <p>TOPLULUK İŞLERİ</p>
            </div>
            <div class="icon">
              <i class="ion-android-clipboard"></i>
            </div>
            <a href="{{ route('admin.topluluk.yonet') }}" class="small-box-footer">TOPLULUK İŞLERİ <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}
        <!-- ./col -->
                       <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>HB</h3>

              <p>HABERLER</p>
            </div>
            <div class="icon">
              <i class="ion-android-clipboard"></i>
            </div>
            <a href="{{ route('admin.haber.yonet') }}" class="small-box-footer">HABERLERİ YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
                      <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>MA</h3>

              <p>MAKALELER</p>
            </div>
            <div class="icon">
              <i class="ion-social-designernews"></i>
            </div>
            <a href="{{ route('admin.makale') }}" class="small-box-footer">MAKALELER YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

               <!-- ./col -->
          {{-- <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>DU</h3>

              <p>DUYURULARI</p>
            </div>
            <div class="icon">
              <i class="ion-social-designernews"></i>
            </div>
            <a href="{{ route('admin.duyuru') }}" class="small-box-footer">DUYURULARI YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}
        <!-- ./col -->



        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>KU</h3>

              <p>KULLANICI</p>
            </div>
            <div class="icon">
              <i class="ion-person-stalker"></i>
            </div>
            <a href="{{ route('admin.kullanici') }}" class="small-box-footer">KULLANICILARI YÖNET <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>AYR</h3>

              <p>AYARLARI</p>
            </div>
            <div class="icon">
              <i class="ion-settings"></i>
            </div>
            <a href="{{ route('admin.kullanici.sifredegistir') }}" class="small-box-footer"> ŞİFREYİ AYARLARIMI <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>

      
      </section>

      




 @endsection

