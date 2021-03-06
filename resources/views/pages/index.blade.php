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
<style>

.image-box-law .featured-post .entry-image .tt{
    display: block;
    width: 100%;
    height: 300px;
    -webkit-transition: all 2s ease;
    -moz-transition: all 2s ease;
    -ms-transition: all 2s ease;
    -o-transition: all 2s ease;
    transition: all 2s ease;
}
.image-box-law .content-law #yy {
    font-size: 22px;
}
.img-slider {
    position: relative;
    width: 800px;
    height: 400px;
}
.img-slider .slider-container {
    
    position: absolute;
    width: 400%;
    /* top: 0;
    left: 0; */
    overflow: hidden;
    animation: slider 8s infinite;
}
.img-slider .slider-container .slide {
    font-size: 25px;
    position: relative;
    width: 25%;
    height: 100%;
    float: left;
    overflow: hidden
}
.img-slider .slider-container .slide img {
  display: block;
  width: 100%;
  /* height: 100%; */
}

@keyframes slider {
    0%, 25%, 100%{left: 0}
    
    30%, 55%{left: -100%}
    
    60%, 85%{left: -200%}
}


    </style>
    
@include('pages.header')
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

          confirmButtonText:'<i style="padding:10px 50px;" class="btn-lg btn-warning">!تم</i> ',
          
      });
        </script>
    @endif

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    
    <div id="slider-home" class="carousel slide" data-ride="carousel" data-pause="false">
        <ul class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
            <li data-target="#slider-home" data-slide-to="3"></li>
        </ul>
        <div class="carousel-innerr">
            <div class="carousel-item active">
                <img src="images/head/mostafaelrobi.jpg" alt="Los Angeles">
                <div class="carousel-caption">
              
                    <a class="all-buttons" href="#">اسس شركتك</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/head/mostafaelrobi2.jpg" alt="Chicago">
                <div class="carousel-caption">
                  
                    <a class="all-buttons" href="#">احجز استشاره</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider-home" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider-home" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
