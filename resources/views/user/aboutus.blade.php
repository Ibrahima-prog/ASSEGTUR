@extends('user/app')

@section('pagename','About Us')

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

@endsection

@section('mainBody')
<div class="main">
      <div class="page-head">
            <div class="container">
               {{-- <h1>{{ Lang::get('app.AboutUs') }}</h1> --}}
            </div>
        </div>
      {{-- <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
           
            <div class="content-page">
                    <!-- BEGIN INFO BLOCK -->               
                
                 <!-- BEGIN INFO BLOCK -->               
                    <h2> @if(App::getLocale() == 'tr') {{ $aboutus->trtitle }} @elseif (App::getLocale() == 'en')  {{ $aboutus->entitle }}
                      @else {{$aboutus->frtitle}} @endif</h2>
                    
                     @if(App::getLocale() == 'tr') {!! $aboutus->trtext !!} @elseif (App::getLocale() == 'en') {!! $aboutus->entext !!}
                     @else {!! $aboutus->frtext !!} @endif  

            </div>
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
      </div> --}}

      <section id="services">
        <div class="container">
  
          <header class="section-header wow fadeInUp">
            <h3>  @if(App::getLocale() == 'tr') {{ $aboutus->trtitle }} @elseif (App::getLocale() == 'en')  {{ $aboutus->entitle }}
              @else {{$aboutus->frtitle}} @endif</h3>
            <p>
            
            
              @if(App::getLocale() == 'tr') {!! $aboutus->trtext !!} @elseif (App::getLocale() == 'en') {!! $aboutus->entext !!}
              @else {!! $aboutus->frtext !!} @endif 
                    </p>       
         </header>
      
         
  
        
  
        </div>
      </section>


      <div class="container">
          <section id="team">
            <div class="container">
              <div class="section-header wow fadeInUp">
                <h3>       {{ Lang::get('app.ExecutiveBoard') }} 
                </h3>
              </div>
      
              <div class="row">
                @foreach($boardmembers as $member)

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                  <div class="member">
                    <img src="/../../yonetimFotograflari/{{ $member->image }}" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>{{ $member->name }}</h4>
                        <span>@if(App::getLocale() == 'tr') {{ $member->trtitle }}  @elseif (App::getLocale() == 'en') {{ $member->entitle }}
                          @else {{ $member->frtitle }}  @endif</span>
                        <div class="social">
                          <a href="{{ $member->twitter }}"><i class="fa fa-twitter"></i></a>
                          <a href="{{ $member->facebook }}"><i class="fa fa-facebook"></i></a>
                          <a href="{{ $member->instagram }}"><i class="fa fa-instagram"></i></a>
                       
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                @endforeach

      
            
      
            
      
              </div>
      
            </div>
          </section><!-- End Team Section -->
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
     <script type="text/javascript">
      $(document).ready(function() {
        
          $("#our").addClass("menu-active");
      });
   </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

