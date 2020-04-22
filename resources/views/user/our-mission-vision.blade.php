@extends('user/app')

@section('pagename','Our Mission')

@section('head')

  <!-- Page level plugin styles START -->
  <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/../../user/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/../../user/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
                {{-- <h1>{{ Lang::get('app.OurMissionAndVision') }}</h1> --}}
            </div>
        </div>
      {{-- <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
           
           
            <div class="col-lg-10">

                     <h2> @if(App::getLocale() == 'tr') {{ $mission->trtitle }} @else {{ $mission->entitle }} @endif</h2>
                    
                     @if(App::getLocale() == 'tr') {!! $mission->trtext !!} @else {!! $mission->entext !!} @endif  
                   
                  <!-- END LISTS -->
                </div>

            


              <div class="col-lg-10">
               
                <h2> @if(App::getLocale() == 'tr') {{ $plan->trtitle }} @elseif(App::getLocale() == 'en') {{ $plan->entitle }} 
                 @else {{ $plan->frtitle }}  @endif</h2>
                     
                 @if(App::getLocale() == 'tr') {!! $plan->trtext !!} @elseif(App::getLocale() == 'en') {!!$plan->entext!!} 
                 @else {!!$plan->frtext!!}  @endif                     
                   <!-- END LISTS -->
             </div>
            <div class="col-lg-10">
               
               <h2> @if(App::getLocale() == 'tr') {{ $vision->trtitle }} @elseif(App::getLocale() == 'en') {{ $vision->entitle }} 
                @else {{ $vision->frtitle }}  @endif</h2>
                    
                @if(App::getLocale() == 'tr') {!!$vision->trtext!!} @elseif(App::getLocale() == 'en') {!!$vision->entext!!} 
                @else {!!$vision->frtext!!}  @endif                     
                  <!-- END LISTS -->
            </div>
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->

        <!-- BEGIN CAROUSEL -->            
    
                <!-- END CAROUSEL -->
      </div> --}}
    </div>

    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>  @if(App::getLocale() == 'tr') {{ $mission->trtitle }} @elseif (App::getLocale() == 'en')  {{ $mission->entitle }}
            @else {{$mission->frtitle}} @endif</h3>
          <p>
          
          
            @if(App::getLocale() == 'tr') {!! $mission->trtext !!} @elseif (App::getLocale() == 'en') {!! $mission->entext !!}
            @else {!! $mission->frtext !!} @endif 
                  </p>       
       </header>
    
       

      

      </div>
    </section>

 <section id="services">
        <div class="container">
  
          <header class="section-header wow fadeInUp">
            <h3>  @if(App::getLocale() == 'tr') {{ $plan->trtitle }} @elseif (App::getLocale() == 'en')  {{ $plan->entitle }}
              @else {{$plan->frtitle}} @endif</h3>
            <p>
            
            
              @if(App::getLocale() == 'tr') {!! $plan->trtext !!} @elseif (App::getLocale() == 'en') {!! $plan->entext !!}
              @else {!! $plan->frtext !!} @endif 
                    </p>       
         </header>
      
         
  
        
  
        </div>
      </section>

      <section id="services">
        <div class="container">
  
          <header class="section-header wow fadeInUp">
            <h3>  @if(App::getLocale() == 'tr') {{ $vision->trtitle }} @elseif (App::getLocale() == 'en')  {{ $vision->entitle }}
              @else {{$vision->frtitle}} @endif</h3>
            <p>
            
            
              @if(App::getLocale() == 'tr') {!! $vision->trtext !!} @elseif (App::getLocale() == 'en') {!! $vision->entext !!}
              @else {!! $vision->frtext !!} @endif 
                    </p>       
         </header>
      
         
  
        
  
        </div>
      </section>
      
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