<br><br>





    


    <div class="logo-slider">
        <div class="slide-track">
            <div class="slide">

                    <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
                                        <div class="image-box-law">
                                            <div class="featured-post">
                                                <div class="entry-image">
                                                    <a id="yy" href="#services"><img src="images/services/company1.jpg" class="tt" alt="الخدمات"></a>
                                                </div>
                                                <div class="icon">
                                                    <a id="yy" href="#services" ><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                                                </div>
                                            </div>
                                            <div class="content-law">
                                                <h4 class="name"><a  id="yy" href="#rr">الخدمات </a></h4>
                                            </div>
                                        </div>
                                    </div>
              
            </div>
            <div class="slide">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12" style="width:450px;height:300px;">
                    <div class="image-box-law">
                        <div class="featured-post">
                            <div class="entry-image">
                                <a  id="yy" href="#rr"><img src="images/about/vision.jpg" class="tt" alt="رؤيتنا"></a>
                            </div>
                            <div class="icon">
                                <a  id="yy" href="#rr"><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                            </div>
                        </div>
                        <div class="content-law">
                            <h4 class="name"><a id="yy" href="#rr">رؤيتنا</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
                    <div class="image-box-law">
                        <div class="featured-post">
                            <div class="entry-image">
                                <a id="yy" href="/company-open"><img src="images/about/company.jpg" class="tt" alt="اسس شركتك"></a>
                            </div>
                            <div class="icon">
                                <a id="yy" href="/company-open" id = ''><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                            </div>
                        </div>
                        <div class="content-law">
                            <h4 class="name"><a id="yy" href="/company-open">اسس شركتك</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
                    <div class="image-box-law">
                        <div class="featured-post">
                            <div class="entry-image">
                                <a id="yy" href="/request"><img src="images/about/res.jpg" class="tt" alt="حجز استشاره"></a>
                            </div>
                            <div class="icon">
                                <a id="yy" href="/request"><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                            </div>
                        </div>
                        <div class="content-law">
                            <h4 class="name"><a id="yy" href="/request">حجز استشاره</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">

                <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a id="yy" href="#services"><img src="images/services/company1.jpg" class="tt" alt="الخدمات"></a>
                                            </div>
                                            <div class="icon">
                                                <a id="yy" href="#services" ><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name"><a  id="yy" href="#rr">الخدمات </a></h4>
                                        </div>
                                    </div>
                                </div>
          
        </div>
        <div class="slide">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12" style="width:450px;height:300px;">
                <div class="image-box-law">
                    <div class="featured-post">
                        <div class="entry-image">
                            <a  id="yy" href="#rr"><img src="images/about/vision.jpg" class="tt" alt="رؤيتنا"></a>
                        </div>
                        <div class="icon">
                            <a  id="yy" href="#rr"><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                        </div>
                    </div>
                    <div class="content-law">
                        <h4 class="name"><a id="yy" href="#rr">رؤيتنا</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
                <div class="image-box-law">
                    <div class="featured-post">
                        <div class="entry-image">
                            <a id="yy" href="/company-open"><img src="images/about/company.jpg" class="tt" alt="اسس شركتك"></a>
                        </div>
                        <div class="icon">
                            <a id="yy" href="/company-open" id = ''><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                        </div>
                    </div>
                    <div class="content-law">
                        <h4 class="name"><a id="yy" href="/company-open">اسس شركتك</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
                <div class="image-box-law">
                    <div class="featured-post">
                        <div class="entry-image">
                            <a id="yy" href="/request"><img src="images/about/res.jpg" class="tt" alt="حجز استشاره"></a>
                        </div>
                        <div class="icon">
                            <a id="yy" href="/request"><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                        </div>
                    </div>
                    <div class="content-law">
                        <h4 class="name"><a id="yy" href="/request">حجز استشاره</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">

            <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a id="yy" href="#services"><img src="images/services/company1.jpg" class="tt" alt="الخدمات"></a>
                                        </div>
                                        <div class="icon">
                                            <a id="yy" href="#services" ><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name"><a  id="yy" href="#rr">الخدمات </a></h4>
                                    </div>
                                </div>
                            </div>
      
    </div>
    <div class="slide">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12" style="width:450px;height:300px;">
            <div class="image-box-law">
                <div class="featured-post">
                    <div class="entry-image">
                        <a  id="yy" href="#rr"><img src="images/about/vision.jpg" class="tt" alt="رؤيتنا"></a>
                    </div>
                    <div class="icon">
                        <a  id="yy" href="#rr"><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                    </div>
                </div>
                <div class="content-law">
                    <h4 class="name"><a id="yy" href="#rr">رؤيتنا</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
            <div class="image-box-law">
                <div class="featured-post">
                    <div class="entry-image">
                        <a id="yy" href="/company-open"><img src="images/about/company.jpg" class="tt" alt="اسس شركتك"></a>
                    </div>
                    <div class="icon">
                        <a id="yy" href="/company-open" id = ''><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                    </div>
                </div>
                <div class="content-law">
                    <h4 class="name"><a id="yy" href="/company-open">اسس شركتك</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="width:450px;height:300px;">
            <div class="image-box-law">
                <div class="featured-post">
                    <div class="entry-image">
                        <a id="yy" href="/request"><img src="images/about/res.jpg" class="tt" alt="حجز استشاره"></a>
                    </div>
                    <div class="icon">
                        <a id="yy" href="/request"><img src="images/services/hammer.png" style="margin-top: 15%;"  alt="images"></a>
                    </div>
                </div>
                <div class="content-law">
                    <h4 class="name"><a id="yy" href="/request">حجز استشاره</a></h4>
                </div>
            </div>
        </div>
    </div>
            
            
        
        </div>
    </div>

    
      <br><br><br><br><br><br>



<center>
    
    
    </div>

</center>



