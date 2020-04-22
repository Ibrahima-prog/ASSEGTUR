<header id="header">
  <div class="container-fluid">

    <div id="logo" class="pull-left">
      <h1><a href="/" class="scrollto"><img src="../../logo/Layer_1_25percent_50_sans_ecrit.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="/"></a> --}}
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li id="home" ><a  href="/">{{ Lang::get('app.Home') }}</a></li>
        {{-- <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        
        <li><a href="#team">Team</a></li> --}}
        <li id="our" class="menu-has-children"><a  href="">{{ Lang::get('app.OurAssociation') }} </a>
          <ul>
            <li><a href="/association/our-history">{{ Lang::get('app.OurHistory') }}</a></li>              
            <li><a href="/association/about-us">{{ Lang::get('app.AboutUs') }}</a></li>
            <li><a href="/association/our-mission-vision">{{ Lang::get('app.OurMissionAndVision') }}</a></li>
          </ul>
        </li>
        {{-- <li><a href="#contact">Contact</a></li> --}}
        <li id="news"><a  href="/news">{{ Lang::get('app.News') }}</a></li>
        <li id="activities"><a  href="/activities_and_gallery">{{ Lang::get('app.activities_and_galleries') }}</a></li>
       <li id="academic"><a  href="/academic-works/article">{{ Lang::get('app.AcademicWorks') }}</a></li>
      <li id="contactus"><a  href="/conctact-us">{{ Lang::get('app.ContactUs') }}</a></li>
      <li> <a  href="/fr"><img src="../../user/assets/images/countries/france.png" alt="français"></a></li>

      <li> <a  href="/tr"><img src="../../user/assets/images/countries/tr.png" alt="Turkish"></a></li>
           <li><a  href="/en"><img src="../../user/assets/images/countries/en.png" alt="English"></a></li>
           <li id="register"><a  href="/association/register">{{ Lang::get('app.Registration') }}</a></li>

      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header>