<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>Mostafa ElRobi</title>

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

    


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    @include('pages.header')
    <div class="flat-slider clearfix" >
        <div class="rev_slider_wrapper fullwidthbanner-container" >
            <div id="rev-slider1" class="rev_slider fullwidthabanner">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="random" >
                        <!-- Main Image -->
                        <div class="carousel-item active">
                        <img src="images/transparent-head/mostafaelrobi.jpg" class="d-block w-100"  alt="مصطفي الروبي" name="محامون مستشارون" style="object-fit: cover;" data-bgposition="center center" data-no-retina>
                        <div class="carousel-caption  d-md-block" style="">
       
                            <div class="text-center btn-read-more wow fadeInUp " style="margin-top: -20%;" ><a href="cv" class="btn-read-more" style="font-size: 25px;" target="_blank" class=" cta hvr-vertical ">نبذة عننا</a>
                            
                               
                            </div>
                         </div>
                        </div>
                     
                    </li>
                    <!-- /End Slide 1 -->

                    <!-- Slide 2 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <div class="carousel-item active">
                        <img src="images/transparent-head/mostafaelrobi2.jpg"  class="d-block w-100"  alt="مصطفي الروبي" name="محامون مستشارون"  style="object-fit: cover;" data-bgposition="center center" data-no-retina>
                        <div class="carousel-caption d-none d-md-block ">
       
                            <div class="text-center btn-read-more wow fadeInUp dd" style="margin-top: -20%;" ><a href="cv" style="font-size: 25px;" target="_blank">نبذة عننا</a>
                            
                            </div>
                         </div>
                    
                        </div>
                       
                    </li>
                    
                    <!-- /End Slide 2 -->
              
                </ul>
           
        </div>
    </div><!-- flat-slider -->






    {{-- <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> --}}







<center>
    {{-- <div id="wrap" style="background-image: url('images/services/slide_.png') !important;padding-top:200px;"> --}}
    <div id="wrap" >
        <div class="container">
            <div class="row">
                <div class="col-lg-22" >
                    
    
                    <div class="row rev_slider fullwidthabanner">
                        <div class="col-lg-12 col-md-12">
    
                            <section class="carousel-wrap" >
                                <ul class="carousel">
                                    <li class="items main-pos" data-transition="random" id="1">
                                        <div class="review-card text-center">
                                            <section class="iconbox-home clearfix">
                                                <div >
                                                    <div class="iconbox-features type2">
                                            <div class="iconbox iconbox-1">



                    <div class="bck-stand"></div>
                    <div class="bnc" style="" >
                        <div class="iconbox-wrap">
                            {{-- <div class="iconbox-icon" >
                                <img src="images/home1/01.png" alt="images">
                            </div> --}}
                            <center>
                                <div class="iconbox-content">
                                    <h5 class="title slidertitle" ><a href="#services"  >الخدمات </a></h5>
                                        
                                    {{-- <p class="description">
                                        
                                    </p> --}}
                                    {{-- <div class="fl-btn">
                                        <a href="#">read more</a>
                                    </div> --}}
                                </div>
                                <br>
                            <div class="iconbox-image" style="">
                                <img src="images/services/company.jpg"  alt="images">
                            </div></center>
                            
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li>
                                    <li class="items right-pos" data-transition="random" id="2">
                                        <div class="review-card text-center">
                                            <section class="iconbox-home clearfix">
                                                <div style="width: 100%">
                                                    <div class="iconbox-features type2">
                                            <div class="iconbox iconbox-1">



                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                           
                            <center>
                            <div class="iconbox-content">
                                <h5 class="title slidertitle"><a href="#rr">رؤيتنا</a></h5>
                                {{-- <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p> --}}
                                {{-- <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div> --}}
                            </div>

                            <br>
                            <div class="iconbox-image" style="">
                                <img src="images/about/vision.jpg"  alt="images">
                            </div></center>
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li>
                                    <li class="items right-pos" data-transition="random" id="3">
                                        <div class="review-card text-center">
                                            <section class="iconbox-home clearfix">
                                                <div style="width: 100%">
                                                    <div class="iconbox-features type2">
                                            <div class="iconbox iconbox-1">



                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <center>
                                <div class="iconbox-content">
                                    <h5 class="title slidertitle"><a href="/company-open">اسس شركتك</a></h5>
                                    {{-- <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                    </p> --}}
                                    {{-- <div class="fl-btn">
                                        <a href="#">read more</a>
                                    </div> --}}
                                </div>
    
                                <br>
                                <div class="iconbox-image" style="">
                                    <img src="images/about/company.jpg"  alt="images">
                                </div></center>
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li>
                                    <li class="items left-pos" data-transition="random" id="4">
                                        <div class="review-card text-center">
                                            <section class="iconbox-home clearfix">
                                                <div style="width: 100%">
                                                    <div class="iconbox-features type2">
                                            <div class="iconbox iconbox-1">



                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <center>
                                <div class="iconbox-content">
                                    <h5 class="title slidertitle"><a href="/request">حجز استشاره</a></h5>
                                    {{-- <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                    </p> --}}
                                    {{-- <div class="fl-btn">
                                        <a href="#">read more</a>
                                    </div> --}}
                                </div>
    
                                <br>
                                <div class="iconbox-image" style="">
                                    <img src="images/about/res.jpg"  alt="images">
                                </div></center>
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li>
                                    
                                </ul>
                                <span class="slider">
                                  <a href="javascript:void(0);" value="Prev" id="prev"><i class="material-icons">&#xE314;</i></a>
                                  <a href="javascript:void(0);" value="Next" id="next"><i class="material-icons">&#xE315;</i></a>
                                  {{-- 5alek faker --}}
                                </span>
                            </section>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</center>