<section class="have" style="position: relative">
 
    <div class="container" >
        <div class="row">
            <div class="col-lg-12 whitebox wow fadeIn">
        <h1 dir="rtl" style="color: #3E2217; font-size:25px; text-align:center; line-height:45px; padding-left:20px; padding-right:20px; text-align:justify; ">
            مكتب محامون  بشكل محترف لتقديم الاستشارات والخدمات القانونية ومقر عمله الرئيسي فى مصر بالأسكندرية 170 طريق الحرية باب شرقي  وقد تأسس المكتب عام 1996  فأصبح أحد أهم المكاتب للأستشارات  القانونية  و تدعيم رجال الأقتصاد  ويضم فريق عمل مكون من حوالي 20 محاميآ وما يقرب  من 20 مساعدآ وموظفآ على درجه عاليه من الحرفيه والخبره يعملون جنبآ الى جنب في أكثر من  40 مجالآ من مجالات المحاماه والاستشارات القانونية الموثقة وبفضل حجم إعمال المكتب المتنوعة المجالات وما يملكه من موارد تكنولوجيه متقدمه يقدم المكتب جميع الخدمات القانونية للهيئات والشركات الكبري والمؤسسات على إختلاف حجم أعمالها فيما يتعلق بكافه المسائل المحليه والوطنيه والدولية .
            <h1>
        </div>
    </div>
</div>

        </section>
    <section class="about-home" id="rr" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 wow fadeIn">
                    <div class="featured-post">
                        <div class="entry-image" >
                            <br>
                            <img id="i2" src="images/about/our vision.jpg" alt="images" >
                        </div>
                        <div class="image-move">
                            <img src="images/home1/05.png" alt="images" class="oval-one">
                            <img src="images/home1/06.png" alt="images" class="oval-two">
                            <img src="images/home1/07.png" alt="images" class="oval-three">
                            <img src="images/home1/08.png" alt="images" class="oval-four">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="flat-spacer" data-desktop="36" data-sdesktop="20" data-mobi="0" data-smobi="0"></div>
                    <div class="content" style="text-align:right;">
                        <div class="title texts">رؤيتنا</div>
                        <p class="description " >
                            استثمار طاقتنا العلمية والمهنية لنكون في مركز الصدارة بين مؤسسات المحاماة والتحكيم في مصر والشرق الأوسط بما لدينا من فريق عمل يضم نخبة من كبار المحامين والمستشارين القانونين في كافة المعهود إليهم خدمات قانونية كبري لكافة الشركات متعدده الجنسيات والمصالح والمؤسسات العامة داخل مصر والشرق الاوسط لتحقق لعملائنا النتائج المرجوة.
                        </p>
                        <p class="description">
                            والأنجازات المنشودة والتعامل بإخراج العميل من المواقف الصعبة وثقتنا الشديده وإيمانا بالأعمال التى تسند إلينا هو الطريق الأمثل لأنجاز كل المهام التى تسند إلينا معتبرين عملائنا هم شركائنا الحقيقون في النجاح الذي نستمد منهم قوتنا المهنية والمزيد من النجاح وتوسعة قاعدة عملائنا يومآ بعد يوم هو نتائج جهد وطاقات مبذولة عن بصيرة وسعي دائم ونتائج مرضية لجميع العملاء.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section><!-- about -->
    

