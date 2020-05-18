@extends('admin/app')

@section('mainBody')
	    <!-- Main content -->
   
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        

        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>TM</h3>

              <p>Notre Histoire</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.tarigi') }}" class="small-box-footer"> Histoire <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
               <!-- ./col -->
        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>KM</h3>

              <p>A propos de nous</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.hakkimizda') }}" class="small-box-footer"> A propos de nous <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
               <!-- ./col -->
        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>MM</h3>

              <p>Notre mission</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.misyon') }}" class="small-box-footer">Notre mission<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>VM</h3>

              <p>Notre Vision</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.visyon') }}" class="small-box-footer">Notre Vision <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        {{-- <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>FAQs</h3>

              <p>Sıkça Sorulan Soruları</p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.sikcasorulansorular') }}" class="small-box-footer">Sıkça Sorulan Soruları <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}

        <!-- ./col -->
      </div>


      
         <div class="box-footer">
              <a href='{{ route('admin.anasayfa') }}' class="btn btn-success">Geri Dön</a>
            </div>

      </section>

     

 @endsection