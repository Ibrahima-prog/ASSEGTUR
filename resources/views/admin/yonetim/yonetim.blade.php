@extends('admin/app')

@section('mainBody')
	    <!-- Main content -->
   
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
               <!-- ./col -->
        <div class="col-md-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>PY</h3>

              <p>Yonetim Yönet</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.yonetim.yonet') }}" class="small-box-footer">  Yonetim Yönet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
               <!-- ./col -->
        <div class="col-md-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>PE</h3>

              <p>Yonetim Ekle</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.yonetim.ekle') }}" class="small-box-footer">Yonetim Ekle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      
         <div class="box-footer">
              <a href='{{ route('admin.anasayfa') }}' class="btn btn-success">Geri Dön</a>
            </div>

      </section>

     

 @endsection