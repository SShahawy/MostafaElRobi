<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>Suprimo</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="stylesheet/all.css">
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/shortcodes.css">
    <link rel="stylesheet" href="stylesheet/responsive.css">
    <link rel="stylesheet" href="stylesheet/flexslider.css">
    <link rel="stylesheet" href="rev-slider/css/layers.css">
    <link rel="stylesheet" href="rev-slider/css/navigation.css">
    <link rel="stylesheet" href="rev-slider/css/settings.css">


</head>

<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <style>
        /* body {
          font-family: 'Source Sans Pro', sans-serif;
        } */
        .img-behind-hire {
          background: linear-gradient( rgba(208,179,143,0.65), rgba(168,140,114,0.65)), url("images/transparent-head/faq.jpg");
          background-size: cover;
background-position: center;
background-repeat: none;
background-attachment: fixed;
          height: 60vh;
        }
       .second {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: white;
          text-align: center;
        }
        #span {
          text-transform: uppercase;
          margin: 0;
          font-size: 15px;
          white-space: nowrap;
        } 
      </style>
    @include('pages.header')
    <div class="contact clearfix img-behind-hire">
        <div class="container second">

                <div class="title-section text-center">

                       <span style="font-size: 45px;text-shadow:2px 2px 3px black;">اسئله شائعه</span>
            </div>
        
    </div>
    </div><!-- contact -->
    <div class="faq">
        <div class="container">
            {{-- <div class="title-section text-center">
                <h3 class="flat-title">اسئله شائعه</h3>
                 <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p> 
            </div> --}}
            <div class="flat-tabs flat-tabs-1">
                <div class="content-tab">
                    <div class="content-inner">
                        
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="questions-content">
                                    <h4 class="item-qs"  style="text-align: right;">
                                        <a href="#">ما هي اهم انواع الشركات؟</a>
                                    </h4><br>
                                    <div class="item-reply">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7gmQYtqdx3k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="questions-content">
                                    <h4 class="item-qs" style="text-align: right;">
                                        <a href="#">ما هي اهم 8 نصائح قبل بدل بتأسيس الشركه؟</a>
                                    </h4><br>
                                    <div class="item-reply">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/6WIDSf8Vx04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div><!-- faq -->

    <!-- footer -->
    
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script> --}}
    <script src="javascript/jquery-isotope.js"></script>
    <script src="javascript/equalize.min.js"></script>
    <script src="javascript/jquery-countTo.js"></script>
    <script src="javascript/flex-slider.min.js"></script>
    <script src="javascript/main.js"></script>

    <!-- slider -->
    <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="javascript/rev-slider.js"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>
</body>
@include('pages.footer')
</html>