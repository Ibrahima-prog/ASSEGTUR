@extends('user/app2')
{{-- @include('user/layouts/head2') --}}
@section('mainBody')

    <body
        class="
      home
      page-template-default page page-id-25
      tribe-no-js
      material
      wpb-js-composer
      js-comp-ver-6.4.1
      vc_responsive
    "
        data-footer-reveal="false" data-footer-reveal-shadow="none" data-header-format="default" data-body-border="off"
        data-boxed-style data-header-breakpoint="1000" data-dropdown-style="minimal" data-cae="easeOutCubic" data-cad="750"
        data-megamenu-width="contained" data-aie="none" data-ls="fancybox" data-apte="standard" data-hhun="0"
        data-fancy-form-rcs="default" data-form-style="default" data-form-submit="regular" data-is="minimal"
        data-button-style="default" data-user-account-button="false" data-flex-cols="true" data-col-gap="default"
        data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="true" data-ajax-transitions="false"
        data-full-width-header="false" data-slide-out-widget-area="true"
        data-slide-out-widget-area-style="slide-out-from-right" data-user-set-ocm="off" data-loading-animation="none"
        data-bg-header="true" data-responsive="1" data-ext-responsive="true" data-header-resize="0"
        data-header-color="custom" data-cart="false" data-remove-m-parallax data-remove-m-video-bgs data-m-animate="0"
        data-force-header-trans-color="light" data-smooth-scrolling="0" data-permanent-transparent="false">
        <script type="text/javascript">
            if (
                navigator.userAgent.match(
                    /(Android|iPod|iPhone|iPad|BlackBerry|IEMobile|Opera Mini)/
                )
            ) {
                document.body.className += " using-mobile-browser ";
            }
        </script>
        <div class="ocm-effect-wrap">
            <div class="ocm-effect-wrap-inner">
                <div id="header-space" data-header-mobile-fixed="1"></div>

                <div id="header-outer" data-has-menu="true" data-has-buttons="no" data-header-button_style="default"
                    data-using-pr-menu="false" data-mobile-fixed="1" data-ptnm="false" data-lhe="animated_underline"
                    data-user-set-bg="#222222" data-format="default" data-permanent-transparent="false" data-megamenu-rt="0"
                    data-remove-fixed="0" data-header-resize="0" data-cart="false" data-transparency-option="1"
                    data-box-shadow="large" data-shrink-num="6" data-using-secondary="1" data-using-logo="1"
                    data-logo-height="30" data-m-logo-height="24" data-padding="28" data-full-width="false"
                    data-condense="false" data-transparent-header="true" data-transparent-shadow-helper="false"
                    data-remove-border="true" class="transparent">
                    <div id="header-secondary-outer" class="default" data-mobile="default" data-remove-fixed="0"
                        data-lhe="animated_underline" data-secondary-text="false" data-full-width="false"
                        data-mobile-fixed="1" data-permanent-transparent="false">
                        <div class="container">
                            <nav>
                                <ul class="sf-menu">
                                    <li id="menu-item-270"
                                        class="
                    menu-item
                    menu-item-type-post_type
                    menu-item-object-page menu-item-270
                  ">
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div id="search-outer" class="nectar">
                        <div id="search">
                            <div class="container">
                                <div id="search-box">
                                    <div class="inner-wrap">
                                        <div class="col span_12">
                                            <form role="search" action="https://abundant.org/" method="GET">
                                                <input type="text" name="s" value placeholder="Search" />

                                                <span>Hit enter to search or ESC to close</span>
                                            </form>
                                        </div>
                                        <!--/span_12-->
                                    </div>
                                    <!--/inner-wrap-->
                                </div>
                                <!--/search-box-->
                                <div id="close">
                                    <a href="#">
                                        <span class="close-wrap">
                                            <span class="close-line close-line1"></span>
                                            <span class="close-line close-line2"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--/container-->
                        </div>
                        <!--/search-->
                    </div>
                    <!--/search-outer-->

                    {{-- <header id="top">
                        <div class="container">
                            <div class="row">
                                <div class="col span_3">
                                    <a id="logo" href="/" data-supplied-ml-starting-dark="false"
                                        data-supplied-ml-starting="false" data-supplied-ml="false">
                                        <img class="stnd default-logo dark-version" alt="Abundant Church"
                                            src="images/images/logo181020210327.png"
                                            srcset="images/images/logo181020210327.png 1x, images/images/logo181020210327.png 2x" /><img
                                            class="starting-logo default-logo" alt="Abundant Church"
                                            src="images/images/logo181020210327.png"
                                            srcset="images/images/logo181020210327.png 1x, images/images/logo181020210327.png 2x" />
                                    </a>
                                </div>
                                <!--/span_3-->

                                <div class="col span_9 col_last">
                                    <div class="
                      slide-out-widget-area-toggle
                      mobile-icon
                      slide-out-from-right
                        "
                                        data-custom-color="false" data-icon-animation="simple-transform">
                                        <div>
                                            <a href="#sidewidgetarea" aria-label="Navigation Menu" aria-expanded="false"
                                                class="closed">
                                                <span aria-hidden="true">
                                                    <i class="lines-button x2"> <i class="lines"></i> </i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <nav>
                                        <ul class="sf-menu">

                                            <li id="menu-item-270"
                                                class="
                      menu-item
                      menu-item-type-post_type
                      menu-item-object-page menu-item-270
                        ">
                                                <a href="about.html">À Propos</a>
                                            </li>

                                            <li id="menu-item-169"
                                                class="
                      menu-item
                      menu-item-type-custom
                      menu-item-object-custom
                      menu-item-169
                        ">
                                                <a target="_blank" rel="noopener"
                                                    href="https://shop.abundant.org">Gallery</a>
                                            </li>

                                            <li id="menu-item-168"
                                                class="
                      menu-item
                      menu-item-type-post_type
                      menu-item-object-page menu-item-168
                        ">
                                                <a href="events.html">Activités</a>
                                            </li>
                                            <li id="menu-item-41"
                                                class="
                          menu-item
                          menu-item-type-post_type
                          menu-item-object-page menu-item-41
                        ">
                                                <a href="https://abundant.org/watch-connect/">Travaux Académiques</a>
                                            </li>
                                            <li id="menu-item-246"
                                                class="
                      menu-item
                      menu-item-type-post_type
                      menu-item-object-page menu-item-246
                        ">
                                                <a href="https://abundant.org/10things/">Journal</a>
                                            </li>

                                            <li id="menu-item-50"
                                                class="
                        menu-item
                        menu-item-type-post_type
                        menu-item-object-page menu-item-50
                        ">
                                                <a href="https://abundant.org/get-involved/">S'enregistrer</a>
                                            </li>


                                            <li id="menu-item-278"
                                                class="
                          menu-item
                          menu-item-type-post_type
                          menu-item-object-page menu-item-278
                        ">
                                                <a href="/conctact-us">Contact</a>
                                            </li>
                                        </ul>

                                        <ul class="buttons sf-menu" data-user-set-ocm="off"></ul>
                                    </nav>
                                </div>
                                <!--/span_9-->
                            </div>
                            <!--/row-->
                        </div>
                        <!--/container-->
                    </header> --}}
                </div>

                <div id="ajax-content-wrap">
                    <div class="container-wrap">
                        <div class="container main-content">
                            <div class="row">
                                <div id="fws_616a05087e9d9" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    top-level
                    full-width-section
                    standard_section
                  "
                                    data-using-ctc="true" style="padding-top: 0px; padding-bottom: 0px; color: #ffffff">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="true">
                                        <div id></div>
                                        <div class="inner-wrap using-image">
                                            <div class="row-bg using-image using-bg-color" style="
                              background-image: url();
                              background-position: center center;
                              background-repeat: no-repeat;
                              background-color: #333333;
                            "></div>
                                        </div>
                                        <div class="row-bg-overlay" style="background-color: #000000; opacity: 0.5"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 custom left">
                                        <div class="
                        vc_col-sm-12
                        headerminimumheight
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        centered-text
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 150px" class="divider"></div>
                                                    </div>
                                                    <div id="fws_616a05087f882" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-12
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h1 style="">
                                                                                    ASSOCIATION<br />
                                                                                    DES ETUDIANTS<br />
                                                                                    GUINEENS EN TURQUIE
                                                                                </h1>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 20px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <a class="
                                        nectar-button
                                        jumbo
                                        regular
                                        accent-color
                                        regular-button
                                        watchnowbutton
                                      "
                                                                            style="background-color: #000000"
                                                                            href="/association/about-us" data-color-override="#000000"
                                                                            data-hover-color-override="false"
                                                                            data-hover-text-color-override="#fff"><span>À
                                                                                Propos De Nous</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a05087fe1a" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-section
                    standard_section
                  "
                                    data-using-ctc="true" style="padding-top: 0px; padding-bottom: 0px; color: #8cd0d5">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #732afb"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 custom left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-sm vc_hidden-xs
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                    <div id="fws_616a050880201" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-4
                                  rowborderright
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  padding-4-percent
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="right" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_raw_code
                                        wpb_content_element
                                        wpb_raw_html
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <style>
                                                                                    div.parent {
                                                                                        position: relative;
                                                                                        height: 250px;
                                                                                    }

                                                                                    div.absolute {
                                                                                        position: absolute;
                                                                                        width: 50%;
                                                                                        bottom: 10px;
                                                                                    }

                                                                                </style>

                                                                                <div class="parent">
                                                                                    <span style="
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                ">Tous Pour Un, Un Pour Tous</span>
                                                                                    <br />
                                                                                    <br />
                                                                                    <p>
                                                                                        En tant qu'étudiant guineen vivant à
                                                                                        l'étranger, nous devons toujours
                                                                                        nous
                                                                                        entraider. Si tu as des difficultés,
                                                                                        n'hésites pas à contactez les
                                                                                        membres du bureau.

                                                                                    </p>
                                                                                    <div class="absolute">
                                                                                        <a href="/conctact-us"
                                                                                            style="
                                                    color: #8cd0d5;
                                                    font-family: gta-compressed-bold;
                                                    font-size: 20px;
                                                  ">Contact →</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="
                                  vc_col-sm-4
                                  rowborderright
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  padding-4-percent
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="left-right" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_raw_code
                                        wpb_content_element
                                        wpb_raw_html
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <style>
                                                                                    div.parent {
                                                                                        position: relative;
                                                                                        height: 250px;
                                                                                    }

                                                                                    div.absolute {
                                                                                        position: absolute;
                                                                                        width: 50%;
                                                                                        bottom: 10px;
                                                                                    }

                                                                                </style>

                                                                                <div class="parent">
                                                                                    <span style="
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                ">Nous Sommes Une Communauté</span>
                                                                                    <br />
                                                                                    <br />
                                                                                    <p>
                                                                                        L'ASSEGTUR existe afin de nous
                                                                                        rassembler
                                                                                        et d'accompagner chacun des
                                                                                        étudiants guinéens
                                                                                        vivant en Turquie. Enregistres toi,
                                                                                        afin
                                                                                        que nous puissions plus facilement
                                                                                        te joindre.
                                                                                    </p>
                                                                                    <div class="absolute">
                                                                                        <a href="/association/register"
                                                                                            style="
                                                    color: #8cd0d5;
                                                    font-family: gta-compressed-bold;
                                                    font-size: 20px;
                                                  ">S'enregistrer →</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="
                                  vc_col-sm-4
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  padding-4-percent
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="left-right" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_raw_code
                                        wpb_content_element
                                        wpb_raw_html
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <style>
                                                                                    div.parent {
                                                                                        position: relative;
                                                                                        height: 250px;
                                                                                    }

                                                                                    div.absolute {
                                                                                        position: absolute;
                                                                                        width: 50%;
                                                                                        bottom: 10px;
                                                                                    }

                                                                                </style>

                                                                                <div class="parent">
                                                                                    <span style="
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                ">Activités</span>
                                                                                    <br />
                                                                                    <br />
                                                                                    <p>
                                                                                        Des activités sont organisés très
                                                                                        souvent par le bureau de l'ASSEGTUR.
                                                                                        Nous partageons les informations et
                                                                                        les détails de ces activités avec
                                                                                        tous les
                                                                                        membres.
                                                                                    </p>
                                                                                    <div class="absolute">
                                                                                        <a href="/activities_and_gallery"
                                                                                            style="
                                                    color: #8cd0d5;
                                                    font-family: gta-compressed-bold;
                                                    font-size: 20px;
                                                  ">Activités →</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a05088072f" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-section
                    standard_section
                  "
                                    data-using-ctc="true" style="padding-top: 0px; padding-bottom: 0px; color: #8cd0d5">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #732afb"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 custom left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-lg vc_hidden-md
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                    <div id="fws_616a050880862" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-12
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_raw_code
                                        wpb_content_element
                                        wpb_raw_html
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <span style="
                                                font-family: gta-compressed-bold;
                                                font-size: 24px;
                                              ">Tous Pour Un, Un Pour Tous</span>
                                                                                <br />
                                                                                <br />
                                                                                <p>
                                                                                    En tant qu'étudiant guineen vivant à
                                                                                    l'étranger, nous devons toujours nous
                                                                                    entraider. Si tu as des difficultés,
                                                                                    n'hésites pas à contactez les membres du
                                                                                    bureau.
                                                                                </p>
                                                                                <br />
                                                                                <a href="/conctact-us"
                                                                                    style="
                                                color: #8cd0d5;
                                                font-family: gta-compressed-bold;
                                                font-size: 20px;
                                              ">Contact →</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="
                                              margin-top: 40px;
                                              height: 2px;
                                              margin-bottom: 40px;
                                            " data-width="100%" data-animate="yes" data-animation-delay
                                                                                data-color="extra-color-2"
                                                                                class="divider-border"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_raw_code
                                        wpb_content_element
                                        wpb_raw_html
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <span style="
                                                font-family: gta-compressed-bold;
                                                font-size: 24px;
                                              ">Nous Sommes Une Communauté</span>
                                                                                <br />
                                                                                <br />
                                                                                <p>
                                                                                    L'ASSEGTUR existe afin de nous
                                                                                    rassembler
                                                                                    et d'accompagner chacun des étudiants
                                                                                    guinéens
                                                                                    vivant en Turquie. Enregistres toi, afin
                                                                                    que nous puissions plus facilement te
                                                                                    joindre.
                                                                                </p>
                                                                                <a href="/association/register"
                                                                                    style="
                                                color: #8cd0d5;
                                                font-family: gta-compressed-bold;
                                                font-size: 20px;
                                              ">S'enregistrer →</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="
                                              margin-top: 40px;
                                              height: 2px;
                                              margin-bottom: 40px;
                                            " data-width="100%" data-animate="yes" data-animation-delay
                                                                                data-color="extra-color-2"
                                                                                class="divider-border"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_raw_code
                                        wpb_content_element
                                        wpb_raw_html
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <span style="
                                                font-family: gta-compressed-bold;
                                                font-size: 24px;
                                              ">Activités</span>
                                                                                <br />
                                                                                <br />
                                                                                <p>
                                                                                    Des activités sont organisés très
                                                                                    souvent par le bureau de l'ASSEGTUR.
                                                                                    Nous partageons les informations et les
                                                                                    détails de ces activités avec tous les
                                                                                    membres.
                                                                                </p>
                                                                                <a href="/activities_and_gallery" style="
                                                color: #8cd0d5;
                                                font-family: gta-compressed-bold;
                                                font-size: 20px;
                                              ">Activités →</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a050880bf5" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-content
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #003333"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-sm vc_hidden-xs
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_616a050880d97" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              vc_row-o-equal-height vc_row-flex
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div style
                                                                class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-using-bg="true" data-t-w-inherits="default"
                                                                data-bg-cover="true" data-padding-pos="all"
                                                                data-has-bg-color="false" data-bg-color data-bg-opacity="1"
                                                                data-hover-bg data-hover-bg-opacity="1" data-animation
                                                                data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-image-bg-wrap"
                                                                        data-bg-pos="center center"
                                                                        data-bg-animation="none">
                                                                        <div class="inner-wrap">
                                                                            <div class="column-image-bg" style="
                                              background-image: url(&#x27;images/images/191020211329.jpg&#x27;);
                                            "></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>

                                                            <div class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  padding-7-percent
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="left" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div class="img-with-aniamtion-wrap right"
                                                                            data-max-width="100%"
                                                                            data-max-width-mobile="default"
                                                                            data-border-radius="none" data-shadow="none"
                                                                            data-animation="none"
                                                                            style="margin-bottom: -80px">
                                                                            <div class="inner">
                                                                                <div class="hover-wrap"
                                                                                    data-hover-animation="none">
                                                                                    <div class="hover-wrap-inner">
                                                                                        <img class="
                                                img-with-animation
                                                skip-lazy
                                              "
                                                                                            data-delay="0" height="264"
                                                                                            width="264"
                                                                                            data-animation="none"
                                                                                            src="images/images/get_involved_corner.png"
                                                                                            alt srcset="
                                                    images/images/get_involved_corner.png         264w,
                                                    images/images/get_involved_corner-150x150.png 150w,
                                                    images/images/get_involved_corner.png 100w,
                                                    images/images/get_involved_corner-140x140.png 140w
                                                  " sizes="(min-width: 1450px) 75vw, (min-width: 1000px) 85vw, 100vw" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #8cd0d5">
                                                                                    LE JOURNAL<br />
                                                                                    ASSEGTUR
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="color: #8cd0d5">
                                                                                    Pour Toutes les dernières nouvelles
                                                                                    concernant
                                                                                    notre belle association. <br> Si vous
                                                                                    avez manqué une
                                                                                    information importante, vous pourrez la
                                                                                    relire ici.
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 30px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <a style="
                                                  color: #8cd0d5;
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                " href="/news">Le Journal →</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 160px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a050881afa" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-section
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #003333"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-lg vc_hidden-md
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                    <div id="fws_616a050881cd3" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              vc_row-o-equal-height vc_row-flex
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-12
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #8cd0d5">
                                                                                    LE JOURNAL<br />
                                                                                    ASSEGTUR
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="color: #8cd0d5">
                                                                                    Pour Toutes les dernières nouvelles
                                                                                    concernant
                                                                                    notre belle association. <br> Si vous
                                                                                    avez manqué une
                                                                                    information importante, vous pourrez la
                                                                                    relire ici.
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 30px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <a style="
                                                  color: #8cd0d5;
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                " href="/news">Le Journal →</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a05088201c" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-section
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #e0e5d9"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div class="
                        vc_col-sm-12
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                    <div id="fws_616a05088213f" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              standard_section
                              vc_hidden-sm vc_hidden-xs
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #222222">
                                                                                    PROCHAINE ACTIVITÉ
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  padding-7-percent
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="left-right" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="color: #222222">
                                                                                    La prochaine activité progammé <br>
                                                                                    par l'ASSEGTUR.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="fws_616a05088240c" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              standard_section
                              vc_hidden-lg vc_hidden-md
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-12
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #222222">
                                                                                    PROCHAINE ACTIVITÉ
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="color: #222222">
                                                                                    La prochaine activité progammé <br>
                                                                                    par l'ASSEGTUR.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a0508825ff" data-column-margin="none" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-section
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #e0e5d9"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div style="margin-top: -40px"
                                            class="
                        vc_col-sm-12
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        neg-marg
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="
                              nectar-flickity
                              not-initialized
                              nectar-carousel
                            "
                                                        data-control-color="default" data-overflow="visible"
                                                        data-r-bottom-total data-drag-scale data-wrap="no-wrap"
                                                        data-spacing="default" data-controls="default"
                                                        data-pagination-alignment="default" data-adaptive-height
                                                        data-border-radius="none" data-column-border data-column-padding="0"
                                                        data-format="default" data-autoplay data-autoplay-dur="5000"
                                                        data-control-style="material_pagination" data-desktop-columns="2"
                                                        data-small-desktop-columns="1" data-tablet-columns="1"
                                                        data-column-color>
                                                        <div class="flickity-viewport">
                                                            <div class="flickity-slider">
                                                                <div class="cell">
                                                                    <div class="inner-wrap-outer">
                                                                        <div class="inner-wrap">
                                                                            <div id="fws_616a050882a80" data-midnight
                                                                                data-column-margin="default"
                                                                                class="
                                          wpb_row
                                          vc_row-fluid vc_row
                                          inner_row
                                          standard_section
                                        "
                                                                                style="
                                              padding-top: 0px;
                                              padding-bottom: 0px;
                                            ">
                                                                                <div class="row-bg-wrap">
                                                                                    <div class="row-bg"></div>
                                                                                </div>
                                                                                <div
                                                                                    class="
                                            row_col_wrap_12_inner
                                            col
                                            span_12
                                            left
                                          ">
                                                                                    <div class="
                                              vc_col-sm-12
                                              wpb_column
                                              column_container
                                              vc_column_container
                                              col
                                              child_column
                                              no-extra-padding
                                              inherit_tablet inherit_phone
                                            "
                                                                                        data-t-w-inherits="default"
                                                                                        data-bg-cover data-padding-pos="all"
                                                                                        data-has-bg-color="false"
                                                                                        data-bg-color data-bg-opacity="1"
                                                                                        data-hover-bg
                                                                                        data-hover-bg-opacity="1"
                                                                                        data-animation data-delay="0">
                                                                                        <div class="vc_column-inner">
                                                                                            <div class="column-bg-overlay-wrap"
                                                                                                data-bg-animation="none">
                                                                                                <div
                                                                                                    class="column-bg-overlay">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="wpb_wrapper">
                                                                                                <div class="
                                                    img-with-aniamtion-wrap
                                                  "
                                                                                                    data-max-width="100%"
                                                                                                    data-max-width-mobile="default"
                                                                                                    data-border-radius="none"
                                                                                                    data-shadow="medium_depth"
                                                                                                    data-animation="none">
                                                                                                    <div
                                                                                                        class="inner">
                                                                                                        <div class="hover-wrap"
                                                                                                            data-hover-animation="color-overlay" style="
                                                                                                            display: block;
                                                                                                            margin-left: auto;
                                                                                                            margin-right: auto;
                                                                                                            /* width: 40%; */
                                                                                                        ">
                                                                                                            <div class="color-overlay"
                                                                                                                style="
                                                              background-color: #000000;
                                                            "></div>
                                                                                                            <div
                                                                                                                class="hover-wrap-inner" style="
                                                                                                                display: block;
                                                                                                                margin-left: auto;
                                                                                                                margin-right: auto;
                                                                                                                /* width: 40%; */
                                                                                                            ">
                                                                                                                <a href="/activities_and_gallery_summary/{{$activities->first()->slug}}"
                                                                                                                    target=""
                                                                                                                    class>
                                                                                                                    <img class="
                                                              img-with-animation
                                                              skip-lazy
                                                            "
                                                                                                                        data-delay="0"
                                                                                                                        height="1080"
                                                                                                                        width="1920"
                                                                                                                        data-animation="none"
                                                                                                                        src="../../../etkinlikFotograflari/{{$activities->first()->image}}"
                                                                                                                        alt
                                                                                                                        srcset="
                                                                  ../../../etkinlikFotograflari/{{$activities->first()->image}}          1920w,
                                                                  ../../../etkinlikFotograflari/{{$activities->first()->image}}   300w,
                                                                  ../../../etkinlikFotograflari/{{$activities->first()->image}} 1024w,
                                                                  ../../../etkinlikFotograflari/{{$activities->first()->image}}   768w,
                                                                  ../../../etkinlikFotograflari/{{$activities->first()->image}} 1536w
                                                                " sizes="(min-width: 1450px) 75vw, (min-width: 1000px) 85vw, 100vw" />
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 20px" class="divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a0508831e8" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-content
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #501730"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-sm vc_hidden-xs
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_616a0508832f8" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              vc_row-o-equal-height vc_row-flex
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  padding-7-percent
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="left" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 160px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #e85640">
                                                                                    TRAVAUX<br />
                                                                                    ACADÉMIQUES
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <span style="color: #e85640">ASSEGTUR ce
                                                                                        n'est pas juste une famille<br />
                                                                                        C'est une famille
                                                                                        d'étudiants!</span>
                                                                                </p>
                                                                                <p>
                                                                                    <span style="
                                                  color: #e85640;
                                                  font-family: Gta-bold;
                                                ">Partagez vos articles!</span><br />
                                                                                    <span style="color: #e85640">Tous les
                                                                                        membres de l'ASSEGTUR <br />
                                                                                        peuvent publier leurs articles
                                                                                        ici</span>
                                                                                </p>
                                                                                <p>
                                                                                    <span style="
                                                  color: #e85640;
                                                  font-family: Gta-bold;
                                                ">Envoyez nous vos articles</span><br />
                                                                                    <span style="color: #e85640">Et faites
                                                                                        profiter notre famille<br />
                                                                                        De Vos Connaissances</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 30px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <a style="
                                                  color: #e85640;
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                " href="/academic-works/article">Travaux Académiques →</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 160px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div style
                                                                class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-using-bg="true" data-t-w-inherits="default"
                                                                data-bg-cover="true" data-padding-pos="all"
                                                                data-has-bg-color="false" data-bg-color data-bg-opacity="1"
                                                                data-hover-bg data-hover-bg-opacity="1" data-animation
                                                                data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-image-bg-wrap"
                                                                        data-bg-pos="center center"
                                                                        data-bg-animation="none">
                                                                        <div class="inner-wrap">
                                                                            <div class="column-image-bg" style="
                                              background-image: url(&#x27;images/images/191020211413.jpg&#x27;);
                                            "></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a0508839d1" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-section
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #501730"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-lg vc_hidden-md
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                    <div id="fws_616a050883b0f" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              vc_row-o-equal-height vc_row-flex
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-12
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #e85640">
                                                                                    TRAVAUX<br />
                                                                                    ACADÉMIQUES
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <span style="color: #e85640">ASSEGTUR ce
                                                                                        n'est pas juste une famille<br />
                                                                                        C'est une famille
                                                                                        d'étudiants!</span>
                                                                                </p>
                                                                                <p>
                                                                                    <span style="
                                                  color: #e85640;
                                                  font-family: Gta-bold;
                                                ">Partagez vos articles!</span><br />
                                                                                    <span style="color: #e85640">Tous les
                                                                                        membres de l'ASSEGTUR <br />
                                                                                        peuvent publier leurs articles
                                                                                        ici</span>
                                                                                </p>
                                                                                <p>
                                                                                    <span style="
                                                  color: #e85640;
                                                  font-family: Gta-bold;
                                                ">Envoyez nous vos articles</span><br />
                                                                                    <span style="color: #e85640">Et faites
                                                                                        profiter notre famille<br />
                                                                                        De Vos Connaissances</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 30px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <a style="
                                                  color: #e85640;
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                " href="/academic-works/article">Travaux Académiques →</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a050884090" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-content
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap using-image">
                                            <div class="row-bg using-image using-bg-color" style="
                              background-image: url(images/images/191020211821.jpg);
                              background-position: left top;
                              background-repeat: no-repeat;
                              background-color: #d7d0d0;
                            "></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-sm vc_hidden-xs
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div id="fws_616a0508841c6" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper"></div>
                                                                </div>
                                                            </div>

                                                            <div class="
                                  vc_col-sm-6
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  padding-7-percent
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="left" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 160px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #003333">
                                                                                    NOUS SOMMES LA <br> POUR VOUS
                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="color: #003333">
                                                                                    A travers les hauts et les bas de notre
                                                                                    vie en Turquie,<br>
                                                                                    la Communauté ASSEGTUR est là pour vous.
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 30px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <a style="
                                                  color: #003333;
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                " href="/conctact-us">Contactez Nous →</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 160px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fws_616a0508844fd" data-column-margin="default" data-midnight="dark"
                                    class="
                    wpb_row
                    vc_row-fluid vc_row
                    full-width-section
                    standard_section
                  "
                                    style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="row-bg using-bg-color" style="background-color: #d7d0d0"></div>
                                        </div>
                                        <div class="row-bg-overlay"></div>
                                    </div>
                                    <div class="row_col_wrap_12 col span_12 dark left">
                                        <div class="
                        vc_col-sm-12 vc_hidden-lg vc_hidden-md
                        wpb_column
                        column_container
                        vc_column_container
                        col
                        no-extra-padding
                        inherit_tablet inherit_phone
                      "
                                            data-t-w-inherits="default" data-bg-cover data-padding-pos="all"
                                            data-has-bg-color="false" data-bg-color data-bg-opacity="1" data-hover-bg
                                            data-hover-bg-opacity="1" data-animation data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="column-bg-overlay-wrap" data-bg-animation="none">
                                                    <div class="column-bg-overlay"></div>
                                                </div>
                                                <div class="wpb_wrapper">
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                    <div id="fws_616a050884633" data-midnight data-column-margin="default"
                                                        class="
                              wpb_row
                              vc_row-fluid vc_row
                              inner_row
                              standard_section
                            "
                                                        style="padding-top: 0px; padding-bottom: 0px">
                                                        <div class="row-bg-wrap">
                                                            <div class="row-bg"></div>
                                                        </div>
                                                        <div class="row_col_wrap_12_inner col span_12 left">
                                                            <div class="
                                  vc_col-sm-12
                                  wpb_column
                                  column_container
                                  vc_column_container
                                  col
                                  child_column
                                  no-extra-padding
                                  inherit_tablet inherit_phone
                                "
                                                                data-t-w-inherits="default" data-bg-cover
                                                                data-padding-pos="all" data-has-bg-color="false"
                                                                data-bg-color data-bg-opacity="1" data-hover-bg
                                                                data-hover-bg-opacity="1" data-animation data-delay="0">
                                                                <div class="vc_column-inner">
                                                                    <div class="column-bg-overlay-wrap"
                                                                        data-bg-animation="none">
                                                                        <div class="column-bg-overlay"></div>
                                                                    </div>
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <h2 style="color: #003333">
                                                                                    NOUS SOMMES LA <br> POUR VOUS

                                                                                </h2>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p style="color: #003333">
                                                                                    A travers les hauts et les bas de notre
                                                                                    vie en Turquie,
                                                                                    la Communauté ASSEGTUR est là pour vous.
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="divider-wrap"
                                                                            data-alignment="default">
                                                                            <div style="height: 30px"
                                                                                class="divider"></div>
                                                                        </div>
                                                                        <div
                                                                            class="
                                        wpb_text_column wpb_content_element
                                      ">
                                                                            <div class="wpb_wrapper">
                                                                                <p>
                                                                                    <a style="
                                                  color: #003333;
                                                  font-family: gta-compressed-bold;
                                                  font-size: 24px;
                                                " href="/conctact-us">Contactez Nous →</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider-wrap" data-alignment="default">
                                                        <div style="height: 80px" class="divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <!--/container-->
                    </div>
                    <!--/container-wrap-->
                @endsection
                {{-- @include('user/layouts/footer2') --}}
