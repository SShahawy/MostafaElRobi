@include('pages.header')
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-221597249-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-221597249-1');
</script>
</head>


<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    @if(session()->has('message'))
    <script>
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-warning',
  },
  buttonsStyling: false
})
swalWithBootstrapButtons.fire({
        html:
        '<b>تم إرسال الطلب , سيتم التواصل</b>',
          showConfirmButton:true,

          confirmButtonText:'<i style="padding:10px 50px;" class="btn-lg btn-warning">!تم</i> ',
          
      });
        </script>
    @endif



        <style>
          /* body {
            font-family: 'Source Sans Pro', sans-serif;
          } */
          .img-behind-hire {
            background:  url("images/head/15.png");
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

                <div class="title-section text-center ">

                       <div class="scene" dir="rtl">

                        <div class="current">
                            <div class="cube">
                                <div class="face">التوظيف و التدريب</div>
                            </div>
                          
                        </div>
                    
                        <div class="next">
                            <div class="cube">
                                <div class="face">محامون</div>
                            </div>
                            <div class="cube">
                                <div class="face">.</div>
                            </div>
                            <div class="cube">
                                <div class="face">مستشارون</div>
                            </div>
                           
                        </div>
                        
                    </div>
            </div>
        
    </div>
    </div><!-- contact -->
    <hr>
    <div class="write-something" >
        <div class="container">
            <div class="title-section text-center">
                <h3 class="title texts" >مصطفي الروبي | محامون . مستشارون</h3>
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
                </div>
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
                    </div>

                    <div class="wr-sm">
                        <label for="" style="float:right;"><span style="color:red;font-weight:bold;">*</span>رقم التليفون</label>
                        <input type="text" name="phone" style="text-align: right;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="your-phone" placeholder="رقم التليفون">
                    </div>
                </div>
                <textarea name="details" style="text-align: right;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="comment-message" rows="8" placeholder="تفاصيل"></textarea>
                <div class="text-wrap d-md-flex clearfix " style="margin-left: 30%;">
                    <span class="all-buttons btn btn-warning" style="display:block;background-color:transparent;border:1px #AA5F44 solid;color:#AA5F44;" onclick="document.getElementById('getFile').click()">ارفع السيره الزاتيه</span>
  <input type='file' id="getFile" style="display:none">

  <div class="fl-btn">

    <input type="submit"  class="all-buttons hvr-vertical" style="background-color: #AA5F44" value="قدم الاَن">
</div> 




                </div>
                
                
            </form>
        </div>
    </div><!-- write-something -->

    
    
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    
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