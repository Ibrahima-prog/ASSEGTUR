@extends('admin/app')

@section('mainBody')
	    <!-- Main content -->
   
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
               <!-- ./col -->
        <div class="col-md-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>KY</h3>

              <p>Kullanıcı Yönet</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kullanici.yonet') }}" class="small-box-footer">  Kullanıcı Yönet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
               <!-- ./col -->
        <div class="col-md-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>KE</h3>

              <p>Kullanıcı Ekle</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kullanici.ekle') }}" class="small-box-footer">Kullanıcı Ekle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      


      </section>

     

 @endsection