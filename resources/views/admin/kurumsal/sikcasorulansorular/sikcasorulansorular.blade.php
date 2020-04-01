@extends('admin/app')

@section('mainBody')
	
      <div class="callout callout-info">
        <h4>Sıkça Sorulan Soruları</h4>

      </div>


      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Eklenmiş Sorulı ve Cevapları</h3>
              <a href="{{ route('admin.kurumsal.sikcasorulansorular.ekle') }}" title=""><button type="button" class="btn pull-right btn-primary">Yeni Soru Cevap Ekle</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                @php
                 $index = 1;
                @endphp
                @foreach($sikcasorulansorular as $soru)

                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#{{ $soru->id }}">
                       {{ $soru->category }} || {{ $soru->trquestion }}
                      </a>
                    </h4>
                    <h4 class="box-title pull-right" >
                      <a  style="color: red"href="{{ route('admin.sikcasorulansorular.delete', $soru->id) }}">
                       Sil  
                      </a>
                    </h4>
                  </div>

                  <div id="{{ $soru->id }}" class="panel-collapse collapse @if($index == 1) in @endif">

                    <div class="box-body">
                     {{ $soru->transwer }}
                    </div>
                  </div>
                </div>

                @php
                 $index = 2;
                @endphp

                @endforeach

            
               
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
      </div>
   

     

 @endsection