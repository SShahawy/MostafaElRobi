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
                    <h3 class="flat-title">تواصل بنا</h3>
                    <p class="sub-title">مصطفي الروبي | محامون . مستشارون</p>
                </div>
                <div class="contact-options">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="content-info">
                            <h4 class="name">العنوان</h4>
                            <div class="info-wrap">
                                <p>170 طريق الحرية باب شرقي الأسكندرية</p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box border-both-sides">
                        <div class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="content-info">
                            <h4 class="name">ارقام التواصل</h4>
                            <div class="info-wrap">
                                <p ><a href="tel:201278823809">+201278823809</a></p>
                                <p ><a href="tel:2035902759">+2035902759</a></p>
                                    <p ><a href="tel:201272653225">+201272653225</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="content-info" >
                            <h4 class="name">الإميل</h4>
                            <div class="info-wrap">
                                <p>info@mostafaelroby.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- contact -->
    <div class="write-something" >
        <div class="container">
            <div class="title-section text-center">
                <h3 class="flat-title">احجز استشاره</h3>
            </div>
            <form action="#" method="post" class="form-message-pct">
                <div class="text-wrap d-md-flex clearfix">
                    <div class="wr-sm">
                        <label for="" style="float:right;color:#A15035">الاَسم</label>
                        <input type="text" style="text-align: right;color:#3C2118;" class="your-name" placeholder="اسمك بالكامل">
                    </div>
                    <div class="wr-sm">
                        <label for="" style="float:right;color:#A15035">إيميل</label>
                        <input type="text" style="text-align: right;color:#3C2118" class="your-email" placeholder="إيميل">
                    </div>
                    <div class="wr-sm">
                        <label for="" style="float:right;color:#A15035">رقم التليفون</label>
                        <input type="text" style="text-align: right;color:#3C2118;" class="your-phone" placeholder="رقم التليفون">
                    </div>
                    <div class="wr-sm">
                        <label for="" style="float:right;color:#A15035">تاريخ الأستشاره</label>
                        <input type="date" class="your-email">
                    </div>
                </div>
                <textarea name="comment" style="text-align: right;color:#3C2118;" id="comment-message" rows="8" placeholder="تفاصيل"></textarea>
                <div class="fl-btn">
                    <button class="hvr-vertical">احجز الاَن</button>
                </div>
            </form>
        </div>
    </div><!-- write-something -->

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
@include('pages.footer')
</html>