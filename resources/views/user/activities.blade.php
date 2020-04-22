@extends('user/app')

@section('pagename','Gallery')

@section('head')

 <!-- Page level plugin styles START -->
  <link href="/../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/../user/assets/pages/css/components.css" rel="stylesheet">
  <link href="/../user/assets/corporate/css/style.css" rel="stylesheet">
  <link href="/../user/assets/pages/css/portfolio.css" rel="stylesheet">
  <link href="/../user/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="/../user/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->

@endsection

@section('mainBody')


    <div class="main">
        <div class="page-head">
            <div class="container">
                <h1>{{ Lang::get('app.Activities') }}</h1>
            </div>
        </div>
        
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
           
            <div class="content-page">
                <div class="filter-v1">
                  <ul class="mix-filter">
                    <li data-filter="all" class="filter active">{{ Lang::get('app.All') }}</li>
                    <li data-filter="category_1" class="filter ">{{ Lang::get('app.Upcomming') }}</li>
                    <li data-filter="category_2" class="filter">{{ Lang::get('app.PastActivities') }}</li>
                  </ul>
                      <div class="row mix-grid thumbnails">


                        @foreach($commingactivities as $activity)

                          <div class="col-md-6 col-sm-6 mix category_1" style="display: block;  opacity: 1;">
                            <div class="mix-inner">
                               <img alt="" src="/../../etkinlikFotograflari/{{ $activity->image }}" class="img-responsive">
                               <div class="mix-details">

                                     <h4>@if(App::getLocale() == 'tr') {{ $activity->trtitle }} @else {{ $activity->entitle }} @endif</h4>
                                     <p>@if(App::getLocale() == 'tr') {!! $activity->trbody !!} @else {!! $activity->enbody !!} @endif</p>
                                
                               </div>           
                            </div>                       
                          </div>

                            @endforeach

                             @foreach($pastactivities as $activity)

                            
                              <div class="col-md-6 col-sm-6 mix category_2" style="display: block;  opacity: 1;">
                                  <div class="mix-inner">
                                        <img alt="" src="/../../etkinlikFotograflari/{{ $activity->image }}" class="img-responsive">
                                        <div class="mix-details">

                                           <h4>@if(App::getLocale() == 'tr') {{ $activity->trtitle }} @else {{ $activity->entitle }} @endif</h4>
                                           <p>@if(App::getLocale() == 'tr') {!! $activity->trbody !!} @else {!! $activity->enbody !!} @endif</p>
                                         
                                        </div>               
                                     </div>                 
                                </div>  

                           @endforeach
                         
                      </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
      </div>
    </div>


@endsection

@section('footer')

 
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/../user/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/../user/assets/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
    
    <script src="/../user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="/../user/assets/pages/scripts/portfolio.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
            Portfolio.init();
        });
    </script>
     <script type="text/javascript">
      $(document).ready(function() {
        
          $("#activities").addClass("menu-active");
      });
   </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

