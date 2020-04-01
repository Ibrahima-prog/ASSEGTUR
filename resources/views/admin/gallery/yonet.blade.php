@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
   
  
      <div class="callout callout-info">
        <h4>Fotoğraf Galerisi</h4>
      </div>

       <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-database"></i>

              <h3 class="box-title">Operasyonlar</h3>
            </div>
            <div class="box-body pad table-responsive">
              <table class="table table-bordered text-center">
                <tr>
                  <td>
                   <a href="{{ route('admin.gallery.ekle') }}" title=""><button type="button" class="btn btn-block btn-primary">Yeni Fotoğraf Ekle</button></a>
                  </td>
                   <td>
                    <a href="{{ route('admin.gallery.deleteall') }}" title=""><button type="button" class="btn btn-block btn-danger">Bütün Fotoğrafları sil</button></a>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.col -->
      </div>
  		
  <!-- /.user-block -->
      <div class="post">
                  <div class="row margin-bottom">
                    <!-- /.col -->
                   <div class="col-md-12">
                      <div class="row">
                          <div class="col-md-6">
                            <div class="box box-solid">
                              <div class="box-header with-border">
                                <h3 class="box-title">Eklenmiş Fotografları</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="../../galleryFotograflari/bg.jpg" alt="First slide">

                                      <div class="carousel-caption">
                                        AFROKONYA
                                      </div>
                                    </div>
                                
                                @foreach($images as $image)
                                    <div class="item">
                                      <img src="../../galleryFotograflari/{{ $image->image }}" alt="{{ $image->title }}">

                                      <div class="carousel-caption">
                                       {{ $image->title }}
                                      </div>
                                    </div>

                                @endforeach

                                  </div>
                                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                  </a>
                                </div>
                              </div>
                              <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                          </div>
                          <!-- /.col -->

                        @foreach($images as $image)

                        <div class="col-sm-3">
                          <img class="img-responsive" src="../../galleryFotograflari/{{ $image->image }}" alt="{{ $image->title }}">
                             <div class="box-body pad table-responsive">
        				              <table class="table table-bordered text-center">
        				                <tr>
        				                   <td>
        				                   	<a href="{{ route('admin.gallery.delete', $image->id) }}" title="Fotoyu Sil"><button type="button" class="btn btn-block btn-danger">Fotoyu Sil</button></a>
        				                  </td>
        				                </tr>
        				              </table>
        				            </div>
                          <br>
                        </div>

                        @endforeach

                 
                      </div>
                      <!-- /.row -->
                  
                    </div>
                  </div>
                  <!-- /.row -->
       </div>

  
@endsection

@section('footer')

