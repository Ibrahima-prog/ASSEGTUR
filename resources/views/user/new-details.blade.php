@extends('user/app')

@section('pagename','news-details')

@section('head')

 <!-- Page level plugin styles START -->
  <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
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
               {{-- <h1>{{ Lang::get('app.News') }}</h1> --}}
            </div>
        </div>
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
           

      
            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-9 col-sm-9 blog-posts">
                 
                 

                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <img class="img-responsive" alt="" src="/../../haberFotograflari/{{ $newsitem->image }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                      <h2><a href="#">@if(App::getLocale() == 'tr') {{ $newsitem->trtitle }} @elseif (App::getLocale() == 'en') {{ $newsitem->entitle }}
                        @else {{ $newsitem->frtitle }} @endif</a></h2>
                      <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> {{ $newsitem->created_at }}</li>
                      </ul>
                  
                   @if(App::getLocale() == 'tr') 
                    {!! $newsitem->trbody !!}
                   @elseif (App::getLocale() == 'en')
                         {!! $newsitem->enbody !!}
                         @else
                         {!! $newsitem->frbody !!}
                   @endif

                    
                    </div>
                  </div>

                   <hr class="blog-post-sep">

                </div>
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->            
                <div class="col-md-3 col-sm-3 blog-sidebar">
                  <!-- BEGIN RECENT NEWS -->                            
                  <h2>{{ Lang::get('app.RecentNews') }} </h2>
                  <div class="recent-news margin-bottom-10">
                    
                      @foreach($newsTitles as $newsitem)

                        <div class="row margin-bottom-10">
                          <div class="col-md-9 col-md-offset-1 recent-news-inner">
                            <h3><a href="javascript:;">@if(App::getLocale() == 'tr') {{ $newsitem->trtitle }} @elseif (App::getLocale() == 'en')
                               {{ $newsitem->entitle }} @else {{ $newsitem->frtitle }}   @endif</a></p>
                          </div>                        
                        </div>

                      @endforeach

                  </div>
                  <!-- END RECENT NEWS -->                            
                </div>
                <!-- END RIGHT SIDEBAR -->            
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
    <script src="/../../user/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/../../user/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/../../user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

