@extends('admin/app')

@section('mainBody')
	        <!-- /.col -->

	   <div class="row">     
        <div class="col-md-8 col-md-offset-2">
          <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
              <li class="active"><a href="#information" data-toggle="tab">Bilgileri</a></li>
              <li><a href="#contact" data-toggle="tab">İrtibata Geç</a></li>
            </ul>

            <div class="tab-content">
  

          
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="information">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-blue">
                         Kişisel Bilgileri
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->

                  <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a>Adı ve Soyadı</a></h3>
                      <div class="timeline-body">
                       {{ $details->firstname }}
                      </div>
                    </div>
                  </li>
 				
 				          <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a>Cinsiyet</a></h3>
                      <div class="timeline-body">
                       {{ $details->gender }}
                      </div>
                    </div>
                  </li>

                   {{-- <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a>Ülke</a></h3>
                      <div class="timeline-body">
                       {{ $details->country }}
                      </div>
                    </div>
                  </li> --}}
             
                  <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Ev Adresi</a></h3>
                      <div class="timeline-body">
                       {{ $details->address }}
                      </div>
                    </div>
                  </li>

                    <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Eğitim Seviye</a></h3>
                      <div class="timeline-body">
                       {{ $details->level }}
                      </div>
                    </div>
                  </li>

                   <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Üniversite/Okul</a></h3>
                      <div class="timeline-body">
                       {{ $details->institution }}
                      </div>
                    </div>
                  </li>



                   <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Bölüm </a></h3>
                      <div class="timeline-body">
                       {{ $details->department }}
                      </div>
                    </div>
                  </li>


                   <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Telefon Numarası</a></h3>
                      <div class="timeline-body">
                       {{ $details->phone }}
                      </div>
                    </div>
                  </li>

                    <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> E-posta</a></h3>
                      <div class="timeline-body">
                       {{ $details->email }}
                      </div>
                    </div>
                  </li>

                   <li>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a> Kayıt Tarihi</a></h3>
                      <div class="timeline-body">
                       {{ $details->created_at }}
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
                <form class="form-horizontal"  method="POST" action="{{ route('admin.onkayi.email.gonder') }}">

                	{{ csrf_field() }}

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Adı ve Soyad</label>

                    <div class="col-sm-10">
                      <input type="text" name="firstname" class="form-control" id="inputName" placeholder="Adı ve Soyad" value="{{ $details->firstname }}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ $details->email }}" required>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Mesaj</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="message" id="inputExperience" placeholder="Experience" rows="8" required></textarea>
                    </div>
                  </div>
          
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Email Gönder</button>
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