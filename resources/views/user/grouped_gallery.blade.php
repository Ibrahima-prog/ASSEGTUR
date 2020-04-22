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
          
            </div>
        </div>
        <section id="team">
          <div class="container">
            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <h3>   @if(App::getLocale() == 'tr') {{ $slug->trtitle }} @elseif (App::getLocale() == 'en') {{ $slug->entitle }}
                @else {{$slug->frtitle}} @endif </h3>
                <p style="font-size: 30px;font-weight: 900">@lang('app.Summary') </p>
              
                <p>
                  @if(App::getLocale() == 'tr') {!!$slug->trsummary!!} @elseif (App::getLocale() == 'en') {!!$slug->ensummary!!}
                  @else {!! $slug->frsummary !!} @endif  
                </p>
              
              </header>
            
           
            
    
          </div>
        </section>
      {{-- <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div>
            <h1>
              @if(App::getLocale() == 'tr') {{ $slug->trtitle }} @elseif (App::getLocale() == 'en') {{ $slug->entitle }}
               @else {{$slug->frtitle}} @endif</h1>
               
                @if(App::getLocale() == 'tr') {!!$slug->trsummary!!} @elseif (App::getLocale() == 'en') {!!$slug->ensummary!!}
                 @else {!! $slug->frsummary !!} @endif

          </div>
        
          
          
          
          
          <!-- END CONTENT -->
        </div>
      </div> --}}
                <section id="portfolio" class="section-bg">
      
                    <div class="container">
                      <div class="section-header wow fadeInUp" style="margin-bottom: 30px">
                        <h3> @lang('app.Images')</h3></div>
                      <div class="row portfolio-container">
      
            
                  @foreach(explode(' , ' ,$slug->images) as $image)
                  {{-- <div class="col-md-3 col-sm-4 gallery-item">
                    <a data-rel="fancybox-button" title="" href="/../../today/{{$image}}" class="fancybox-button">
                 
                     
                      <img alt="" src="/../../today/{{$image}}" class="img-responsive"> 
                      <div class="zoomix"><i class="fa fa-search"></i></div>
                    </a> 
                  </div> --}}
             
                  <div class="col-lg-4 col-md-6 portfolio-item filter-future wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="/../../today/{{$image}}" class="img-fluid" alt="">
                        <a href="/../../today/{{$image}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                        {{-- <a href="{{ route('activities_and_gallery_summary',$activity->slug)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> --}}
                      </figure>
        
                      {{-- <div class="portfolio-info">
                      <h5><a href="{{ route('activities_and_gallery_summary',$activity->slug)}}">
                        @if(App::getLocale() == 'tr') {{ $activity->trtitle }} @elseif (App::getLocale() == 'en') {{ $activity->entitle }}
                        @else {{$activity->frtitle}} @endif</a></h5>
                        {{-- <p> @if(App::getLocale() == 'tr') {!! $activity->trbody !!} @else {!! $activity->enbody !!} @endif</p> 
                      </div> --}}
                    </div>
                  </div>
                  
                      {{-- <img src="{{('public/etkinlikFotograflari/testimg2_1581727131.jpg') }}" style="width:50px;height:50px;"><br/> --}}
                  @endforeach
            
                      </div>
      
              </div>
      
                </section>
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

