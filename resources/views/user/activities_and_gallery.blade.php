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
  <link href="/../../user/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Theme styles END -->

@endsection

@section('mainBody')


    <div class="main">
        <div class="page-head">
            <div class="container">
                {{-- <h1>{{ Lang::get('app.activities_and_galleries') }}</h1> --}}
            </div>
        </div>
        
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
           
            <div class="content-page">
                <div class="filter-v1">
                  {{-- <ul class="mix-filter">
                    <li data-filter="all" class="filter active">{{ Lang::get('app.All') }}</li>
                    <li data-filter="category_1" class="filter ">{{ Lang::get('app.Upcomming') }}</li>
                    <li data-filter="category_2" class="filter">{{ Lang::get('app.PastActivities') }}</li>
                  </ul> --}}
                  <section id="portfolio" class="section-bg">
                    <div class="container">
              
                      <header class="section-header">
                        <h3 class="section-title">@lang('app.Activities')</h3>
                      </header>
              
                      <div class="row">
                        <div class="col-lg-12">
                          <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">@lang('app.All')</li>
                            <li data-filter=".filter-future">@lang('app.UpcommingActivities')</li>
                            <li data-filter=".filter-past">@lang('app.PastActivities')</li>
                           
                          </ul>
                        </div>
                      </div>
              
                      <div class="row portfolio-container">
              
                       
                        @foreach($commingactivities as $activity)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-future wow fadeInUp" data-wow-delay="0.2s">
                          <div class="portfolio-wrap">
                            <figure>
                              <img src="/../../etkinlikFotograflari/{{ $activity->image }}" class="img-fluid" alt="">
                              <a href="/../../etkinlikFotograflari/{{ $activity->image }}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                              <a href="{{ route('activities_and_gallery_summary',$activity->slug)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
              
                            <div class="portfolio-info">
                            <h5><a href="{{ route('activities_and_gallery_summary',$activity->slug)}}">
                              @if(App::getLocale() == 'tr') {{ $activity->trtitle }} @elseif (App::getLocale() == 'en') {{ $activity->entitle }}
                              @else {{$activity->frtitle}} @endif</a></h5>
                              {{-- <p> @if(App::getLocale() == 'tr') {!! $activity->trbody !!} @else {!! $activity->enbody !!} @endif</p> --}}
                            </div>
                          </div>
                        </div>
                        @endforeach
                        @foreach($pastactivities as $activity)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-past wow fadeInUp" data-wow-delay="0.2s">
                          <div class="portfolio-wrap">
                            <figure>
                              <img src="/../../etkinlikFotograflari/{{ $activity->image }}" class="img-fluid" alt="">
                              <a href="/../../etkinlikFotograflari/{{ $activity->image }}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                              <a href="{{ route('activities_and_gallery_summary',$activity->slug)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
              
                            <div class="portfolio-info">
                              <h5><a href="{{ route('activities_and_gallery_summary',$activity->slug)}}">
                                @if(App::getLocale() == 'tr') {{ $activity->trtitle }} @elseif (App::getLocale() == 'en') {{ $activity->entitle }}
                                @else {{$activity->frtitle}} @endif</a></h5>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
              
                    </div>
                  </section>
                   
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
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

