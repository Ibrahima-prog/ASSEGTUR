@extends('user/app')

@section('pagename','Our Mission')

@section('head')

  <!-- Page level plugin styles START -->
  <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/../../user/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/../../user/assets/pages/css/components.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/style.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/../../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->


 <!-- Page level plugin styles START -->
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  
@endsection

@section('mainBody')
  <div class="main">
    <div class="page-head">
            <div class="container">
              
            </div>
        </div>
      <div class="container">
        <h1>{{ Lang::get('app.becomeMember') }}</h1>
        @if(session('success'))
               <div class="alert alert-success">
                   {{ session('success') }}
               </div>
            @elseif(session('error'))
                   <div class="alert alert-danger">
                       {{ session('error') }}
                   </div>
            @endif  
        
     
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
     
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 ">
            <h3>{{ Lang::get('app.RegisterMessage') }}</h3>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-6  ">
                  <form class="form-horizontal" action="{{ route('registermember') }}" method="POST" role="form">
                    
                    {{ csrf_field() }}

                    <fieldset>
                      <legend>{{ Lang::get('app.YourPersonalDetails') }}</legend>

                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">{{ Lang::get('app.fullname') }} <span class="require">*</span></label>
                        <div class="col-lg-8">
                           <input type="text" name="name" class="form-control" placeholder="{{ Lang::get('app.fullnameText') }}" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">{{ Lang::get('app.selectGender') }} <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <select name="gender" class="form-control" required>
                            <option value="">{{ Lang::get('app.selectGender') }}</option>
                            <option value="Erkek">{{ Lang::get('app.Male') }}</option></option>
                            <option value="Kız">{{ Lang::get('app.Female') }}</option>
                          </select>
                        </div>
                      </div>
{{-- 
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">{{ Lang::get('app.selectcountry') }} <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <select type="text" class="form-control " name="country" required>
                          <option selected>{{ Lang::get('app.selectcountry') }}</option>
                          <option value="Algeria">Algeria</option>
                          <option value="Angola">Angola</option>
                          <option value="Benin">Benin</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Cape-verde">Cape Verde</option>
                          <option value="Central-african-republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo-brazzaville">Congo - Brazzaville</option>
                          <option value="Congo-kinshasa">Congo - Kinshasa</option>
                          <option value="Ivory-coast">Côte d’Ivoire</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Egypt">Egypt</option>
                          <option value="Equatorial-guinea">Equatorial Guinea</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Gabon">Gabon</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-bissau">Guinea-Bissau</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Mali">Mali</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Reunion">Réunion</option>
                          <option value="Saint-helena">Saint Helena</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra-leone">Sierra Leone</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South-africa">South Africa</option>
                          <option value="Sudan">Sudan</option>
                          <option value="South-sudan">South Sudan</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
                          <option value="Tanzania">Tanzania</option>
                          <option value="Togo">Togo</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Western-sahara">Western Sahara</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div>
                      </div> --}}

                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">{{ Lang::get('app.homeAddress') }}</label>
                        <div class="col-lg-8">
                         <input type="text" name="address" class="form-control" placeholder="{{ Lang::get('app.homeAddressText') }}">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">{{ Lang::get('app.selectEducation') }}</label>
                        <div class="col-lg-8">
                           <select name="level" class="form-control">
                              <option value="">{{ Lang::get('app.selectEducation') }}</option>
                              <option value="Lise">{{ Lang::get('app.Highschool') }}</option>
                              <option value="Lisans">{{ Lang::get('app.Bachelor') }}</option>
                              <option value="Yüksek Lisans">{{ Lang::get('app.Masters') }}</option>
                              <option value="Doktora">{{ Lang::get('app.php') }}</option>
                            </select>

                        </div>
                      </div>

                       <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">{{ Lang::get('app.UniversityInstitution') }}<span class="require">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" name="institution" class="form-control" placeholder="{{ Lang::get('app.UniversityInstitution') }}" required>
                        </div>
                      </div>
                
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">{{ Lang::get('app.department') }}<span class="require">*</span></label>
                        <div class="col-lg-8">
                       <input type="text" name="department" class="form-control" placeholder="{{ Lang::get('app.department') }}" required>
                        </div>
                      </div>


                       <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">{{ Lang::get('app.Phone') }}</label>
                        <div class="col-lg-8">
                           <input type="number" name="phone" class="form-control"  placeholder="{{ Lang::get('app.Phone') }}" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">{{ Lang::get('app.Email') }} <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Enter a valid email address" required>
                        </div>
                      </div>

                    </fieldset>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> {{ Lang::get('app.Register') }}</button>
                     
                      </div>
                    </div>
                  </form>
                </div>
                {{-- <div class="col-md-4 col-sm-4 ">

                   
                        <div class="thumbnail">
                          <img src="/../../user/assets/images/registration.jpg" alt="" class="img-responsive">
                          <div class="caption">

                            <h4><a>{{ Lang::get('app.Conditions') }}</a></h4>

                            @foreach($someconditions as $cond)
                              <p>  <span class="glyphicon glyphicon-star"></span> @if(App::getLocale() == 'tr') {{ $cond->trcondition }} @else {{ $cond->encondition }} @endif</p>

                            @endforeach

                          </div>
                       
                          <div class="btn-ground text-center">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-list-ol"></i> {{ Lang::get('app.MoreDetails') }}</button>
                          </div>

                        </div>
                   

                    <div class="modal fade product_view" id="product_view">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                  <h3 class="modal-title">{{ Lang::get('app.Conditions') }}</h3>
                              </div>
                              <div class="modal-body">
                                  <div class="row">
                                      <div class="col-md-12 product_img">
                                          <img src="/../../user/assets/images/registration.jpg" class="img-responsive">
                                      </div>
                                      <div class="col-md-12 product_content" style="margin-top: 15px;">
                                        
                                        @foreach($conditions as $cond)
                                          <p>  <span class="glyphicon glyphicon-star"></span> @if(App::getLocale() == 'tr') {{ $cond->trcondition }} @else {{ $cond->encondition }} @endif</p>

                                        @endforeach

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

@endsection

@section('footer')

  <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/../../user/assets/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="/../../user/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/../../user/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/../../user/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/../../user/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/../../user/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

    <script src="/../../user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

