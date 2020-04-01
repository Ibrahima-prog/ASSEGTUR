@extends('user/app')

@section('pagename','Our History')

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
                {{-- <h1>{{ Lang::get('app.OurHistory') }}</h1> --}}
            </div>
        </div>
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
           {{-- <div class="col-md-4 col-sm-12">
              <img src="/../../user/assets/images/create.jpg" alt="" class="img-responsive">
           </div> --}}
          <div class="col-md-8 col-sm-12">
         
      
                    <!-- BEGIN INFO BLOCK -->               
                    <h2> @if(App::getLocale() == 'tr') {{ $history->trtitle }} @elseif(App::getLocale() == 'en') {{ $history->entitle }} 
                      @else{{$history->frtitle}} @endif</h2>
                    
                     @if(App::getLocale() == 'tr') {!! $history->trtext !!} @elseif (App::getLocale() == 'en') {!! $history->entext !!}
                     @else {!! $history->frtext !!} @endif
           
          </div>
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
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
    <script src="/../../user/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
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

