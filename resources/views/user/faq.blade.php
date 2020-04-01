@extends('user/app')

@section('pagename','Our Mission')

@section('head')

  <!-- Page level plugin styles START -->
  <link href="/../../user/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/../../user/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/../../user/assets/pages/css/components.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/style.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="/../../user/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/../../user/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->


 <!-- Page level plugin styles START -->
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  
@endsection

@section('mainBody')
    <div class="main">
      <div class="page-head">
            <div class="container">
                <h1>FAQs</h1>
            </div>
        </div>
      <div class="container">
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>{{ Lang::get('app.faqs') }}</h1>
            <div class="content-page">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <ul class="tabbable faq-tabbable">
                    <li class="active"><a href="#tab_1" data-toggle="tab">{{ Lang::get('app.GeneralQuestions') }}</a></li>
                    <li><a href="#tab_2" data-toggle="tab">{{ Lang::get('app.AssociationRelated') }}</a></li>
                    <li><a href="#tab_3" data-toggle="tab">{{ Lang::get('app.Membership') }}</a></li>
                    <li><a href="#tab_4" data-toggle="tab">{{ Lang::get('app.Others') }} </a></li>
                  </ul>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="tab-content" style="padding:0; background: #fff;">
                      <!-- START TAB 1 -->
                      <div class="tab-pane active" id="tab_1">
                         <div class="panel-group" id="accordion1">
                          

                          @foreach($genelfaqs as $faq)

                            <div class="panel panel-success">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion1_{{ $loop->index + 1 }}" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle ">
                                     {{ $loop->index + 1 }}.  @if(App::getLocale() == 'tr') {{ $faq->trquestion }} @else {{ $faq->enquestion }} @endif
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse  {{ str_contains($loop->index, '0') ? 'in' : '' }}" id="accordion1_{{ $loop->index + 1 }}">
                                  <div class="panel-body">
                                    @if(App::getLocale() == 'tr') {{ $faq->transwer }} @else {{ $faq->enanswer }} @endif 
                                  </div>
                               </div>
                            </div>

                            @endforeach
                    
                         </div>
                      </div>
                      <!-- END TAB 1 -->
                      <!-- START TAB 2 -->
                      <div class="tab-pane" id="tab_2">
                         <div class="panel-group" id="accordion2">

                        @foreach($birlikfaqs as $faq)

                            <div class="panel panel-success">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion2_{{ $loop->index + 1 }}" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                    {{ $loop->index + 1 }}.  @if(App::getLocale() == 'tr') {{ $faq->trquestion }} @else {{ $faq->enquestion }} @endif
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse  {{ str_contains($loop->index, '0') ? 'in' : '' }}" id="accordion2_{{ $loop->index + 1 }}">
                                  <div class="panel-body">
                                      @if(App::getLocale() == 'tr') {{ $faq->transwer }} @else {{ $faq->enanswer }} @endif 
                                  </div>
                               </div>
                            </div>

                        @endforeach

             

                         </div>
                      </div>
                      <!-- END TAB 3 -->
                      <!-- START TAB 3 -->
                      <div class="tab-pane" id="tab_3">
                         <div class="panel-group" id="accordion3">


                        @foreach($uyelikfaqs as $faq)

                            <div class="panel panel-success">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion3_{{ $loop->index + 1 }}" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle">
                                    {{ $loop->index + 1 }}.  @if(App::getLocale() == 'tr') {{ $faq->trquestion }} @else {{ $faq->enquestion }} @endif
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse  {{ str_contains($loop->index, '0') ? 'in' : '' }}" id="accordion3_{{ $loop->index + 1 }}">
                                  <div class="panel-body">
                                     @if(App::getLocale() == 'tr') {{ $faq->transwer }} @else {{ $faq->enanswer }} @endif 
                                  </div>
                               </div>
                            </div>

                           @endforeach


                   
                         </div>
                      </div>
                      <!-- END TAB 3 -->
                       <div class="tab-pane" id="tab_4">
                         <div class="panel-group" id="accordion3">
                            

                     @foreach($digerfaqs as $faq)
                     
                            <div class="panel panel-success">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion3_{{ $loop->index + 1 }}" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle">
                                     {{ $loop->index + 1 }}.  @if(App::getLocale() == 'tr') {{ $faq->trquestion }} @else {{ $faq->enquestion }} @endif
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse   {{ str_contains($loop->index, '0') ? 'in' : '' }}" id="accordion3_{{ $loop->index + 1 }}">
                                  <div class="panel-body">
                                     @if(App::getLocale() == 'tr') {{ $faq->transwer }} @else {{ $faq->enanswer }} @endif 
                                  </div>
                               </div>
                            </div>
                           
                           
                          @endforeach
                        
                         </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
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
    <script src="/../../user/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/../../user/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/../../user/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

    <script src="/../../user/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection

