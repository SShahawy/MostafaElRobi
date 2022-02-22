@include('pages.header')

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
        '<b>تم حجز الاستشاره, سيتم التواصل</b>',
          showConfirmButton:true,

          confirmButtonText:'<i style="padding:10px 50px;" class="btn-lg btn-warning">تم!</i> ',
          
      });
        </script>
    @endif

    <style>
        /* body {
          font-family: 'Source Sans Pro', sans-serif;
        } */
        .img-behind-hire {
          background: linear-gradient( rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url("images/featured-banner/contact.jpg");
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

                     <span >احجز استشاره</span>
          </div>
      
  </div>
  </div><!-- contact -->

    <div class="contact clearfix">
        <div class="container">
            <div class="contact-us">
                <div class="title-section text-center">
                    <h3 class="flat-title">مصطفي الروبي | محامون . مستشارون</h3>
                 
                </div>
                <div class="contact-options">
                    <div class="icon-box ">
                        <div class="icon">
                           <img src="images/icon/icon 4.png" style="width:80%">
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
                            <img src="images/icon/icon 5.png">
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
                            <img src="images/icon/icon 3.png" style="height: 50px;">
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
    <div class="write-something" dir="rtl";>
        <div class="container"    >
            <div class="title-section text-center ">
                <h2 class="flat-title">احجز استشاره</h2>
            </div>
            <form action="{{ route('estshara') }}" method="post" class="form-message-pct">
                @csrf
                <div class="text-wrap d-md-flex clearfix">
                    <div class="wr-sm">
                        <label for="" style="float:right;color:#A15035">الاَسم</label>
                        <input required type="text" name="name" style="" class="your-name" placeholder="اسمك بالكامل">
                    </div>
                    <div class="wr-sm">
                        <label for="" style="float:right;color:#A15035">إيميل</label>
                        <input required type="email" name="email" style="" class="your-email" placeholder="إيميل">
                    </div>
                    <div class="wr-sm">
                        <label for="" style="float:right;color:#A15035">رقم التليفون</label>
                        <input required type="text" name="phone" style="" class="your-phone" placeholder="رقم التليفون">
                    </div>
                    <div class="wr-sm">
                        <label for="date" style="float:right;color:#A15035">تاريخ الأستشاره</label>
                        <input required type="date" style="" name="date" class="your-name">
                    </div>
                </div>
                <textarea  name="details" required  id="comment-message" rows="8" placeholder="تفاصيل"></textarea>
                {{-- 
                    <button class="hvr-vertical">احجز الاَن</button>
                --}}
                <div class="fl-btn">
                    
                <input type="submit"  class="hvr-vertical" style="" value="احجز الاَن">
            </div> 
            <br><br>
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