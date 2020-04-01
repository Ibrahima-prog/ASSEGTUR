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
  <link href="/../../user/assets/corporate/css/aktatstyle.css" rel="stylesheet">

  <!-- Theme styles END -->


 <!-- Page level plugin styles START -->
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>

  
@endsection

@section('mainBody')
  <div class="main">
       <div class="page-head">
            <div class="container">
                <h1>{{ Lang::get('app.AktatCommunity') }}</h1>
            </div>
        </div>
      <div class="container">

 


          <div class="row">

              <div class="margin-bottom-40">
                <!-- BEGIN CONTENT -->
            
                   <div class="col-md-12">
                        <h3><strong>@if(App::getLocale() == 'tr') {{ $aboutaktat->trtitle }} @else {{ $aboutaktat->entitle }} @endif</strong></h3>
                       @if(App::getLocale() == 'tr') {!! $aboutaktat->trabout !!} @else  {!! $aboutaktat->enabout !!} @endif
              
                      </div>
              </div>
           </div>

                  <div class="row">

          <h3><strong>{{ Lang::get('app.aktatYonetim') }} </strong></h3>
                
              @foreach($aktatboard as $member)
                 <div class="col-md-3">
                  <div class="thumbnail">
                      <img alt="" src="/../../toplulukFotograflari/{{ $member->image }}">
                      <h3>
                        {{ $member->name }} <br>
                        <small>@if(App::getLocale() == 'tr') {{ $member->trtitle }} @else {{ $member->entitle }} @endif</small>
                      </h3>
                      <ul class="social-icons social-icons-color">
                        <li><a class="facebook" data-original-title="Facebook" href="javascript:;"></a></li>
                        <li><a class="twitter" data-original-title="Twitter" href="javascript:;"></a></li>
                        <li><a class="linkedin" data-original-title="Linkedin" href="javascript:;"></a></li>
                      </ul>
                    </div> 
                </div>
              @endforeach

        
     
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

     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>

  
    <script src="/../../user/assets/corporate/scripts/aktat.js" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

@endsection

