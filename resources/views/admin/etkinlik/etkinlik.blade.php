@extends('admin/app')

@section('mainBody')
	    <!-- Main content -->
   
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
               <!-- ./col -->
        <div class="col-md-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>EY</h3>

              <p>Etkinlikleri Yönet</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.etkinlik.yonet') }}" class="small-box-footer">  Etkinlikleri Yönet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
               <!-- ./col -->
        <div class="col-md-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>EE</h3>

              <p>Etkinlik Ekle</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.etkinlik.ekle') }}" class="small-box-footer">Etkinlik Ekle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      
         <div class="box-footer">
              <a href='{{ route('admin.anasayfa') }}' class="btn btn-success">Geri Dön</a>
            </div>

      </section>

     

 @endsection