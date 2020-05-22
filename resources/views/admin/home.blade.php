@extends('admin/app')


@section('mainBody')
     <!-- Main content -->

 
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-4 col-xs-6 ">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Slider</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-settings"></i>
            </div>
            <a href="{{ route('admin.ayarlari.slider') }}" class="small-box-footer"> Gestion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Les Activités</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-information"></i>
            </div>
            <a href="{{ route('admin.etkinlik') }}" class="small-box-footer">Gestion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Textes De Présentation</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-information"></i>
            </div>
            <a href="{{ route('admin.kurumsal') }}" class="small-box-footer">Gestion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

       <!-- ./col -->
           <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Bureau Exécutif</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-android-people"></i>
            </div>
            <a href="{{ route('admin.yonetim') }}" class="small-box-footer">Gestion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Membres De L'ASSEGTUR</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-android-done-all"></i>
            </div>
            <a href="{{ route('admin.onkayit') }}" class="small-box-footer">Gestion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        {{-- <div class="col-lg-4 col-xs-6">
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
          <div class="col-lg-4 col-xs-6">
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
              <h3>Journal</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-android-clipboard"></i>
            </div>
            <a href="{{ route('admin.haber.yonet') }}" class="small-box-footer">Gestion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
                      <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Thèses Et Articles</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-social-designernews"></i>
            </div>
            <a href="{{ route('admin.makale') }}" class="small-box-footer">Gestion <i class="fa fa-arrow-circle-right"></i></a>
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
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Administrateurs</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-person-stalker"></i>
            </div>
            <a href="{{ route('admin.kullanici') }}" class="small-box-footer">Gestion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Réglages Du Site</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-settings"></i>
            </div>
            <a href="{{ route('admin.ayarlari.genelayarlari') }}" class="small-box-footer"> Gestion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <!-- ./col -->

        <!-- ./col -->
      </div>

      
      </section>

      




 @endsection

