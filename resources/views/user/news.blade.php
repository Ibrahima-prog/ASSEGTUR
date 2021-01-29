@extends('user/app')

@section('pagename','news')

@section('head')

 <!-- Page level plugin styles START -->
 <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
 <!-- Page level plugin styles END -->

 <!-- Theme styles START -->

 <link href="/../../user/assets/pages/css/components.css" rel="stylesheet">
 <link href="/../../user/assets/corporate/css/style-responsive.css" rel="stylesheet">
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
        <section id="team">
          <div class="container">
            
            <div class="section-header wow fadeInUp" style="margin-bottom: 30px">
              <h3>@lang('app.News')</h3></div>
              @foreach ($news as $item)
              <div class="section-header wow fadeInUp">
               
                <p style="font-size: 30px;font-weight: 900"> @if(App::getLocale() == 'tr') {{$item->trtitle}}@elseif (App::getLocale() == 'en'){{$item->entitle}}@else{{$item->frtitle}}@endif   </p>
              
            </div>
    
            <div class="row">
    
              <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                    
                  <img src="../../haberFotograflari/{{$item->image}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      
                      <h4> @if(App::getLocale() == 'tr') 
                        {{$item->trtitle}}
                        @elseif (App::getLocale() == 'en') 
                        {{$item->entitle}}
                        @else
                        {{$item->frtitle}}
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
                  {!! \Illuminate\Support\Str::words($item->trbody, 120 ,'  ...')  !!}
                  @elseif (App::getLocale() == 'en') 
                  {!! \Illuminate\Support\Str::words($item->enbody, 120 ,'  ...')  !!}
                  @else
                  {!! \Illuminate\Support\Str::words($item->frbody, 120 ,'  ...')  !!}
                  
                  @endif  
                
                      <a href="{{ route('newsDetails', $item->slug) }}" class="more">{{ Lang::get('app.ReadMore') }} <i class="icon-angle-right"></i></a>
                                 
                </div>  
                
                
              </div>
              
            </div>
            @endforeach
    
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

