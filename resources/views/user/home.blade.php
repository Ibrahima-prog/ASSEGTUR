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


  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
     
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">
       
        </ol>

        <div class="carousel-inner" role="listbox">

          
             
          
          <div class="carousel-item active">
            <div class="carousel-background"><img src="../../slider1/{{ $slider1 ->image }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>ASSEGTUR</h2>
                <p> @if(App::getLocale() == 'tr') {{$slider1 ->trtitle}}  @elseif(App::getLocale() == 'en') {{$slider1 ->entitle}}  
                  @else {{$slider1 ->frtitle}} @endif</p>
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

 
    
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3><a href="/association/our-history">@lang('app.OurHistory2')</a></h3>
          <p>
            @if(App::getLocale() == 'tr') 
           {!! \Illuminate\Support\Str::words($history->trtext, 80 ,'  ...')  !!}
      @elseif (App::getLocale() == 'en') 
           {!! \Illuminate\Support\Str::words($history->entext, 80 ,'  ...')  !!}
           @else
           {!! \Illuminate\Support\Str::words($history->frtext, 80 ,'  ...')  !!}

      @endif              
        </p>       
       </header>
       <header class="section-header wow fadeInUp">
        <h3><a href="/association/about-us">@lang('app.OurAssociation')</a></h3>
        <p>
          @if(App::getLocale() == 'tr') 
         {!! \Illuminate\Support\Str::words($aboutus->trtext, 80 ,'  ...')  !!}
    @elseif (App::getLocale() == 'en') 
         {!! \Illuminate\Support\Str::words($aboutus->entext, 80 ,'  ...')  !!}
         @else
         {!! \Illuminate\Support\Str::words($aboutus->frtext, 80 ,'  ...')  !!}

    @endif                
    </p>     
     </header>
       

      

      </div>
    </section><!-- End Services Section -->
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
              <h2 class="title"><a href="/association/our-mission-vision">{{ Lang::get('app.OurMission') }}</a></h2>
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
              <h2 class="title"><a href="/association/our-mission-vision">{{ Lang::get('app.OurPlan') }} </a></h2>
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
              <h2 class="title"><a href="/association/our-mission-vision">{{ Lang::get('app.OurVision') }}  </a></h2>
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
    </section>
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->


    <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><a  href="/academic-works/article">@lang('app.AcademicWorks2')</a></h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          @foreach ($faculties as $faculty)
    

          <div class="testimonial-item">
            
            <p style="font-size: 30px;font-weight: 900">
              <img src="BizPage/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              <a href="{{route('departments_by_faculty',$faculty->slug)}}">
                @if(App::getLocale() == 'tr') {{ $faculty->trname }} @elseif (App::getLocale() == 'en') {{ $faculty->enname }}
                @else {{$faculty->frname}} @endif </a>
                        <img src="BizPage/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div> @endforeach   

         

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container">
        
        <div class="section-header wow fadeInUp">
          <h3><a  href="/news">@lang('app.RecentNews')</a></h3></div>
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
    </section><!-- End Team Section --> 
    <!-- ======= Portfolio Section ======= -->

    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title"><a  href="/activities_and_gallery">@lang('app.RecentActivities')</a></h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            {{-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> --}}
            <p>

            </p>
          </div>
        </div>

        <div class="row portfolio-container">

          @foreach($pastactivities as $activity)
          <div class="col-lg-4 col-md-6 portfolio-item filter-past wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="/../../etkinlikFotograflari/{{ $activity->image }}" class="img-fluid" alt="">
                <a href="/../../etkinlikFotograflari/{{ $activity->image }}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                <a href="{{ route('activities_and_gallery_summary',$activity->slug)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <a href="{{ route('activities_and_gallery_summary',$activity->slug)}}">
                  @if(App::getLocale() == 'tr') {{ \Illuminate\Support\Str::limit($activity->trtitle,30)  }} @elseif (App::getLocale() == 'en') {{ \Illuminate\Support\Str::limit($activity->entitle,30) }}
                  @else {{\Illuminate\Support\Str::limit($activity->frtitle,30)}} @endif</a></h5>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>       {{ Lang::get('app.ExecutiveBoard') }} 
          </h3>
        </div>

        <div class="row">
          @foreach($boardmembers as $member)

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="/../../yonetimFotograflari/{{ $member->image }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $member->name }}</h4>
                  <span>@if(App::getLocale() == 'tr') {{ $member->trtitle }}  @elseif (App::getLocale() == 'en') {{ $member->entitle }}
                    @else {{ $member->frtitle }}  @endif</span>
                  <div class="social">
                    <a href="{{ $member->twitter }}"><i class="fa fa-twitter"></i></a>
                    <a href="{{ $member->facebook }}"><i class="fa fa-facebook"></i></a>
                    <a href="{{ $member->instagram }}"><i class="fa fa-instagram"></i></a>
                    <a href="{{"mailto:$member->email"  }}"><i class="fa fa-envelope"></i></a>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endforeach


      

      

        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg wow fadeInUp" >
      <div class="container">
        <div class="section-header">
          <h3><a  href="/association/register">{{ Lang::get('app.RegisterMessage') }}</a></h3>
          
          {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
        </div>
        <div class="form">
          <div class="php-email-form">
          <form action="{{ route('registermember') }}" method="post" role="form">
            {{ csrf_field() }}
           <h4>{{ Lang::get('app.YourPersonalDetails') }}</h4> 
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{ Lang::get('app.fullname') }}" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="address" class="form-control" id="name" placeholder="{{ Lang::get('app.homeAddress') }}" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="institution" class="form-control" id="name" placeholder="{{ Lang::get('app.UniversityInstitution') }}" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="department" class="form-control" id="name" placeholder="{{ Lang::get('app.department') }}" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="number" name="phone" class="form-control" id="name" placeholder="{{ Lang::get('app.Phone') }}" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="{{ Lang::get('app.Email') }}" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                
                  <select name="gender" class="form-control" required>
                    <option value="">{{ Lang::get('app.selectGender') }}</option>
                    <option value="Erkek">{{ Lang::get('app.Male') }}</option></option>
                    <option value="Kız">{{ Lang::get('app.Female') }}</option>
                  </select>
                
              </div>
              <div class="form-group col-md-6">
               
                   <select name="level" class="form-control" required>
                      <option value="">{{ Lang::get('app.selectEducation') }}</option>
                      <option value="Lise">{{ Lang::get('app.Highschool') }}</option>
                      <option value="Lisans">{{ Lang::get('app.Bachelor') }}</option>
                      <option value="Yüksek Lisans">{{ Lang::get('app.Masters') }}</option>
                      <option value="Doktora">{{ Lang::get('app.php') }}</option>
                    </select>

                
              </div>
            </div>
           
            {{-- <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> --}}
            <div class="text-center"><button type="submit">{{ Lang::get('app.Register') }}</button></div>
          </form></div>
        </div>
      </div>
      </section>

    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3><a  href="/conctact-us">@lang('app.ContactUs')</a></h3>
          {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>@lang('app.Address')</h3>
              <address>{{$contacts->address}}</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>@lang('app.phonenumber')</h3>
              <p><a href="tel:{{$contacts->phoneone}}">{{$contacts->phoneone}}</a></p>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:{{$contacts->emailone}}">{{$contacts->emailone}}</a></p>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Contact Section -->
    

  </main><!-- End #main -->

  

@endsection
@section('footer')
<script type="text/javascript">
  $(document).ready(function() {
    
      $("#home").addClass("menu-active");
  });
</script>
@endsection


