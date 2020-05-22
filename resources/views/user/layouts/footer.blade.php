<footer id="footer">
    <!-- BEGIN PRE-FOOTER -->
    <div class="footer-top">
      <div class="container">
        <div class="col-md-12 footer-info" style="text-align: center">         
           <a href="/" class="scrollto"><img src="../../logo/Layer_1_25percent_50_sans_ecrit.png" alt=""></a>
        </div>
        <div class="col-md-12 footer-info" style="text-align: center">
          <h1>@lang('app.AssociationDesEtudiantsGuinéensDelaTurquie')</h1>
        </div>
        <div class="row">


          <div class=" col-md-6 footer-links">
            <h4>@lang('app.usefullinks')</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="/">{{ Lang::get('app.Home') }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/association/our-history">{{ Lang::get('app.OurHistory') }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/association/about-us">{{ Lang::get('app.AboutUs') }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/association/our-mission-vision">{{ Lang::get('app.OurMissionAndVision') }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a  href="/news">{{ Lang::get('app.News') }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a  href="/activities_and_gallery">{{ Lang::get('app.activities_and_galleries') }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a  href="/academic-works/article">{{ Lang::get('app.AcademicWorks') }}</a></li>
              <li><i class="ion-ios-arrow-right"></i><a  href="/conctact-us">{{ Lang::get('app.ContactUs') }}</a></li>
              
              <li><i class="ion-ios-arrow-right"></i><a  href="/association/register">{{ Lang::get('app.Registration') }}</a></li>
            </ul>
          </div>

          <div class=" col-md-6 footer-contact" style="">
            <h4>@lang('app.ContactUs')</h4>
            <p>
              <strong>@lang('app.Address'):</strong> {{$contacts->address}} <br>
              {{-- New York, NY 535022<br>
              United States <br> --}}
              <strong>@lang('app.Phone'):</strong> {{$contacts->phoneone}}<br>
              <strong>@lang('app.email'):</strong> {{$contacts->emailone}}<br>
               <a  href="/fr"><img src="../../user/assets/images/countries/france.png" alt="français"></a> &emsp14; &emsp14;
               <a  href="/tr"><img src="../../user/assets/images/countries/tr.png" alt="Turkish"></a> &emsp14; &emsp14;
              <a  href="/en"><img src="../../user/assets/images/countries/en.png" alt="English"></a> &emsp14; &emsp14;
            </p>

            <div class="social-links">
              {{-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> --}}
              <a href="https://www.facebook.com/groups/124016280989833/" target="blank" class="facebook"><i class="fa fa-facebook"></i></a>
              {{-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> --}}
            </div>

          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> --}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
         Copyright &copy; 2020 <strong>ASSEGTUR</strong> All Rights Reserved <br>
        Designed by:<a href="mailto:ibrhimsorycamara77@gmail.com"><strong> Ibrahima Sory Camara</strong></a>
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="/../../BizPage/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/../../BizPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/../../BizPage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/../../BizPage/assets/vendor/php-email-form/validate.js"></script>
  <script src="/../../BizPage/assets/vendor/wow/wow.min.js"></script>
  <script src="/../../BizPage/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/../../BizPage/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/../../BizPage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/../../BizPage/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/../../BizPage/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/../../BizPage/assets/vendor/superfish/superfish.min.js"></script>
  <script src="/../../BizPage/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="/../../BizPage/assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/../../BizPage/assets/js/main.js"></script>
        
    @section('footer')

    @show


