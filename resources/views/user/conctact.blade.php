@extends('user/app')
@section('pagename','Contact Us')
@section('head')

  <link href="/../../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->

@endsection
@section('mainBody')
<div class="main">
  <div class="page-head">
    <div class="container">
        {{-- <h1>Contact Us</h1> --}}
    </div>
</div>
   <section id="contact" class="section-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
  <div class="container">

    <div class="section-header">
      <h3>@lang('app.ContactUs')</h3>
      {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
    </div>

    <div class="row contact-info">

      {{-- <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
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

    

  </div>
</section> 
</main>
@endsection
