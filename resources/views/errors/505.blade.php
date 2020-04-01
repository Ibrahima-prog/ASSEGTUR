<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="tr"/> 
    <meta name="city" content="Konya"/> 
    <meta name="country" content="tr"/> 
    <meta name="Audience" content="All"/> 
    <meta name="Owner" content="AFROKONYA"/>
    <meta name="author" content="AFROKONYA">
    <meta name="Copyright" content="AFROKONYA"/> 
    <meta name="keywords" content=""/> 
   
    <meta property="og:site_name" content="AFROKONYA - Konya’daki Afrikalı Öğrenciler Birliği">
    <meta property="og:title" content="AFROKONYA - Konya’daki Afrikalı Öğrenciler Birliği">
    <meta property="og:description" content="Afrokonya, konya, africans in konya, Konya’daki Afrikalı Öğrenciler Birliği, konyalılar, afros, konya afrika birliği, afrikalı dernekleri, africans in konya, african in turkey, beautiful afrika, aktat, student association, students associoation in turkey, afrokonya website, best students association, study in konya, afrıkalılar">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/../../user/assets/images/favicon.jpg"><!-- link to image for socio -->
    <meta property="og:url" content="http://afrokonyaweb.com/">
    
     
    <meta name="description" content= "AFROKONYA - Konya’daki Afrikalı Öğrenciler Birliği"/>

    <title>AFROKONYA | 505 </title>

    <link rel="shortcut icon" href="/../../user/assets/images/favicon.jpg">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="../../../../user/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../../../user/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="../../../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="../../../../user/assets/pages/css/components.css" rel="stylesheet">
  <link href="../../../../user/assets/corporate/css/style.css" rel="stylesheet">
  <link href="../../../../user/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="../../../../user/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../../../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
  
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="/"><img src="/../../user/assets/images/logo2.png" alt="Afrokonya Logo"></a>
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="{{ Request::is( '/') ? 'active' : '' }}"><a href="/">{{ Lang::get('app.Home') }}</a></li>
            <li class="dropdown {{ str_contains(request()->url(), '/association') ? 'active' : '' }}">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                {{ Lang::get('app.OurAssociation') }} 
              </a>      
              <ul class="dropdown-menu">
                <li><a href="/association/our-history">{{ Lang::get('app.OurHistory') }}</a></li>
                <li><a href="/association/about-us">{{ Lang::get('app.AboutUs') }}</a></li>
                <li><a href="/association/our-mission-vision">{{ Lang::get('app.OurMissionAndVision') }}</a></li>
                <li><a href="/association/register">{{ Lang::get('app.Register') }}</a></li>
                <li><a href="/association/faq">{{ Lang::get('app.FAQs') }}</a></li>
              </ul>
            </li>

            <li class="{{ str_contains(request()->url(), '/gallery') ? 'active' : '' }}"><a href="/gallery">{{ Lang::get('app.Gallery') }}</a></li>
            <li class="{{ str_contains(request()->url(), '/news') ? 'active' : '' }}"><a href="/news">{{ Lang::get('app.News') }}</a></li>
            <li class="{{ str_contains(request()->url(), '/activities') ? 'active' : '' }}"><a href="/activities">{{ Lang::get('app.Activities') }}</a></li>

      {{--       <li class="dropdown {{ str_contains(request()->url(), '/academic') ? 'active' : '' }}">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                 {{ Lang::get('app.AcademicWorks') }}
              </a>      
              <ul class="dropdown-menu">
                <li><a href="/academic-works/article">{{ Lang::get('app.Articles') }}</a></li>
                <li><a href="/academic-works/announce">{{ Lang::get('app.Announces') }}</a></li>
              </ul>
            </li> --}}

            <li class="{{ str_contains(request()->url(), '/academic') ? 'active' : '' }}"><a href="/academic-works/article">{{ Lang::get('app.AcademicWorks') }}</a></li> 

            <li class="dropdown {{ str_contains(request()->url(), '/communities') ? 'active' : '' }}">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                 {{ Lang::get('app.Communities') }}
              </a>      
              <ul class="dropdown-menu">
                <li><a href="/communities/aktat">{{ Lang::get('app.SuAKTAT') }}</a></li>
              </ul>
            </li>

            <li class="{{ str_contains(request()->url(), '/conctact-us') ? 'active' : '' }}"><a href="/conctact-us">{{ Lang::get('app.ContactUs') }}</a></li> 

             <li> <a href="/tr"><img src="../../user/assets/images/countries/tr.png" alt="Turkish"></a></li>
             <li><a href="/en"><img src="../../user/assets/images/countries/en.png" alt="English"></a></li>


          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <div class="content-page page-404">
               <div class="number">
                  505
               </div>
               <div class="details">
                  <h3>Oops!  You're lost.</h3>
                  <p>
                     We can not find the page you're looking for.<br>
                     <a href="/" class="link">Return home</a>
                  </p>
               </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>


<!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-2 col-md-offset-1 col-sm-6 pre-footer-col" style="text-align: center;">
            
            <img src="../../user/assets/images/afrokonya.png" alt="Afrokonya Association" height="150">
           <h2>AFROKONYA</h2>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

   

           <div class="col-md-4 col-sm-6 col-md-offset-4 pre-footer-col" >
            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical" >
              <h2 >{{ Lang::get('app.Newsletter') }}</h2>
              <p>{{ Lang::get('app.SubscribMessage') }}</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">{{ Lang::get('app.Subscribe') }}</button>
                  </span>
                </div>
              </form>
            </div>
            
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4  padding-top-10" style="text-align: center;">
            2018 © AFROKONYA. {{ Lang::get('app.AllRightsReserved') }}.
          </div>
          <!-- END COPYRIGHT -->
    
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-2 col-md-offset-4 col-sm-4 signature">
            <p class="powered">Powered by: <a href="http://www.nourkas.com/" target="_blank" title="Professional Web Developers">NourKas</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

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

        <script type="text/javascript">
                        //Page loader
            jQuery(window).load(function() {
                jQuery(".status").fadeOut();
                jQuery("#page-load").delay(2000).fadeOut();
            })
        </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>