@extends('user/app')

@section('pagename','Departments By Faculty')

@section('head')

  <!-- Page level plugin styles START -->
  <link href="/../../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/../../../user/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->

  <link href="/../../../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->

@endsection

@section('mainBody')
  <div class="main">
    <div class="page-head">
            <div class="container">
                {{-- <h1>{{ Lang::get('app.AcademinArticles') }}</h1> --}}
            </div>
        </div>

        <section id="team">
          <div class="container">
           
            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <h3>@lang('app.Departments')</h3>
             @foreach ($departments as $department)  
             <h6>   <a href="{{route('ArticlesByDepartment',$department->slug)}}">
                    @if(App::getLocale() == 'tr') {{ $department->trname }} @elseif (App::getLocale() == 'en') {{ $department->enname }}
                    @else {{$department->frname}} @endif </a> </h6>
                
               @endforeach
              </header>
           
           
            
    
          </div>
        </section>
      {{-- <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-8 col-sm-8 col-md-offset-2 blog-posts">


                 
            
                  
        
          @foreach($departments as $department)


          <div class="row">
            <h2><a href="{{route('ArticlesByDepartment',$department->slug)}}"> 
              @if(App::getLocale() == 'tr') {{ $department->trname }} @elseif (App::getLocale() == 'en') {{ $department->enname }}
                    @else {{$department->frname}} @endif  </a></h2>
              
            <hr class="blog-post-sep">

                 </div>

          @endforeach
                        

                  <div class="row pull-right" style="margin: 15px;">
                     {{ $departments->links() }}
                  </div>

                </div>
                <!-- END RIGHT SIDEBAR -->    
   
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div> --}}
    </div>

@endsection

@section('footer')

  <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/../../../user/assets/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="/../../../user/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/../../../user/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/../../../user/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/../../../user/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/../../../user/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

    <script src="/../../../user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            Layout.initTwitter();
        });
    </script>
     <script type="text/javascript">
      $(document).ready(function() {
        
          $("#academic").addClass("menu-active");
      });
   </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

