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

    @include('pages.header')

    <div class="contact clearfix">
        <div class="container">
            <div class="contact-us">
                <div class="title-section text-center">
                    <h3 class="flat-title">Connect With Us</h3>
                    <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p>
                </div>
                <div class="contact-options">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="content-info">
                            <h4 class="name">Address</h4>
                            <div class="info-wrap">
                                <p>20 Bardeshi, Amin Bazar Savar, Dhaka</p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box border-both-sides">
                        <div class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="content-info">
                            <h4 class="name">Phone Number</h4>
                            <div class="info-wrap">
                                <p>+234 567 8901</p>
                                <p>+234 567 8902</p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="content-info">
                            <h4 class="name">Email Address</h4>
                            <div class="info-wrap">
                                <p>Hello@finelaw.com</p>
                                <p>sales@finelaw.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- contact -->
    <div class="write-something">
        <div class="container">
            <div class="title-section text-center">
                <h3 class="flat-title">Write Us Something</h3>
            </div>
            <form action="#" class="form-message-pct">
                <div class="text-wrap d-md-flex clearfix">
                    <div class="wr-sm">
                        <input type="text" class="your-name" placeholder="Your name">
                    </div>
                    <div class="wr-sm">
                        <input type="text" class="your-email" placeholder="Your email">
                    </div>
                    <div class="wr-sm">
                        <input type="text" class="your-phone" placeholder="Your phone">
                    </div>
                </div>
                <textarea name="comment" id="comment-message" rows="8" placeholder="Write your message here"></textarea>
                <div class="fl-btn">
                    <button class="hvr-vertical">send now</button>
                </div>
            </form>
        </div>
    </div><!-- write-something -->
    <div class="flat-map">
        
    </div><!-- flat-map -->
    <footer id="footer" class="footer">
        
        <a id="scroll-top" class="show"></a>
    </footer><!-- footer -->
    
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
</html>