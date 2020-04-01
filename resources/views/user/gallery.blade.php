@extends('user/app')

@section('pagename','Gallery')

@section('head')

  <!-- Page level plugin styles START -->
  <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/../../user/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

    <!-- Page level plugin styles START -->
  <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/../../user/assets/pages/css/components.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/style.css" rel="stylesheet">
  <link href="/../../user/assets/pages/css/gallery.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/../../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->


@endsection

@section('mainBody')
   <div class="main">
    <div class="page-head">
            <div class="container">
                <h1>{{ Lang::get('app.Gallery') }}</h1>
            </div>
        </div>
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12">
            <div class="content-page">
              <div class="row margin-bottom-40">
                
                @foreach($gallery as $image)

                <div class="col-md-3 col-sm-4 gallery-item">
                  <a data-rel="fancybox-button" title="@if(App::getLocale() == 'tr') {{ $image->trtitle }} @else {{ $image->entitle }} @endif" href="/../../galleryFotograflari/{{ $image->image }}" class="fancybox-button">
                    <img alt=" @if(App::getLocale() == 'tr') {{ $image->trtitle }} @else {{ $image->entitle }} @endif" src="/../../galleryFotograflari/{{ $image->image }}" class="img-responsive">
                    <div class="zoomix"><i class="fa fa-search"></i></div>
                  </a> 
                </div>

                @endforeach


                
                  <div class="row pull-right" style="margin: 15px;">
                     {{ $gallery->links() }}
                  </div>

              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
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

