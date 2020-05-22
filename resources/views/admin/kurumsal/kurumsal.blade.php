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
              <h3>Notre Histoire</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.tarigi') }}" class="small-box-footer"> Gestion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
               <!-- ./col -->
        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>A propos de nous</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.hakkimizda') }}" class="small-box-footer"> Gestion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
               <!-- ./col -->
        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Notre mission</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.misyon') }}" class="small-box-footer">Gestion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Notre plan</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.plan') }}" class="small-box-footer">Gestion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Notre Vision</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion-arrow-shrink"></i>
            </div>
            <a href="{{ route('admin.kurumsal.visyon') }}" class="small-box-footer">Gestion <i class="fa fa-arrow-circle-right"></i></a>
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
              <a href='{{ route('admin.anasayfa') }}' class="btn btn-success">Retourner en arrière</a>
            </div>

      </section>

     

 @endsection