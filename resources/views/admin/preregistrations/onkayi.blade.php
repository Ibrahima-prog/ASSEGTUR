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
              <h3>TL</h3>

              <p>Tüm ön kayıt Listesi</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.onkayi.yonet') }}" class="small-box-footer"> Tüm ön kayıt Listesi<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
               <!-- ./col -->
        <div class="col-md-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>ŞK</h3>

              <p>Şartlar ve Koşulları</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.onkayi.saatlarvekosullari') }}" class="small-box-footer">Şartlar ve Koşulları <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      
         <div class="box-footer">
              <a href='{{ route('admin.anasayfa') }}' class="btn btn-success">Geri Dön</a>
            </div>

      </section>

     

 @endsection