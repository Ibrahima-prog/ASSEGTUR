@extends('user/app')

@section('pagename','Our History')

@section('head')

 <!-- Page level plugin styles START -->
  <link href="/../../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/../../../user/assets/pages/css/components.css" rel="stylesheet">
  <link href="/../../../user/assets/corporate/css/style.css" rel="stylesheet">
  <link href="/../../../user/assets/pages/css/portfolio.css" rel="stylesheet">
  <link href="/../../../user/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="/../../../user/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/../../../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
@endsection

@section('mainBody')
  <div class="main">
      <div class="page-head">
            <div class="container">
                <h1>{{ Lang::get('app.Announces') }}</h1>
            </div>
        </div>
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            
            <div class="content-page">
                <div class="filter-v1">
                        <div class="row mix-grid thumbnails">
                          
                          <div class="col-md-4 col-sm-6 mix " style="display: block;  opacity: 1;">
                            <div class="mix-inner">
                               <img alt="" src="/../../../user/assets/pages/img/works/img1.jpg" class="img-responsive">
                               <div class="mix-details">
                                  <h4>Cascusamus et iusto odio</h4>
                                  <p>At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores.</p>
                                  <a class="mix-link"><i class="fa fa-link"></i></a>
                                  <a data-rel="fancybox-button" title="Project Name" href="/../../../user/assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                               </div>           
                            </div>                       
                          </div>

                           <div class="col-md-4 col-sm-6 mix " style="display: block;  opacity: 1;">
                            <div class="mix-inner">
                               <img alt="" src="/../../../user/assets/pages/img/works/img1.jpg" class="img-responsive">
                               <div class="mix-details">
                                  <h4>Cascusamus et iusto odio</h4>
                                  <p>At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores.</p>
                                  <a class="mix-link"><i class="fa fa-link"></i></a>
                                  <a data-rel="fancybox-button" title="Project Name" href="/../../../user/assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                               </div>           
                            </div>                       
                          </div>

                           <div class="col-md-4 col-sm-6 mix " style="display: block;  opacity: 1;">
                            <div class="mix-inner">
                               <img alt="" src="/../../../user/assets/pages/img/works/img1.jpg" class="img-responsive">
                               <div class="mix-details">
                                  <h4>Cascusamus et iusto odio</h4>
                                  <p>At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores.</p>
                                  <a class="mix-link"><i class="fa fa-link"></i></a>
                                  <a data-rel="fancybox-button" title="Project Name" href="/../../../user/assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                               </div>           
                            </div>                       
                          </div>

                           <div class="col-md-4 col-sm-6 mix " style="display: block;  opacity: 1;">
                            <div class="mix-inner">
                               <img alt="" src="/../../../user/assets/pages/img/works/img1.jpg" class="img-responsive">
                               <div class="mix-details">
                                  <h4>Cascusamus et iusto odio</h4>
                                  <p>At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores.</p>
                                  <a class="mix-link"><i class="fa fa-link"></i></a>
                                  <a data-rel="fancybox-button" title="Project Name" href="/../../../user/assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                               </div>           
                            </div>                       
                          </div>
                         
                       
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
    <script src="/../../../user/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/../../../user/assets/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
    
    <script src="/../../../user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="/../../../user/assets/pages/scripts/portfolio.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
            Portfolio.init();
        });
    </script>
@endsection