<section class="have" style="position: relative">
 
    <div class="container" >
        <div class="row">
            <div class="col-lg-5 whitebox wow fadeIn">
        <h1 style="color: #A75032; font-size:30px;text-align:center; ">لدينا اقوي المحامين للدفاع عنك<br> 
            و نقدم الحماية القانونية لك 
            <h1>
        </div>
    </div>
</div>

        </section>
    <section class="about-home" id="rr" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-5 wow fadeIn" style=" padding: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
                text-align: center;">
                    <div class="featured-post">
                        <div class="entry-image" >
                            <img src="images/about/our vision.jpg" alt="images" style="height: 380px;">
                        </div>
                        <div class="image-move">
                            <img src="images/home1/05.png" alt="images" class="oval-one">
                            <img src="images/home1/06.png" alt="images" class="oval-two">
                            <img src="images/home1/07.png" alt="images" class="oval-three">
                            <img src="images/home1/08.png" alt="images" class="oval-four">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="flat-spacer" data-desktop="36" data-sdesktop="20" data-mobi="0" data-smobi="0"></div>
                    <div class="content" style="text-align:right;">
                        <div class="title"><span style="font-size: 40px;font-weight:bold;text-align:right; color:#A75032;">رؤيتنا</span></div>
                        <p class="description" >
                            استثمار طاقتنا العلمية والمهنية لنكون في مركز الصدارة بين مؤسسات المحاماة والتحكيم في مصر والشرق الأوسط بما لدينا من فريق عمل يضم نخبة من كبار المحامين والمستشارين القانونين في كافة المعهود إليهم خدمات قانونية كبري لكافة الشركات متعدده الجنسيات والمصالح والمؤسسات العامة داخل مصر والشرق الاوسط لتحقق لعملائنا النتائج المرجوة.
                        </p>
                        <p class="description">
                            والأنجازات المنشودة والتعامل بإخراج العميل من المواقف الصعبة وثقتنا الشديده وإيمانا بالأعمال التى تسند إلينا هو الطريق الأمثل لأنجاز كل المهام التى تسند إلينا معتبرين عملائنا هم شركائنا الحقيقون في النجاح الذي نستمد منهم قوتنا المهنية والمزيد من النجاح وتوسعة قاعدة عملائنا يومآ بعد يوم هو نتائج جهد وطاقات مبذولة عن بصيرة وسعي دائم ونتائج مرضية لجميع العملاء.
                        </p>
                        {{-- <div class="fl-btn">
                            <a href="#" class="hvr-vertical">read more</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- about -->
    

    <br><br><br><br><br>



    <section class="facts" id="facts" >
        <div class="box1" style="position: relative" >
         
       
     
        <div class="container">
            <div class="flat-counter" >
                <div class="row " style="width:50% ; float:right;">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="counter">                      
                            <div class="content-counter" >
                                <div class="whitebox">
                                <div class="numb-count-wrap">
                                    <span  class="numb-count" data-from="0" data-to="42" data-speed="2000" data-inviewport="yes">25</span>
                                </div>
                                <div class="name-count">سنوات الخبره</div>
                                <div class="icon-count"><img src="images/home1/09.png" alt="images"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="counter">                            
                            <div class="content-counter">
                                <div class="whitebox">
                                <div class="numb-count-wrap">
                                    <span class="numb-count" data-from="0" data-to="2000" data-speed="2000" data-inviewport="yes">225</span>
                                    <span class="numb-bs">+</span>
                                </div>
                                <div class="name-count">عملاء سعداء</div>
                                <div class="icon-count"><img src="images/home1/11.png" alt="images"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="counter">
                            <div class="content-counter">
                                <div class="numb-count-wrap">
                                    <span class="numb-count" data-from="0" data-to="99" data-speed="2000" data-inviewport="yes">99</span>
                                    <span class="numb-bs">%</span>
                                </div>
                                <div class="name-count">نسبه النجاح</div>
                                <div class="icon-count"><img src="images/home1/12.png" alt="images"></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    
    </section><!-- facts -->










    
    <section class="practice-featured" id="services">
        <div class="practice-area practice-area-style2" >
            <div class="container">
                <div class="title-section text-center">
                    <h3 class="flat-title" style="color:#A75032; font-size:30px;">الخدمات</h3>
                    {{-- <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p> --}}
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
                                                <a href="javascript:void(0)" id = ''><img src="images/services/scale.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">صياغة العقود الدولية والمحلية</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
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
                                                <img src="images/services/scale.png" alt="images" style="width: 80px;">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">الاستشارات القانونية والاقتصادية.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'الاستشارات'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">يستوعب الفريق احتياجات العملاء العقارية ويتبع منهجآ عمليآ فى حل المشكلات ذات الصلة</p> --}}
                                            <a href="javascript:void(0)" id = 'monaz3at'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'sharekat'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'للمقاصة'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'التحكيم'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'التصديق'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                            <a href="javascript:void(0)" id = 'الديون'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            <a href="#"><img src="images/services/الاوراق الرسمية.jpg" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">المسؤولية التقصيرية والتعويض</h4>
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'mas2olya'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">خدمات التأمينات الاجتماعية.</h4>
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'ta2menat'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">القضايا الإدارية ومجلس الدولة </h4>
                                        {{-- <p class="description">يستوعب الفريق احتياجات العملاء العقارية ويتبع منهجآ عمليآ فى حل المشكلات ذات الصلة</p> --}}
                                        <a href="javascript:void(0)" id = 'dawla'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">إقامة العمل وتصاريح عمل الأجانب.</h4>
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'tasaree7'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="page4 row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">مصلحة الشهر العقاري.</h4>
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = '3akary'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">حقوق الملكية الفكرية وبراءة الاختراع </h4>
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'e5tra3'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">كسب الجنسية.</h4>
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'gensya'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <img src="images/services/scale.png" alt="images">
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name"> الجرائم الإلكترونية.</h4>
                                        {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                        <a href="javascript:void(0)" id = 'elec'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">زواج ومنازعات الأجانب</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'zawag'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">الهجرة.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'hegra'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">قطاع البترول </h4>
                                            {{-- <p class="description">يستوعب الفريق احتياجات العملاء العقارية ويتبع منهجآ عمليآ فى حل المشكلات ذات الصلة</p> --}}
                                            <a href="javascript:void(0)" id = 'petrol'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">خدمة الضرائب والجمارك.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'gamarek'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="page6 row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">الإنتاج الفني والسينمائي.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'cinema'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">ادارة الاملاك العقارية </h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'amlaak'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name"> تٌملك العقارات والأراضي وتخصيصها وتقنينها.</h4>
                                            {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                            <a href="javascript:void(0)" id = 'tamalok'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <img src="images/services/scale.png" alt="images">
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name"> منازعات شؤون الأسرة وقضايا الاحوال الشخصية.</h4>
                                            {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                            <a href="javascript:void(0)" id = 'osra'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            
                            </div>

                </div>

            </div>
            <center>
                <div class="row" style="margin-left:30%;text-align:center;">
            <a href="javascript:void(0);" class="circle" id="num1" onclick="page1()" >1&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num2" onclick="page2()" >2&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num3" onclick="page3()" >3&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num4" onclick="page4()" >4&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num5" onclick="page5()" >5&emsp;</a> 
            <a href="javascript:void(0);" class="circle" id="num6" onclick="page6()" >6&emsp;</a> 
            {{-- <a href="javascript:void(0);" onclick="page2()"><div class="circle" id="num2">2&emsp;</div></a> 
            <a href="javascript:void(0);" onclick="page3()"><div class="circle" id="num3">3&emsp;</div></a>
            <a href="javascript:void(0);" onclick="page4()"><div class="circle" id="num4">4&emsp;</div></a>
            <a href="javascript:void(0);" onclick="page5()"><div class="circle" id="num5">5&emsp;</div></a>
            <a href="javascript:void(0);" onclick="page6()"><div class="circle" id="num6">6&emsp;</div></a> --}}
        </div>
        </center>
            <br>
            
        </div><!-- practice -->
        {{-- <span style="font-size: 25px;margin-left:40%;"><a href="javascript:void(0)"  id="p1" class="numberCircle">1</a>   &emsp;<a id="p2" onclick="p2()" href="javascript:void(0)" class="numberCircle">2</a>&emsp;<a id="p3" onclick="p3()" href="javascript:void(0)" class="numberCircle">3</a></span> --}}
        {{-- <img src="images/transparent-head/logo.png" alt="" > --}}

        {{-- <div class="featured featured-style2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="featured-post">
                            <div class="entry-image">
                                <img src="images/home1/14.png" alt="images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="flat-spacer" data-desktop="63" data-sdesktop="63" data-mobi="30" data-smobi="30"></div>
                        <div class="content">
                            <div class="caption">Our commitment</div>
                            <h4 class="heading">We bring justification against all curruption and injustice</h4>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consecte dunt ut labore et dot enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            </p>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consecte dunt ut labore et dot enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            </p>
                            <div class="fl-btn">
                                <a href="#" class="hvr-vertical">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- featured --> --}}
    </section><!-- practice-featured --> 



	<div class="team" id="team">
		<div class="container" id="att">
			<h3 class="title"style="color:#A75032;" >فريق العمل</h3>
         
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="content ">
                      
                        <p class="description" style="text-align: center;">
                            نضم فريق عمل مكون من حوالي 20 محاميآ وما يقرب من 20 مساعدآ وموظفآ على درجة عالية من الحرفية والخبرة يعملون جنبآ الى جنب في أكثر من 40 مجالآ من مجالات المحاماة والاستشارات القانونية الموثقة 
                        </p>
                    </div>
                </div>
              
            </div>
            <br>
			<div class="team-grids">
				<div class="col-xs-4 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " class="img-responsive">
						</div>
					</div>
					<h4>Peter Parker</h4>
					
				</div>
				<div class="col-xs-4 team-grid">
					<div class="pic">
						<div class="stack twisted">
                            
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " class="img-responsive">
						</div>
					</div>
					<h4>Michael Loe</h4>
					
				</div>
				<div class="col-xs-4 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " class="img-responsive">
						</div>
					</div>
					<h4>Mary Jane</h4>
					
				</div>
                <div class="col-xs-4 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " class="img-responsive">
						</div>
					</div>
					<h4>Mary Jane</h4>
				
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>



    



    <section class="testimonial text-center" id="rev">
        <div class="container">

            <div class="heading white-heading">
                اراء عملائنا
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="images/testimon/testim1.jpg" class="img-circle img-responsive" />
                            <p>شرف لشركتي ان المؤسسه هي المستشار القانوني لنا علاقتها بكافه القطاعات الحكوميه و هيئه الأستثمار ذللت لنا الكثير من العقبات قبل و اثناء العمل مما عاد علي شركتي بوفير الجهد و اقل نفقات ممكنه و الأستمرار في الانتاج دون ضغوط او إشكالات قانونيه</p>
                            <h4>أ/ محمد كمال</h4>
                            <h4>المدير التنفيزي لشركه جولد كيرافارما</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" /><p>CLALSDLASD 2 </p>
                            <h4>Client 2</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                            <p>CLALSDLASD 3</p>
                            <h4>Client 3</h4>
                            <h3>Client 2</h3>
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
                            <form action="#" class="form-evaluation">
                                <div class="wrap-evaluation" >
                                    {{-- <h5 class="title">Free Case Evaluation</h5> --}}
                                    <div class="your-name mg-text">
                                        <label>الاسم كامل</label>
                                        <input type="text" class="your-name" placeholder="الاسم كامل">
                                    </div>
                                    <div class="your-email mg-text">
                                        <label> الإميل</label>
                                        <input type="text" class="your-email" placeholder="الإميل">
                                    </div>
                                    <div class="your-phone mg-text">
                                        <label>رقم التليفون</label>
                                        <input type="text" class="your-phone" placeholder="رقم التليفون">
                                    </div>
                                    <div class="your-phone mg-text " >
                                        <label> رقم التليفون</label>
                                        <input type="date" class="date" placeholder="">
                                    </div>
                                    {{-- <div class="subject mg-text">
                                        <input type="text" class="subject" placeholder="Subject">
                                    </div> --}}
                                    <div class="message-wrap mg-text">

                                        <textarea name="message" id="message" rows="8" placeholder="تفاصيل"></textarea>
                                    </div>
                                    <div class="fl-btn">
                                        <button class="hvr-vertical" style="font-size: 25px; background-color:#A75032;">حجز</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-7 col-md-12" >
                    <div class="content-evaluation">
                        <div class="themesflat-content-box" data-padding="113px 0% 101px 100px" data-sdesktoppadding="113px 0% 101px 0" data-ssdesktoppadding="113px 0% 101px 0" data-mobipadding="50px 0 100px 0" data-smobipadding="50px 0 100px 0">
                            {{-- <div class="caption">تواصل</div> --}}
                            <h4 class="heading" style="color:#A75032;">احصل علي استشاره</h4>
                            <p class="description" style="font-size:25px;font-weight:bold;color:#3A1F0E;">
                                تغطي مجالات عمل وخدمات المؤسسة نطاقاً واسعآ من المجالات والتخصصات إذا تقدم المؤسسة حلول مبتكرة واستشارات موجهة للأفراد والشركات فى جميع المراحل بداية من متطلبات انظمة إدارة حقوق الملكية الفكرية ويضمن التعاون الموثق بين إدارات المكتب ان يصبح مركزآ مؤهلاً لتلبية احتياجات العملاء. 
                            </p>
                            <div class="flat-spacer" data-desktop="90" data-sdesktop="60" data-mobi="25" data-smobi="25"></div>
                            <div class="call-us">
                                <div class="text" style="color:#A75032;">
                                    او اتصل بنا 
                                </div>
                                {{-- <h3 class="phone-number"> --}}
                                    <br>

                                    <a class="phone-number1" style="color: #43200F; font-size:20px;" href="tel:0201278823809">0201278823809</a><br><br>
                                    {{-- <a class="phone-number2" style="color:white;;font-size:40px;"  href="tel:02035902759">02035902759</a><br><br> --}}
                                    <a class="phone-number3" style="color: #43200F; font-size:20px;"  href="tel:0201272653225">0201272653225</a>
 
                                {{-- </h3> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- case-evaluation -->


    
    <section class="featured featured-style3">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-5 col-md-12">
                    <div class="content">
                        <div class="caption">Our Features</div>
                        <h4 class="heading">Reason to choose us over others in market</h4>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        </p>
                        <div class="view-all"><a href="#">view all</a></div>
                    </div>
                </div> --}}






                {{-- <div class="col-lg-6 col-md-6">
                    <div class="iconbox-features type3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/11.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">Best Legal 1 Security</a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/12.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">Top Skilled Attorney2</a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/13.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">All Ti3me Support </a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/14.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">Resonable Pr4icing</a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}





                {{-- <div class="col-lg-6 col-md-6">
                    <div class="iconbox-features type3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/11.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">Best Lega5l Security</a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/12.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">Top Skille6d Attorney</a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/13.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">All Time7 Support </a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="iconbox">
                                    <div class="iconbox-icon">
                                        <img src="images/practice/14.png" alt="images">
                                    </div>
                                    <div class="iconbox-content">
                                        <h5 class="title"><a href="#">Res8onable Pricing</a></h5>
                                        <p class="description">
                                            orem ipsum dolor sit dot  nostrud exercitation ulla mco laboris
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="style-text"></div>
    </section><!-- featured -->

    
    
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