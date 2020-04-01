@extends('admin/app')

@section('mainBody')
	    <!-- Main content -->
   
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
               <!-- ./col -->
        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>PY</h3>

              <p>Topluluğu Yönet</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.topluluk.yonet') }}" class="small-box-footer">  Topluluğu Yönet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
               <!-- ./col -->
        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>YÜ</h3>

              <p>Yönetim Üye Ekle</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.topluluk.ekle') }}" class="small-box-footer">Topluluğu Ekle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>AKTAT</h3>

              <p>SÜ AKTAT Hakkında</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.topluluk.aktathakkinda') }}" class="small-box-footer">SÜ AKTAT Hakkında<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      
         <div class="box-footer">
              <a href='{{ route('admin.anasayfa') }}' class="btn btn-success">Geri Dön</a>
            </div>

      </section>

     

 @endsection