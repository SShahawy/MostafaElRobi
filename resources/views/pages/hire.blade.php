<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>مصطفي الروبي | محامون . مستشارون</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo/logo.png">
    <link rel="icon" type="images/logo/logo.png" sizes="32x32" href="images/logo/logo.png">
    <link rel="icon" type="images/logo/logo.png" sizes="16x16" href="images/logo/logo.png">
    <link rel="manifest" href="images/logo/logo.png">
    
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




        <style>
          /* body {
            font-family: 'Source Sans Pro', sans-serif;
          } */
          .img-behind-hire {
            background: linear-gradient( rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url("images/featured-banner/15.png");
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


    <div class="contact clearfix img-behind-hire">
        <div class="container second">

                <div class="title-section text-center">

                       <span> التوظيف و التدريب</span>
            </div>
        
    </div>
    </div><!-- contact -->
    <hr>
    <div class="write-something" >
        <div class="container">
            <div class="title-section text-center">
                <h3 class="flat-title" style="color: #A95D43;">مصطفي الروبي | محامون . مستشارون</h3>
                <br>
                <span id="">
                    نتطلع دائماًً للبحث عن الاشخاص الطموحين الذين يتميزون بالتفاني والجدية بالعمل ويبحثون عن وظائف في بيئة مليئة بالتحديات ، ونرحب دوماً بتوظيف الاشخاص ذوي الإسهامات والإنتاجية العالية.
                        <br>
                        <b>يمكنك إرسال السيرة الذاتية مرفقاً بها الشهادات الدراسية (والخبرات العملية في حال توفرها) و سنتواصل معك في اقرب وقت ممكن عند توفر الفرص .</b>
                    
                </span>
            </div>
            <form action="{{ route('tawzeef') }}" method="post" class="form-message-pct">
                @csrf
                <div class="text-wrap d-md-flex clearfix">
                    <div class="wr-sm">
                        <label for="" style="float:right;"><span style="color:red;font-weight:bold;">*</span>الاَسم</label>
                        <input type="text" name="name" style="text-align: right;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="your-name" placeholder="اسمك بالكامل">
                    </div>
                </div><br>
                <div class="text-wrap d-md-flex clearfix">
                    <div class="wr-sm">
                        <label for="" style="float:right;"><span style="color:red;font-weight:bold;">*</span>البريد الإلكتروني</label>
                        <input type="text" name="email" style="text-align: right;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="your-email" placeholder="إيميل">
                    </div>
                </div>
                    <div class="text-wrap d-md-flex clearfix">
                    <div class="wr-sm">
                        <label for="" style="float:right; "><span style="color:red;font-weight:bold;">*</span>النوع</label>
                        <ul class="flat-filter-isotype">
                            <select name="gender" id="" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <li><option value="Male">ذكر</option> </li>
                            <li><option value="Female">انثي</option></li>
                        </select>
                        </ul>
                        {{-- <input type="text" style="text-align: right;" class="your-email" placeholder="إميل"> --}}
                    </div>

                    <div class="wr-sm">
                        <label for="" style="float:right;"><span style="color:red;font-weight:bold;">*</span>رقم التليفون</label>
                        <input type="text" name="phone" style="text-align: right;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="your-phone" placeholder="رقم التليفون">
                    </div>
                </div>
                <textarea name="details" style="text-align: right;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="comment-message" rows="8" placeholder="تفاصيل"></textarea>
                <div class="text-wrap d-md-flex clearfix">
                    <span style="color:red;font-weight:bold;">*&emsp;</span> <input type="file" class="your-phone">
                </div>
                <div class="fl-btn">

                    <input type="submit"  class="hvr-vertical" style="background-color: #AA5F44" value="احجز الاَن">
                </div> 
                
            </form>
        </div>
    </div><!-- write-something -->

    
    
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