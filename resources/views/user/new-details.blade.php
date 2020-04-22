@extends('user/app')

@section('pagename','news-details')

@section('head')

 <!-- Page level plugin styles START -->
  <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->

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
      {{-- <div class="container">
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
      </div> --}}
      <section id="team">
        <div class="container">
          
          <div class="section-header wow fadeInUp" style="margin-bottom: 30px">
            <h3>@lang('app.News')</h3></div>
         
            <div class="section-header wow fadeInUp">
             
              <p style="font-size: 30px;font-weight: 900"> @if(App::getLocale() == 'tr') {{$newsitem->trtitle}}@elseif (App::getLocale() == 'en'){{$newsitem->entitle}}@else{{$newsitem->frtitle}}@endif   </p>
            
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6 wow fadeInUp">
              <div class="member">
                  
                <img src="../../haberFotograflari/{{$newsitem->image}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    
                    <h4> @if(App::getLocale() == 'tr') 
                      {{$newsitem->trtitle}}
                      @elseif (App::getLocale() == 'en') 
                      {{$newsitem->entitle}}
                      @else
                      {{$newsitem->frtitle}}
                      @endif    
                    </h4> 
                    
                    {{-- <span>Chief Executive Officer</span> --}}
                    {{-- <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div> --}}
                  </div>
                </div>
              </div>
              
            </div>
            {{-- <div class="col-lg-9 col-md-6 wow fadeInUp">
              <h4> @if(App::getLocale() == 'tr') {{$news->trtitle}}@elseif (App::getLocale() == 'en'){{$news->entitle}}@else{{$news->frtitle}}@endif   </h4>
            </div> --}}
            
            <div class="col-lg-9 col-md-6 wow fadeInUp">
              
              <div>
                @if(App::getLocale() == 'tr') 
                {!! $newsitem->trbody  !!}
                @elseif (App::getLocale() == 'en') 
                {!! $newsitem->enbody  !!}
                @else
                {!! $newsitem->frbody  !!}
                
                @endif  
              
                    {{-- <a href="{{ route('newsDetails', $newsitem->slug) }}" class="more">{{ Lang::get('app.ReadMore') }} <i class="icon-angle-right"></i></a> --}}
                               
              </div>  
              
              
            </div>
            
          </div>
  
        </div>
      </section>
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
    <script src="/../../user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
        });
    </script>
     <script type="text/javascript">
      $(document).ready(function() {
        
          $("#news").addClass("menu-active");
      });
   </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

