@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('head')
@endsection

@section('mainBody')
    <div class="callout callout-info">
        <h4>Réglages du site</h4>
      </div>
  <div class="row">     
        <div class="col-md-8 col-md-offset-2">
          <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
              <li class="active"><a href="#information" data-toggle="tab">Informations de contact</a></li>
              <li><a href="#contact" data-toggle="tab">Informations sur le site</a></li>
            </ul>

            <div class="tab-content">
             
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="information">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-blue">
                          SEO
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->

                  <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a>Description</a></h3>
                      <div class="timeline-body">
                      {{ $ayarlar->description }}
                      </div>
                    </div>
                  </li>
        
                  <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a>Mots clés</a></h3>
                      <div class="timeline-body">
                      {{ $ayarlar->keywords }}
                      </div>
                    </div>
                  </li>

             
 
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                         Réseaux sociaux
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <div class="timeline-item">
                       <a class="btn btn-block btn-social btn-facebook">
                        <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <div class="timeline-body">
                          {{ $ayarlar->facebook }}
                      </div>
                    </div>
                  </li>

               
                   <li>
                    <div class="timeline-item">
                        <a class="btn btn-block btn-social btn-instagram">
                          <i class="fa fa-instagram"></i> Instagram
                        </a>
                      <div class="timeline-body">
                       {{ $ayarlar->instagram }}
                      </div>
                    </div>
                  </li>

                   <li>
                    <div class="timeline-item">
                      <a class="btn btn-block btn-social btn-twitter">
                        <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <div class="timeline-body">
                       {{ $ayarlar->twitter }}
                      </div>
                    </div>
                  </li>


                   <li>
                    <div class="timeline-item">
                       <a class="btn btn-block btn-social btn-instagram">
                        <i class="fa fa-youtube"></i> Youtube
                      </a>
                      <div class="timeline-body">
                      {{ $ayarlar->youtube }}
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="timeline-item">
                        <a class="btn btn-block btn-social btn-google">
                          <i class="fa fa-google-plus"></i> Google Plus
                        </a>
                      <div class="timeline-body">
                       {{ $ayarlar->googleplus }}
                      </div>
                    </div>
                  </li>

                  <li class="time-label">
                        <span class="bg-blue">
                          LIGNES DE CONTACT
                        </span>
                  </li>

                  <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Telephone 1</a></h3>
                      <div class="timeline-body">
                     {{ $ayarlar->phoneone }}
                      </div>
                    </div>
                  </li>

                   <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Telephone 2</a></h3>
                      <div class="timeline-body">
                     {{ $ayarlar->phonetwo }}
                      </div>
                    </div>
                  </li>

                   <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Email 1</a></h3>
                      <div class="timeline-body">
                     {{ $ayarlar->emailone }}
                      </div>
                    </div>
                  </li>

                     <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Email 2</a></h3>
                      <div class="timeline-body">
                     {{ $ayarlar->emailtwo }}
                      </div>
                    </div>
                  </li>

                   <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Adresse</a></h3>
                      <div class="timeline-body">
                     {{ $ayarlar->address }}
                      </div>
                    </div>
                  </li>

                   

                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="contact">
                <form class="form-horizontal"  method="POST" action="{{ route('admin.ayarlari.genelayarlari.save') }}">

                  {{ csrf_field() }}

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Description du site</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="description" id="inputExperience" placeholder="Description" rows="5">{{ $ayarlar->description }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Mots clés du site</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="keywords" id="inputExperience" placeholder="Keywords" rows="5">{{ $ayarlar->keywords }}</textarea>
                    </div>

                  </div>

                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Lien Facebook</label>

                    <div class="col-sm-10">
                      <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Facebook Linki" value="{{ $ayarlar->facebook }}">
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Lien Instagram</label>

                    <div class="col-sm-10">
                      <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Instagram Linki" value="{{ $ayarlar->instagram }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Lien Twitter</label>

                    <div class="col-sm-10">
                      <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Twitter Linki" value="{{ $ayarlar->twitter }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Lien Youtube</label>

                    <div class="col-sm-10">
                      <input type="text" name="youtube" class="form-control" id="youtube" placeholder="Youtube Linki" value="{{ $ayarlar->youtube }}">
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Lien Googleplus</label>

                    <div class="col-sm-10">
                      <input type="text" name="googleplus" class="form-control" id="googleplus" placeholder="Googleplus Linki" value="{{ $ayarlar->googleplus }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telephone 1</label>

                    <div class="col-sm-10">
                      <input type="text" name="phoneone" class="form-control" id="phoneone" placeholder="Telefon 1" value="{{ $ayarlar->phoneone }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telephone 2</label>

                    <div class="col-sm-10">
                      <input type="text" name="phonetwo" class="form-control" id="phonetwo" placeholder="Telefon 2" value="{{ $ayarlar->phonetwo }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">E-mail 1</label>

                    <div class="col-sm-10">
                      <input type="email" name="emailone" class="form-control" id="inputEmailone" placeholder="E-mail 1" value="{{ $ayarlar->emailone }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">E-mail 2</label>

                    <div class="col-sm-10">
                      <input type="email" name="emailtwo" class="form-control" id="inputEmailtwo" placeholder="E-mail 2" value="{{ $ayarlar->emailtwo }}">
                    </div>
                  </div>

                      <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Adresse</label>

                     <div class="col-sm-10">
                      <textarea class="form-control" name="address" id="inputExperience" placeholder="Adres" rows="4">{{ $ayarlar->address }}</textarea>
                    </div>
                  </div>
                
          
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success btn-block">Enregistrer</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        </div>
        <!-- /.col -->

  
@endsection

@section('footer')

@endsection