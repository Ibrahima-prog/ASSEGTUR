@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
   
  
      <div class="callout callout-info">
        <h4>Photos du slider</h4>
      </div>

       <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-database"></i>

              <h3 class="box-title">Operations</h3>
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
                                <h3 class="box-title">Photos ajoutées</h3>
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
                                      <img src="../../slider1/{{ $slider1[0]->image }}" alt="{{ $slider1[0]->trtitle }}">

                                      <div class="carousel-caption">
                                         {{ $slider1[0]->trtitle}}
                                      </div>
                                    </div>
                                
                                @foreach($slider as $image)
                                    <div class="item">
                                      <img src="../../sliderFotograflari/{{ $image->image }}" alt="{{ $image->trtitle }}">

                                      <div class="carousel-caption">
                                       {{ $image->trtitle }}
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

                          
                           <div class="col-md-6">

                            <div class="callout callout-info">
                              <h4>Ajouter des photos au Slider</h4>
                            </div>

                             <div class="box box-primary">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Première photo du slider</h3>
                                </div>

                                   <form class="form-horizontal" method="POST" action="{{ route('admin.ayarlari.slider.save1') }}" enctype="multipart/form-data" required="true">
                                              {{ csrf_field() }}

                                              <div class="col-lg-4">
                                                <div class="box-body">
                                                <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Titre</label>
                                                <input type="text" class="form-control" id="title" name="frtitle" placeholder="Başlığı" required="true" >
                                               </div>
                                           </div>
                                            <div class="col-lg-4">
                                            <div class="box-body">
                                            <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Title</label>
                                            <input type="text" class="form-control" id="title" name="entitle" placeholder="Başlığı" required="true" >
                                           </div>
                                       </div>

                                        <div class="col-lg-4">
                                            <div class="box-body">
                                            <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Başlık</label>
                                            <input type="text" class="form-control" id="title" name="trtitle" placeholder="Başlığı" required="true" >
                                           </div>
                                       </div>
                           
                                        <div class="box-body">
                                          <label for="title">Choisir image - (1700, 850)</label>
                                            <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" multiple="multiple" required="true">
                                        </div>
                                             
                                     <div class="box-footer">
                                        <input type="submit" class="btn btn-primary" value="Changer">
                                        <a href='{{ route('admin.anasayfa') }}' class="btn btn-warning">Retourner en arrière</a>
                                      </div>
                                      </form>
                              </div>
                     
                            </div>
                            <div class="col-md-6">
                               <div class="callout callout-info">
                                    <h4>Ajouter des photos au Slider</h4>
                                  </div>

                                   <div class="box box-primary">
                                      <div class="box-header with-border">
                                        <h3 class="box-title">Ajouter le reste des photos ici</h3>
                                      </div>

                                         <form class="form-horizontal" method="POST" action="{{ route('admin.ayarlari.slider.save') }}" enctype="multipart/form-data" required="true">
                                                    {{ csrf_field() }}

                                                    <div class="col-lg-4">
                                                      <div class="box-body">
                                                      <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Titre</label>
                                                      <input type="text" class="form-control" id="title" name="frtitle" placeholder="Başlığı" required="true" >
                                                     </div>
                                                 </div>
                                                  <div class="col-lg-4">
                                                  <div class="box-body">
                                                  <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Title</label>
                                                  <input type="text" class="form-control" id="title" name="entitle" placeholder="Başlığı" required="true" >
                                                 </div>
                                             </div>

                                              <div class="col-lg-4">
                                                  <div class="box-body">
                                                  <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Başlık</label>
                                                  <input type="text" class="form-control" id="title" name="trtitle" placeholder="Başlığı" required="true" >
                                                 </div>
                                             </div>
                                 
                                              <div class="box-body">
                                                <label for="title">Choisir image(S) - (1700, 850)</label>
                                                  <input type="file" name="images[]" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" multiple="multiple" required="true">
                                              </div>
                                                   
                                           <div class="box-footer">
                                              <input type="submit" class="btn btn-primary" value="Enregistrer">
                                              <a href='{{ route('admin.anasayfa') }}' class="btn btn-warning">Retourner en arrière</a>
                                            </div>
                                            </form>
                                    </div>
                           </div>
                           

                           @foreach($slider1 as $image)

                           <div class="col-sm-3">
                             Première image du slider
                             <img class="img-responsive" src="../../slider1/{{ $image->image }}" alt="{{ $image->trtitle }}">
                                <div class="box-body pad table-responsive">
                                 
                               </div>
                             <br>
                           </div>
   
                           @endforeach
                          
                        @foreach($slider as $image)

                        <div class="col-sm-3"> le reste des images du slider
                          <img class="img-responsive" src="../../sliderFotograflari/{{ $image->image }}" alt="{{ $image->trtitle }}">
                             <div class="box-body pad table-responsive">
        				              <table class="table table-bordered text-center">
        				                <tr>
        				                   <td>
        				                   	<a href="{{ route('admin.ayarlari.slider.delete', $image->id) }}" title="Fotoyu Sil"><button type="button" class="btn btn-block btn-danger">Fotoyu Sil</button></a>
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