<br><br><br><br>   

    <section class="facts" id="facts" >
        <div class="box1" style="position: relative" >
         
       
     
        <div class="container">
            <div class="flat-counter" >
                <div class="row " >
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter">                      
                            <div class="content-counter" >
                                <div class="small-whitebox">
                                <div class="numb-count-wrap">
                                    <span  class="numb-count" data-from="0" data-to="26" data-speed="2000" data-inviewport="yes">26</span>
                                </div>
                                <div class="name-count">سنوات الخبره</div>
                                <div class="icon-count"><img src="images/icon/experince.png" alt="images"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter">                            
                            <div class="content-counter">
                                <div class="small-whitebox">
                                <div class="numb-count-wrap">
                                    <span class="numb-count" data-from="0" data-to="4000" data-speed="2000" data-inviewport="yes">4000</span>
                                    <span class="numb-bs">+</span>
                                </div>
                                <div class="name-count">عدد العملاء </div>
                                <div class="icon-count"><img src="images/icon/user.png" alt="images"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter">                            
                            <div class="content-counter">
                                <div class="small-whitebox">
                                <div class="numb-count-wrap">
                                    <span class="numb-count" data-from="0" data-to="2000" data-speed="2000" data-inviewport="yes">2000</span>
                                    <span class="numb-bs">+</span>
                                </div>
                                <div class="name-count"> عدد القضايا الفائزة </div>
                                <div class="icon-count"><img src="images/icon/law.png" alt="images"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter">                            
                            <div class="content-counter">
                                <div class="small-whitebox">
                                <div class="numb-count-wrap">
                                    <span class="numb-count" data-from="0" data-to="800" data-speed="2000" data-inviewport="yes">800</span>
                                    <span class="numb-bs">+</span>
                                </div>
                                <div class="name-count">عدد الشركات </div>
                                <div class="icon-count"><img src="images/icon/company.png" alt="images"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    
    </section><!-- facts -->










    
    <section class="practice-featured" id="services">
        <div class="practice-area practice-area-style2" >
            <div class="container">
                <div class="title-section text-center">
                    <h3 class="title texts" >الخدمات</h3>
                </div>
                <div class="practice-area-wrap">
                    <div class="row">
                        <div id="services1">
                            <div class="row">
                                <div class="page1 row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/العقود الدولية.jpg" alt="العقود الدولية"></a>
                                            </div>
                                            <div class="icon">
                                                <a href="javascript:void(0)" id = ''><img src="images/services/scale.png"  alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">صياغة العقود الدولية والمحلية</h4>
                                            <a href="javascript:void(0)" id = 'العقود' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/الاستشارات القانونية.jpg" alt="الاستشارات القانونية"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images" >
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">الاستشارات القانونية والاقتصادية.</h4>
                                            <a href="javascript:void(0)" id = 'الاستشارات'  class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/المنازعات.jpg" alt=" القضايا والمنازعات"></a>
                                            </div>
                                            <div class="icon">
                                                <a href="javascript:void(0)" id = ''>  <img src="images/services/scale.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">إدارة القضايا والمنازعات بكافة انواعها  </h4>
                                            <a href="javascript:void(0)" id = 'monaz3at' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/تأسيس الشركات.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">تأسيس الشركات وهيكلتها بكافة انواعها.</h4>
                                            <a href="/company-open" id = 'sharekat' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page2 row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/مصر للمقاصة.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">التعامل مع مصر للمقاصة والقيد والإيداع المركزي.</h4>
                                            <a href="javascript:void(0)" id = 'للمقاصة' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/التحكيم التجاري.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">منازعات التحكيم التجاري الدولي والمحلي  </h4>
                                            <a href="javascript:void(0)" id = 'التحكيم' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/الاوراق الرسمية.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">التصديق على الأوراق الرسمية.</h4>
                                            <a href="javascript:void(0)" id = 'التصديق' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/تصفية الديون.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">تحصيل وتسوية الديون من القطاع المصرفي.</h4>
                                            <a href="javascript:void(0)" id = 'الديون' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    <div id="services2">
                        <div class="row">
                            <div class="page3 row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/money.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">المسؤولية التقصيرية والتعويض</h4>
                                        <a href="javascript:void(0)" id = 'mas2olya' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/insure.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">خدمات التأمينات الاجتماعية.
                                            <br>
                                        </h4>
                                        <a href="javascript:void(0)" id = 'ta2menat' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/1.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">القضايا الإدارية ومجلس الدولة </h4>
                                        <a href="javascript:void(0)" id = 'dawla' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/work.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">إقامة العمل وتصاريح عمل الأجانب.</h4>
                                        <a href="javascript:void(0)" id = 'tasaree7' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="page4 row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/العقاري.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">مصلحة الشهر العقاري.
                                            <br>
                                        </h4>
                                        <a href="javascript:void(0)" id = '3akary' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/الفكرية.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">حقوق الملكية الفكرية وبراءة الاختراع </h4>
                                        <a href="javascript:void(0)" id = 'e5tra3' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/الجنسية.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">كسب الجنسية.
                                            <br>
                                        </h4>
                                        <a href="javascript:void(0)" id = 'gensya' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/compu.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name"> الجرائم الإلكترونية.
                                            <br>
                                        </h4>
                                        <a href="javascript:void(0)" id = 'elec' class="btn-read-more">للمزيد اضغط هنا</a>
                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>

                        <div id="services3">
                            <div class="row">
                                <div class="page5 row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/زواج.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">زواج ومنازعات الأجانب</h4>
                                            <a href="javascript:void(0)" id = 'zawag' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/الهجرة.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">الهجرة.</h4>
                                            <a href="javascript:void(0)" id = 'hegra' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/البترول.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">قطاع البترول </h4>
                                            <a href="javascript:void(0)" id = 'petrol' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/الجمرك.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">خدمة الضرائب والجمارك.</h4>
                                            <a href="javascript:void(0)" id = 'gamarek' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="page6 row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/الفني.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">الإنتاج الفني والسينمائي.
                                                <br>
                                            </h4>
                                            <a href="javascript:void(0)" id = 'cinema' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/العقار.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">ادارة الاملاك العقارية
                                                <br> </h4>
                                            <a href="javascript:void(0)" id = 'amlaak' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/تملك.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name"> تٌملك العقارات والأراضي وتخصيصها وتقنينها.</h4>
                                            <a href="javascript:void(0)" id = 'tamalok' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/الاسرة.jpg" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name"> منازعات شؤون الأسرة وقضايا الاحوال الشخصية.</h4>
                                            <a href="javascript:void(0)" id = 'osra' class="btn-read-more">للمزيد اضغط هنا</a>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            
                            </div>

                </div>

            </div>
            <center>
            <div class="row" style="margin-left:38%; text-align:center; ">
            <a href="javascript:void(0);" class="circle" id="num1" onclick="page1()" style="margin-right:20px;">1&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num2" onclick="page2()" style="margin-right:20px;">2&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num3" onclick="page3()" style="margin-right:20px;">3&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num4" onclick="page4()" style="margin-right:20px;">4&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num5" onclick="page5()" style="margin-right:20px;">5&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num6" onclick="page6()" style="margin-right:20px;">6&emsp;</a> 
            
        </div>
        </center>
            <br>
            
        </div><!-- practice -->
        
    </section><!-- practice-featured --> 

   
   
    <div class="logo-slider">
        <div class="slide-track">
            <div class="slide">
                <img src="images/logo/6.jpg" height="100" width="250" alt="" >
            </div>
            <div class="slide">
                <img src="images/logo/7.jpg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/8.jpg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/9.jpg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/10.jpg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/11.jpg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/12.jpg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/13.jpg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/1.jpg"  style="height: 140px; width:180px;" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/2.jpg" style="height: 140px; width:180px;" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/3.jpg" style="height: 140px; width:180px;" alt="" />
            </div>
            <div class="slide">
                <img src="images/logo/4.jpg" style="height: 140px; width:180px;" alt="" />
            </div>
            
        </div>
    </div>
	{{-- <div class="team" id="team">
		<div class="container" id="att">
			<h3 class="title texts" >  فريق العمل</h3>
         
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <div class="content ">
                      
                        <p class="description" style="text-align: center;">
                            نضم فريق عمل مكون من حوالي 20 محاميآ وما يقرب من 20 مساعدآ وموظفآ على درجة عالية من الحرفية والخبرة يعملون جنبآ الى جنب في أكثر من 40 مجالآ من مجالات المحاماة والاستشارات القانونية الموثقة 
                       
                        </p>
                    </div>
                </div>
              
            </div>
            <br>
			<div class="team-grids">
				<div class="col-xs-4 col-xs-12 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " style=" height: 300px;" class="img-responsive">
						</div>
					</div>
					<h4>Peter Parker</h4>
					
				</div>
				<div class="col-xs-4 col-xs-12 team-grid">
					<div class="pic">
						<div class="stack twisted">
                            
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " style=" height: 300px;" class="img-responsive">
						</div>
					</div>
					<h4>Michael Loe</h4>
					
				</div>
				<div class="col-xs-4 col-xs-12 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " style=" height: 300px;" class="img-responsive">
						</div>
					</div>
					<h4>Mary Jane</h4>
					
				</div>
                <div class="col-xs-4 col-xs-12 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " style=" height: 300px;" class="img-responsive">
						</div>
					</div>
					<h4>Mary Jane</h4>
				
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div> --}}

    <section class="testimonial text-center" id="rev">
        <div class="container">

            <div class="heading white-heading" >
             <h2 class="title texts ">   اراء عملائنا
             </h2> 
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="images/about/1.jpg" class="img-circle img-responsive" />
                            <p>مؤسسة بجد رائعة يرأسها صديقى المحترم مصطفى بك الروبى السند القانونى الحقيقى لكافة  أعمالى فى مصر تشعر وأنت معهم بأنك واحد منهم وكأن أعمالك وأموالك و هي أموالهم  ، حقوقك معهم محمية بفضل حسن أدائهم ونظامهم</p>
                            <h4>د/  صادق رضوان </h4>
                            <h4>رجل اعمال مقيم بالمانيا</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/about/2.jpg" class="img-circle img-responsive" />
                            <p>بصرحة وعن تجربة افضل واصدق مكتب محاماه فى مصر بيتعامل باحترافية شديدة مع كل القضايا وكل العملاء كل معاملتي في مصر باعملها عندهم وانا اشعر انني في امان</p>
                            <h4>أ/  محمد الحيدر  </h4>
                            <h4>صحفى سعودى </h4>
                          
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/about/3.jpg" class="img-circle img-responsive" />

                            <p>المؤسسة حماية لشركتى ومستشار قانونى ولا اروع من كدة لما تلاقي محاميك يدافع عن حقوقك بهذه القوة وهذا الأداء فأنت بجد بتمشي بسرعة في عملك وانت مطمئن لأن ظهرك مسنود علي سند قانوني رائع بجد بجد حماية وسند</p>
                            <h4>د/ محمد حسن </h4>
                            <h4>رئيس ادارة شركة براند العقارية</h4>
                          
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/about/4.jpg" class="img-circle img-responsive" />

                            <p>مكتب محاماة شديد الدقة  في العمل وعلي أعلي درجة في الكفاءة وإنجاز العمل أما عن الأحترام فحدث ولا حرج أنا بعتبر مكتبهم بيتي الثاني في مصر وإستثماراتي وأعماي في أمان</p>
                            <h4>أ/ سيد محمود دياب </h4>
                            <h4>رجل اعمال مصرى – ايطالى مقيم بإيطاليا </h4>
                          
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/about/5.jpg" class="img-circle img-responsive" />

                            <p>نفخر ان تكون المؤسسة هى المستشار القانونى بجميع اعمالنا ناس فاهمة وعندهم تفاني واخلاص في العمل و نتائجهم المبهرة تجعلك تفخر بأنك عميل لديهم</p>
                            <h4>د/ حسام اسعد  </h4>
                            <h4>المدير التنفيذى للمدينة اسكان للاشعة</h4>
                          
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/about/6.jpg" class="img-circle img-responsive" />

                            <p> تتشرف مجموعة شركاتى ان المؤسسة هى المستشار القانونى لها وبطبيعة الحال فإن رأس المال العامل بالسوق يحتاج لمؤسسة قانونية ذو خبرات كبيرة ومحترفة لحماية إدارة الأستثمارات نظرا لتعلق الأستثمارات بالكثير والكثير من المواقف الحرجة لتشعب التشريعات والقوانين الحاكمة وبفضل مؤسسة مصطفي الروبي استطاعت المؤسسة بالعبور بالمجموعة  الي بر الأمان والخروج الدائم من المواقف الحرجة  </p>
                            <h4>د/ الدكتور حسين عزت  </h4>
                            <h4>رئيس مجلس ادارة مجموعة شركات الحسين</h4>
                          
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="javascript:void(0);" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="javascript:void(0);" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>



  <div class="case-evaluation" id = "cont"> 
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="go-up">
                        <div class="themesflat-content-box" data-padding="0% 0% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="100px 0% 0% 0%" data-smobipadding="100px 0% 0% 0%">
                            <form action="{{ route('estshara') }}" method="post"   class="form-evaluation">
                                @csrf
                                <div class="wrap-evaluation" >
                                    <div class="your-name mg-text">
                                        <label for="" style="float:right;color:#A15035">الاَسم</label>
                        <input required type="text" name="name" style="" class="your-name" placeholder="اسمك بالكامل">
                                    </div>
                                    <div class="your-email mg-text">
                                        <label for="" style="float:right;color:#A15035">إيميل</label>
                        <input required type="email" name="email" style="" class="your-email" placeholder="إيميل">
                                    </div>
                                    <div class="your-phone mg-text">
                                        <label for="" style="float:right;color:#A15035">رقم التليفون</label>
                        <input required type="text" name="phone" style="" class="your-phone" placeholder="رقم التليفون">
                                    </div>
                                    <div class="your-phone mg-text " >
                                        <label for="date" style="float:right;color:#A15035">تاريخ الأستشاره</label>
                        <input required type="date" style="" name="date" class="your-name">
                                    </div>
                                    
                                    <div class="message-wrap mg-text">

                                        <textarea  name="details" required  id="comment-message" rows="8" placeholder="تفاصيل"></textarea>
                                    </div>
                                   
                                    <div class="fl-btn">
                                        <input type="submit"  class="all-buttons hvr-vertical" style="font-size: 25px; background-color:#A75032;" value="احجز الاَن">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-7 col-md-12" >
                    <div class="content-evaluation">
                        <div class="themesflat-content-box" data-padding="113px 0% 101px 100px" data-sdesktoppadding="113px 0% 101px 0" data-ssdesktoppadding="113px 0% 101px 0" data-mobipadding="50px 0 100px 0" data-smobipadding="50px 0 100px 0">
                            <h4 class="texts" style="color:#A75032;">احصل علي استشاره</h4>
                            <p class="description" style="font-size:25px;font-weight:bold;color:#3A1F0E;">
                                تغطي مجالات عمل وخدمات المؤسسة نطاقاً واسعآ من المجالات والتخصصات إذا تقدم المؤسسة حلول مبتكرة واستشارات موجهة للأفراد والشركات فى جميع المراحل بداية من متطلبات انظمة إدارة حقوق الملكية الفكرية ويضمن التعاون الموثق بين إدارات المكتب ان يصبح مركزآ مؤهلاً لتلبية احتياجات العملاء. 
                            </p>
                            <div class="flat-spacer" data-desktop="90" data-sdesktop="60" data-mobi="25" data-smobi="25"></div>
                            <div class="call-us">
                                <div class="text" style="color:#A75032;">
                                    او اتصل بنا 
                                </div>
                                    <br>

                                    <a class="phone-number1" style="color: #43200F; font-size:20px;" href="tel:00201278823809">+201278823809</a><br><br>
                                    <a class="phone-number3" style="color: #43200F; font-size:20px;"  href="tel:00201272653225">+201272653225</a>
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- case-evaluation -->

    
    
  
    
    
    
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
    <script>
        (function($) {
            $.fn.menumaker = function(options) {
                var cssmenu = $(this),
                    settings = $.extend({
                        format: "dropdown",
                        sticky: false
                    }, options);
                return this.each(function() {
                    $(this).find(".button").on('click', function() {
                        $(this).toggleClass('menu-opened');
                        var mainmenu = $(this).next('ul');
                        if (mainmenu.hasClass('open')) {
                            mainmenu.slideToggle().removeClass('open');
                        } else {
                            mainmenu.slideToggle().addClass('open');
                            if (settings.format === "dropdown") {
                                mainmenu.find('ul').show();
                            }
                        }
                    });
                    cssmenu.find('li ul').parent().addClass('has-sub');
                    multiTg = function() {
                        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                        cssmenu.find('.submenu-button').on('click', function() {
                            $(this).toggleClass('submenu-opened');
                            if ($(this).siblings('ul').hasClass('open')) {
                                $(this).siblings('ul').removeClass('open').slideToggle();
                            } else {
                                $(this).siblings('ul').addClass('open').slideToggle();
                            }
                        });
                    };
                    if (settings.format === 'multitoggle') multiTg();
                    else cssmenu.addClass('dropdown');
                    if (settings.sticky === true) cssmenu.css('position', 'fixed');
                    resizeFix = function() {
                        var mediasize = 1000;
                        if ($(window).width() > mediasize) {
                            cssmenu.find('ul').show();
                        }
                        if ($(window).width() <= mediasize) {
                            cssmenu.find('ul').hide().removeClass('open');
                        }
                    };
                    resizeFix();
                    return $(window).on('resize', resizeFix);
                });
            };
        })(jQuery);

        (function($) {
            $(document).ready(function() {
                $("#cssmenu").menumaker({
                    format: "multitoggle"
                });
            });
        })(jQuery);
     </script>   
</body>

@include('pages.footer')


<style>
    .icon img{
        height: 50px;
    }
    .entry-image img{
        height: 200px;
    }
</style>
</html>