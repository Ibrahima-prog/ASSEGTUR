@extends('user/app')
@section('pagename','Home Page')

 {{--<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASSEGTUR</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="BizPage/assets/img/favicon.png" rel="icon">
  <link href="BizPage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="BizPage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="BizPage/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="BizPage/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="BizPage/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="BizPage/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="BizPage/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="BizPage/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v2.0.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== --> 
</head>--}}
@section('mainBody')
{{-- <body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">ASSEGTUR</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="/img/logo.png" alt=""></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">{{ Lang::get('app.OurAssociation') }} </a>
            <ul>
              <li><a href="/association/our-history">{{ Lang::get('app.OurHistory') }}</a></li>              
              <li><a href="/association/about-us">{{ Lang::get('app.AboutUs') }}</a></li>
              <li><a href="/association/our-mission-vision">{{ Lang::get('app.OurMissionAndVision') }}</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="/news">{{ Lang::get('app.News') }}</a></li>
          <li><a href="/activities_and_gallery">{{ Lang::get('app.activities_and_galleries') }}</a></li>
         <li><a href="/academic-works/article">{{ Lang::get('app.AcademicWorks') }}</a></li>
        <li><a href="/conctact-us">{{ Lang::get('app.ContactUs') }}</a></li>
        <li> <a href="/tr"><img src="../../user/assets/images/countries/tr.png" alt="Turkish"></a></li>
             <li><a href="/en"><img src="../../user/assets/images/countries/en.png" alt="English"></a></li>
             <li><a href="/association/register">{{ Lang::get('app.Registration') }}</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header --> --}}

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      {{-- <div id="first-slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
       
    
              @foreach($sliderimages as $sliderimage)
    
    
                <div class="item {{ str_contains($loop->index, '0') ? 'active' : '' }} slide" style="background-image: url(../../sliderFotograflari/{{ $sliderimage->image }});">
                    <div class="row"> --}}
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">
       
        </ol>

        <div class="carousel-inner" role="listbox">

          
             
          
          <div class="carousel-item active">
            <div class="carousel-background"><img src="../../slider1/{{ $slider1[0]->image }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>ASSEGTUR</h2>
                <p> @if(App::getLocale() == 'tr') {{$slider1[0]->trtitle}}  @elseif(App::getLocale() == 'en') {{$slider1[0]->entitle}}  
                  @else {{$slider1[0]->frtitle}} @endif</p>
              </div>
            </div>
          </div>
          @foreach ($sliderimages as $sliderimage)
          <div class="carousel-item">
            <div class="carousel-background"><img src="../../sliderFotograflari/{{ $sliderimage->image }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>ASSEGTUR</h2>
                <p> @if(App::getLocale() == 'tr') {{$sliderimage->trtitle}}  @elseif(App::getLocale() == 'en') {{$sliderimage->entitle}}  
                  @else {{$sliderimage->frtitle}} @endif</p>
              
              </div>
            </div>
          </div>

          @endforeach
          

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          {{-- <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Travail</a></h4>
            {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> 
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-eye-outline"></i>
            <h4 class="title"><a href="">Justice</a></h4>
            {{-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> 
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Solidarité</a></h4>
            {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> 
          </div> --}}

        </div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>@lang('app.AboutUs')</h3>
          {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="BizPage/flags/red_flag.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">{{ Lang::get('app.OurMission') }}</a></h2>
              <p>
                 @if(App::getLocale() == 'tr') 
                {!! \Illuminate\Support\Str::words($mission->trtext, 20 ,'  ...')  !!}
           @elseif (App::getLocale() == 'en') 
                {!! \Illuminate\Support\Str::words($mission->entext, 20 ,'  ...')  !!}
                @else
                {!! \Illuminate\Support\Str::words($mission->frtext, 20 ,'  ...')  !!}

           @endif                  </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="BizPage/flags/yellow_flag.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">{{ Lang::get('app.OurPlan') }} </a></h2>
              <p>
                @if(App::getLocale() == 'tr') 
                {!! \Illuminate\Support\Str::words($plan->trtext, 20 ,'  ...')  !!}
           @elseif (App::getLocale() == 'en') 
                {!! \Illuminate\Support\Str::words($plan->entext, 20 ,'  ...')  !!}
                @else
                {!! \Illuminate\Support\Str::words($plan->frtext, 20 ,'  ...')  !!}

           @endif              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="BizPage/flags/green_flag.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">{{ Lang::get('app.OurVision') }}  </a></h2>
              <p>
                @if(App::getLocale() == 'tr') 
                {!! \Illuminate\Support\Str::words($vision->trtext, 20 ,'  ...')  !!}
           @elseif (App::getLocale() == 'en') 
                {!! \Illuminate\Support\Str::words($vision->entext, 20 ,'  ...')  !!}
                @else
                {!! \Illuminate\Support\Str::words($vision->frtext, 20 ,'  ...')  !!}

           @endif     
                          </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>

        </div>

        <div class="facts-img">
          <img src="BizPage/assets/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/web3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/app2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/card2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/web2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/app3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/card1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/card3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="BizPage/assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="BizPage/assets/img/portfolio/web1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="BizPage/assets/img/clients/client-1.png" alt="">
          <img src="BizPage/assets/img/clients/client-2.png" alt="">
          <img src="BizPage/assets/img/clients/client-3.png" alt="">
          <img src="BizPage/assets/img/clients/client-4.png" alt="">
          <img src="BizPage/assets/img/clients/client-5.png" alt="">
          <img src="BizPage/assets/img/clients/client-6.png" alt="">
          <img src="BizPage/assets/img/clients/client-7.png" alt="">
          <img src="BizPage/assets/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="BizPage/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="BizPage/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="BizPage/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="BizPage/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="BizPage/assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="BizPage/assets/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="BizPage/assets/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="BizPage/assets/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="BizPage/assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>@lang('app.ContactUs')</h3>
          {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
        </div>

        <div class="row contact-info">

          {{-- <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>@lang('app.Address')</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div> --}}

          <div class="col-md-6">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>@lang('app.phonenumber')</h3>
              <p><a href="tel:{{$contacts->phoneone}}">{{$contacts->phoneone}}</a></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:{{$contacts->emailone}}">{{$contacts->emailone}}</a></p>
            </div>
          </div>

        </div>

        {{-- <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div> --}}

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  {{--  <footer id="footer">
   <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>ASSEGTUR</h3>
            <p>Association Des Etudiants Guinéens De la Turquie</p>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -- }}

          <div class="col-lg-3 col-md-6 footer-contact" style="margin-left: auto">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              {{-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -- }}
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              {{-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -- }}
            </div>

          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -- }}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <a href="mailto:ibrhimsorycamara77@gmail.com"><strong>Ibrahima Sory Camara</strong></a> . All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="BizPage/assets/vendor/jquery/jquery.min.js"></script>
  <script src="BizPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="BizPage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="BizPage/assets/vendor/php-email-form/validate.js"></script>
  <script src="BizPage/assets/vendor/wow/wow.min.js"></script>
  <script src="BizPage/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="BizPage/assets/vendor/counterup/counterup.min.js"></script>
  <script src="BizPage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="BizPage/assets/vendor/venobox/venobox.min.js"></script>
  <script src="BizPage/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="BizPage/assets/vendor/superfish/superfish.min.js"></script>
  <script src="BizPage/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="BizPage/assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main JS File -->
  <script src="BizPage/assets/js/main.js"></script> 

</body>--}}

@endsection


{{-- @extends('user/app')

@section('pagename','Home Page')

@section('head')
  <!-- Page level plugin styles START -->
  <link href="user/assets/pages/css/animate.css" rel="stylesheet">
  <link href="user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="user/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="user/assets/pages/css/components.css" rel="stylesheet">
  <link href="user/assets/pages/css/slider.css" rel="stylesheet">
  <link href="user/assets/corporate/css/style.css" rel="stylesheet">
  <link href="user/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="user/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <!-- Theme styles END -->

@endsection

@section('mainBody')


  {{-- NOTE THE DIMENSION FOR THE SLIDER IMAGES TOBE 1700 x 850 PIZELS EACH --

  <div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
   

          @foreach($sliderimages as $sliderimage)


            <div class="item {{ str_contains($loop->index, '0') ? 'active' : '' }} slide" style="background-image: url(../../sliderFotograflari/{{ $sliderimage->image }});">
                <div class="row">
                  <div class="container hidden-sm hidden-xs">
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">
                          <span style="font-size: 0px;">
                            <span class="fl">ASS</span>
                              <span class="sl">EG</span> 
                             <span class="tl">TUR</span>  </span>
                        </h3>
                        <h4 data-animation="animated bounceInUp"> @if(App::getLocale() == 'tr') {{ $sliderimage->trtitle }} @else {{ $sliderimage->entitle }} @endif</h4>             
                     </div>
                  </div>
                </div>
             </div> 
        
        @endforeach
       

        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>



    <div class="main">
      <div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span>{{ Lang::get('app.AboutUs') }}</span>
            </div>
            <p>
               @if(App::getLocale() == 'tr') 
                    {!! \Illuminate\Support\Str::words($aboutus->trtext, 30 ,'  ...')  !!}
               @else
                    {!! \Illuminate\Support\Str::words($aboutus->entext, 30 ,'  ...')  !!}
               @endif

              </p>
              <p><strong><a href="/association/about-us" title="{{ Lang::get('app.ReadMore') }}">{{ Lang::get('app.ReadMore') }}</a></strong></p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red"></i></em>
              <span>{{ Lang::get('app.OurVision') }} </span>
            </div>
                    <p>
               @if(App::getLocale() == 'tr') 
                    {!! \Illuminate\Support\Str::words($vision->trtext, 30 ,'  ...')  !!}
               @else
                    {!! \Illuminate\Support\Str::words($vision->entext, 30 ,'  ...')  !!}
               @endif

              </p>
              <p><strong><a href="/association/our-mission-vision" title="{{ Lang::get('app.ReadMore') }}">{{ Lang::get('app.ReadMore') }}</a></strong></p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green"></i></em>
              <span>{{ Lang::get('app.OurMission') }} </span>
            </div>
                    <p>
               @if(App::getLocale() == 'tr') 
                    {!! \Illuminate\Support\Str::words($mission->trtext, 30 ,'  ...')  !!}
               @else
                    {!! \Illuminate\Support\Str::words($mission->entext, 30 ,'  ...')  !!}
               @endif

              </p>
              <p><strong><a href="/association/our-mission-vision" title="{{ Lang::get('app.ReadMore') }}">{{ Lang::get('app.ReadMore') }}</a></strong></p>
          </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-9">
            <span>{{ Lang::get('app.BecomeMember') }}</span>
          </div>
          <div class="col-md-3 text-right">
            <a class="btn-transparent" href="/association/register" ><i class="fa fa-rocket margin-right-10"></i>{{ Lang::get('app.Registernow') }} </a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-3">
            <h2><a href="/news">{{ Lang::get('app.LatestNews') }}</a></h2>
            <p>{!! Lang::get('app.LatestNewsMessage') !!}</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">
                

              @foreach($news as $newsItem)
              <div class="recent-work-item">
                <em>
                  <img src="../../haberFotograflari/{{ $newsItem->image }}" alt="{{ $newsItem->image }}" class="img-responsive">
                  <a  href="{{ route('newsDetails', $newsItem->slug) }}"><i class="fa fa-link"></i></a>
                  <a href="../../haberFotograflari/{{ $newsItem->image }}" class="fancybox-button" title=" @if(App::getLocale() == 'tr') {{ $newsItem->trtitle }} @else {{ $newsItem->entitle }} @endif" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="{{ route('newsDetails', $newsItem->slug) }}">
                  <strong> @if(App::getLocale() == 'tr') {{ $newsItem->trtitle }} @else {{ $newsItem->entitle }} @endif</strong>
                 
                </a>
              </div>
              @endforeach

            
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->


        <!-- BEGIN STEPS -->
        <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3 margin-bottom-40">
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step1">
              <h2>{{ Lang::get('app.Unity') }}</h2>
              <p>{{ Lang::get('app.UnityText') }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step2">
              <h2>{{ Lang::get('app.Solidarity') }}</h2>
              <p>{{ Lang::get('app.SolidarityText') }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step3">
              <h2>{{ Lang::get('app.Progress') }}</h2>
              <p>{{ Lang::get('app.ProgressText') }}</p>
            </div>
          </div>
        </div>
        <!-- END STEPS -->


        <!-- BEGIN UPCOMMING ACTIVITIES -->
        <div class="row recent-work margin-bottom-40">
          
          <div class="col-md-3">
            <h2><a href="/activities">{{ Lang::get('app.UpcommingActivities') }}</a></h2>
            {{-- <p>{!! Lang::get('app.UpcommingActivitiesMessage') !!}</p> --
          </div>

          <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">
              
               @foreach($activities as $eventItem)
               
               <div class="recent-work-item">
                <em>
                  <img src="../../etkinlikFotograflari/{{ $eventItem->image }}" alt="{{ $eventItem->image }}" class="img-responsive">
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>@if(App::getLocale() == 'tr') {{ $eventItem->trtitle }} @else {{ $eventItem->entitle }} @endif</strong>
                 
                </a>
              </div>

                @endforeach

            </div>       
          </div>

         
        </div>   
        <!-- END BEGIN UPCOMMING ACTIVITIES -->

        <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
               <h2>{{ Lang::get('app.PresentationVideo') }}</h2>
                  <!-- BEGIN VIDEO -->   
                    <iframe height="400" allowfullscreen="" style="width:100%; border:0" src="https://www.youtube.com/embed/2wMQly4BSRs?list=PLxrXSwLHtutIoiC_DpXzopTgYBeBUzRYS" class="margin-bottom-10"></iframe>
                   
                  <!-- END VIDEO -->   
              </div>
          </div>
        </div>

        <!-- BEGIN CLIENTS -->
        <div class="row margin-bottom-40 our-clients">
          <div class="col-md-3">
            <h2><a href="javascript:;">{{ Lang::get('app.OurUniversities') }}</a></h2>
            <p>{{ Lang::get('app.UniversityText') }}</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel6-brands">
              <div class="client-item">
                <a href="javascript:;">
                  <img src="user/assets/images/universities/selcukGrey.png" class="img-responsive" alt="Selçuk Üniversistesi" title="Selçuk Üniversistesi">
                  <img src="user/assets/images/universities/selcuk.png" class="color-img img-responsive" alt="Selçuk Üniversistesi" title="Selçuk Üniversistesi">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="user/assets/images/universities/necmetinGrey.png" class="img-responsive" alt="Nemettin Erbakan Üniversistesi" title="Nemettin Erbakan Üniversistesi">
                  <img src="user/assets/images/universities/necmetin.png" class="color-img img-responsive" alt="Nemettin Erbakan Üniversistesi" title="Nemettin Erbakan Üniversistesi">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="user/assets/images/universities/karatayGrey.png" class="img-responsive" alt="Karatay Üniversistesi"  title="Karatay Üniversistesi">
                  <img src="user/assets/images/universities/karatay.png" class="color-img img-responsive" alt="Karatay Üniversistesi" title="Karatay Üniversistesi">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="user/assets/images/universities/tarimGrey.png" class="img-responsive" alt="Konya Gıda ve Tarım Üniversitesi" title="Konya Gıda ve Tarım Üniversitesi">
                  <img src="user/assets/images/universities/tarim.png" class="color-img img-responsive" alt="Konya Gıda ve Tarım Üniversitesi" title="Konya Gıda ve Tarım Üniversitesi">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="user/assets/images/universities/liseGrey.png" class="img-responsive" alt="Imam Hatip Lisileri"  title="Imam Hatip Lisileri">
                  <img src="user/assets/images/universities/lise.png" class="color-img img-responsive" alt="Imam Hatip Lisileri" title="Imam Hatip Lisileri">
                </a>
              </div>
            </div>
          </div>          
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>















@endsection

@section('footer')
 <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="user/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="user/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <script src="user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="user/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

    <script type="text/javascript">
(function( $ ) {

    //Function to animate slider captions 
  function doAnimations( elems ) {
    //Cache the animationend event in a variable
    var animEndEv = 'webkitAnimationEnd animationend';
    
    elems.each(function () {
      var $this = $(this),
        $animationType = $this.data('animation');
      $this.addClass($animationType).one(animEndEv, function () {
        $this.removeClass($animationType);
      });
    });
  }
  
  //Variables on page load 
  var $myCarousel = $('#carousel-example-generic'),
    $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    
  //Initialize carousel 
  $myCarousel.carousel();
  
  //Animate captions in first slide on page load 
  doAnimations($firstAnimatingElems);
  
  //Pause carousel  
  $myCarousel.carousel('pause');
  
  
  //Other slides to be animated on carousel slide event 
  $myCarousel.on('slide.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
  });  
    $('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });
  
})(jQuery); 

</script>
	
@endsection --}}
