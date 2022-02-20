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
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <header id="header" style="background-color: rgba(255, 255, 255, 0.2)" class="header bg-color">
        <div class="container" style="height: 125px;">
            <div style="margin-bottom: 30%;" class="flex-header">
                <div id="logo" class="logo">
                    <a  href="index.html" title="Logo"><img src="images/logo/logo-01.png"  alt="images" data-retina="images/logo/logo-01.png"></a>
                </div>
                <div class="content-menu" style="background-color: white !important;">
                    <div class="nav-wrap">
                        <div class="btn-menu"><span></span></div>
                        <nav  id="mainnav" class="mainnav" >
                            <ul class="menu" >
                                <li>
                                    <a href="#footer" class="" style="font-weight: bold;font-size:15px !important;">للتواصل</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="index.html" class="active">Home 1</a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="/hire" class="" style="font-weight: bold;font-size:15px !important;">توظيف و ندريب</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="index.html" class="active">Home 1</a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="#" class="" style="font-weight: bold;font-size:15px !important;">اراء عملائنا</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="index.html" class="active">Home 1</a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="/request" style="font-weight: bold;font-size:15px !important;">احجز استشاره</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="about.html">About</a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="#" style="font-weight: bold;font-size:15px !important;">المكتبه القانونيه</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="practice-area.html">Practice area</a></li>
                                        <li><a href="practice-single.html">Practice single</a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="#" style="font-weight: bold;font-size:15px !important;">من نحن</a>
                                    <ul class="sub-menu">
                                        <li><a href="cv">نبذه عن مصطفي الروبي</a></li>
                                        <li><a href="#att">فريق العمل</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/" style="font-weight: bold;font-size:15px !important;">الرئيسيه</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="case-results.html">Case results</a></li>
                                        <li><a href="case-details.html">Case details</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li>
                                    <a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog single</a></li>
                                    </ul>
                                </li>   
                                <li>
                                    <a href="#">Contact</a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>                                        --}}
                            </ul>                                   
                        </nav>
                    </div>
                    {{-- <div class="flat-show-search">
                        <div class="show-search">
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>                                             
                        </div>   
                        <div class="top-search">  
                            <div>                      
                                <form action="#" id="searchform-all" method="get">
                                    <input type="text" id="s" class="ss" placeholder="Search...">
                                    <button class="search-submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </header><!-- header -->
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
                        <!-- Layers -->
                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-140','-140']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-146','-146','-146','-146']"
                        data-fontsize="['40','40','24','16']"
                        data-lineheight="['70','70','36','30']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="700" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        مصطفي الروبي | محامون و مستشارون
                        </div> --}}

                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-80']"
                        data-fontsize="['72','72','52','40']"
                        data-lineheight="['100','100','64','52']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        We stand for Justice
                        </div> --}}
{{-- 
                        <div class="tp-caption tp-resizeme text-description  text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-80','-80']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-90','-90']"
                        data-fontsize="['21','21','16','16']"
                        data-lineheight="['33','33','28','28']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        style="font-weight:bold;color:white; ">
                        مؤسس ومدير مؤسسة مصطفي الروبي للمحاماة والتحكيم 
                        التجاري الدولي
                        </div>

                        <div class="tp-caption text-center btn-read-more"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-100','-100']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','20','20']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        <a href="cv" style="font-size: 25px;" class="hvr-vertical">نبذة عننا </a></div> --}}
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
                        <!-- Layers -->
                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-200','-200','-180','-180']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-146','-146','-146','-146']"
                        data-fontsize="['40','40','24','16']"
                        data-lineheight="['70','70','36','30']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="700" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                     مصطفي الروبي | محامون و مستشارون
                        </div> --}}

                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-80']"
                        data-fontsize="['72','72','52','40']"
                        data-lineheight="['100','100','64','52']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        We stand for Justice
                        </div> --}}

                        {{-- <div class="tp-caption tp-resizeme text-description  text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-80','-80']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-90','-90']"
                        data-fontsize="['21','21','16','16']"
                        data-lineheight="['33','33','28','28']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        style="font-weight:bold;color:white;">
                        المحامي المقبول لدي محكمة النقض 
                        </div> --}}

                        {{-- <div class="tp-caption text-center btn-read-more"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-100','-100']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','20','20']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        <a href="cv" style="font-size: 25px;" class="hvr-vertical">نبذة عننا </a></div> --}}
                    </li>
                    
                    <!-- /End Slide 2 -->
                    {{-- slide3 --}}

                    <li data-transition="random">
                        <!-- Main Image -->
                        <div class="carousel-item active">
                            <img src="images/transparent-head/mostafaelrobi.jpg"  class="d-block w-100"  alt="مصطفي الروبي" name="محامون مستشارون"  style="object-fit: cover;" data-bgposition="center center" data-no-retina>
                            <div class="carousel-caption d-none d-md-block">
           
                                <div class="text-center btn-read-more wow fadeInUp" style="margin-top: -20%;" ><a href="cv" class="btn-read-more" style="font-size: 25px;" target="_blank" class=" cta hvr-vertical ">نبذة عننا</a>
                            
                                </div>
                             </div>
                        
                            </div>
                        <!-- Layers -->
                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-140','-140']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-146','-146','-146','-146']"
                        data-fontsize="['40','40','24','16']"
                        data-lineheight="['70','70','36','30']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="700" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        مصطفي الروبي | محامون و مستشارون
                        </div> --}}

                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-80']"
                        data-fontsize="['72','72','52','40']"
                        data-lineheight="['100','100','64','52']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        We stand for Justice
                        </div> --}}
{{-- 
                        <div class="tp-caption tp-resizeme text-description  text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-80','-80']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-90','-90']"
                        data-fontsize="['21','21','16','16']"
                        data-lineheight="['33','33','28','28']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        style="font-weight:bold;color:white;">
                        المحامي المقبول لدي المحكمة الإدارية العليا 
                        </div>

                        <div class="tp-caption text-center btn-read-more"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-100','-100']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','20','20']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        <a href="cv" style="font-size: 25px;" class="hvr-vertical">نبذة عننا </a></div> --}}
                    </li>
                    {{-- end slide slide 3 --}}

                    {{-- slide4 --}}

                    <li data-transition="random">
                        <!-- Main Image -->
                       <div class="carousel-item active">
                        <img src="images/transparent-head/mostafaelrobi2.jpg"  class="d-block w-100"  alt="مصطفي الروبي" name="محامون مستشارون"  style="object-fit: cover;" data-bgposition="center center" data-no-retina>
                        <div class="carousel-caption d-none d-md-block" >
       
                            <div class="text-center btn-read-more wow fadeInUp" style="margin-top: -20%;" ><a href="cv" class="btn-read-more" style="font-size: 25px;" target="_blank" class=" cta hvr-vertical ">نبذة عننا</a>
                            
                            </div>
                         </div>
                    
                        </div>
                        <!-- Layers -->
                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-200','-200','-140','-140']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-146','-146','-146','-146']"
                        data-fontsize="['40','40','24','16']"
                        data-lineheight="['70','70','36','30']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="700" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        مصطفي الروبي | محامون و مستشارون
                        </div> --}}

                        {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-80']"
                        data-fontsize="['72','72','52','40']"
                        data-lineheight="['100','100','64','52']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        We stand for Justice
                        </div> --}}
{{-- 
                        <div class="tp-caption tp-resizeme text-description  text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-80','-80']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-90','-90']"
                        data-fontsize="['21','21','16','16']"
                        data-lineheight="['33','33','28','28']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        style="font-weight:bold;color:white;">
                        المحامي المقبول لدي المحكمة الدستورية العليا
                        </div>

                        <div class="tp-caption text-center btn-read-more"
                        data-x="['center','center','center','center']" data-hoffset="['-180','-180','-100','-100']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','20','20']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">
                        <a href="cv" style="font-size: 25px;" class="hvr-vertical">نبذة عننا </a></div> --}}
                    </li>
                    {{-- end slide 4  --}}
                </ul>
           
        </div>
    </div><!-- flat-slider -->







    {{-- background-image: linear-gradient(to right,white,#cca776c4,#3c1e13,#cca776c4,white) !important; --}}

<br><br><br><br><br><br>
<center>
    {{-- <div id="wrap" style="background-image: url('images/services/slide_.png') !important;padding-top:200px;"> --}}
    <div id="wrap" style="  padding-top:200px;">
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
                                                <div style="width: 100%">
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
                                    <h5 class="title slidertitle" ><a href="#"  >الخدمات </a></h5>
                                        
                                    {{-- <p class="description">
                                        
                                    </p> --}}
                                    {{-- <div class="fl-btn">
                                        <a href="#">read more</a>
                                    </div> --}}
                                </div>
                            <div style="border-bottom:2px black solid;height:20px;width:500px;position:relative;right:27px;background:color:white !important;">
                                <img src="images/services/company.jpg" style="border: 0.1px white solid;box-shadow:1px 2px 15px black;border-radius : 4px;width:500px;margin-top:20px;margin-right:50%;" alt="images">
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
                            <div class="iconbox-icon">
                                <img src="images/home1/01.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title slidertitle"><a href="#">رؤيتنا</a></h5>
                                {{-- <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p> --}}
                                {{-- <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div> --}}
                            </div>
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
                            <div class="iconbox-icon">
                                <img src="images/home1/01.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title slidertitle"><a href="#">المحامي المقبول لدي المحكمة اإلدارية العليا </a></h5>
                                {{-- <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p> --}}
                                {{-- <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div> --}}
                            </div>
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
                            <div class="iconbox-icon">
                                <img src="images/home1/01.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title slidertitle"><a href="#">المحامي المقبول لدي المحكمة الدستورية العليا</a></h5>
                                {{-- <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p> --}}
                                {{-- <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li>
                                    {{-- <li class="items back-pos" data-transition="random" id="5">
                                        <div class="review-card text-center">
                                            <section class="iconbox-home clearfix">
                                                <div style="width: 100%">
                                                    <div class="iconbox-features type2">
                                            <div class="iconbox iconbox-1">



                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <div class="iconbox-icon">
                                <img src="images/home1/01.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title"><a href="#">Short Time Result 5</a></h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p>
                                <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li>
                                    <li class="items back-pos" data-transition="random" id="6">
                                        <div class="review-card text-center">
                                            <section class="iconbox-home clearfix">
                                                <div style="width: 100%">
                                                    <div class="iconbox-features type2">
                                            <div class="iconbox iconbox-1">



                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <div class="iconbox-icon">
                                <img src="images/home1/01.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title"><a href="#">Short Time Result 6</a></h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p>
                                <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li>
                                    <li class="items back-pos" data-transition="random" id="7">
                                        <div class="review-card text-center">
                                            <section class="iconbox-home clearfix">
                                                <div style="width: 100%">
                                                    <div class="iconbox-features type2">
                                            <div class="iconbox iconbox-2">



                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <div class="iconbox-icon">
                                <img src="images/home1/01.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title"><a href="#">Short Time Result 7</a></h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p>
                                <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                    </div></div></section>




                                        </div>
                                    </li> --}}
                                </ul>
                                {{-- <span class="slider">
                                  <a href="javascript:void(0);" value="Prev" id="prev"><i class="material-icons">&#xE314;</i></a>
                                  <a href="javascript:void(0);" value="Next" id="next"><i class="material-icons">&#xE315;</i></a>
                                  
                                </span> --}}
                            </section>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</center>
<br><br><br><br><br><br><br><br>

























    
    {{-- <section class="iconbox-home clearfix">
        <div class="container">
            <div class="iconbox-features type2">
                <div class="iconbox iconbox-1">
                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <div class="iconbox-icon">
                                <img src="images/home1/01.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title"><a href="#">Short Time Result </a></h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p>
                                <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iconbox iconbox-2 active">
                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <div class="iconbox-icon">
                                <img src="images/home1/02.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title"><a href="#">We Stand For Justice</a></h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p>
                                <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iconbox iconbox-3">
                    <div class="bck-stand"></div>
                    <div class="bnc">
                        <div class="iconbox-wrap">
                            <div class="iconbox-icon">
                                <img src="images/home1/03.png" alt="images">
                            </div>
                            <div class="iconbox-content">
                                <h5 class="title"><a href="#">No Win No Pay</a></h5>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                                </p>
                                <div class="fl-btn">
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- iconbox --> --}}












    <div >
    <section class="about-home" >
        <div class="container" style=" padding: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding:50px;">
            <div class="row">
                <div class="col-lg-5" style=" padding: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  background-image: linear-gradient(#3c1e13,#cca776c4,white) !important;
                text-align: center;">
                    <div class="featured-post">
                        <div class="entry-image">
                            <img src="images/logo/new.png" alt="images">
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
                        <div class="title"><span style="font-size: 40px;font-weight:bold;text-align:right;">رؤيتنا</span></div>
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
    

    {{-- <div style="background-image: url('images/transparent-head/logo.png');background-repeat: no-repeat;float:left;"> --}}

    <section class="practice-featured">
        <div class="practice-area practice-area-style2" >
            <div class="container">
                <div class="title-section text-center">
                    <h3 class="flat-title">الخدمات</h3>
                    {{-- <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p> --}}
                </div>
                <div class="practice-area-wrap">
                    <div class="row">
                        <div id="services1">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/10.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/15.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">صياغة العقود الدولية والمحلية</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'syagha'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/8.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <a href="javascript:void(0)" id = 'estsharat'><img src="images/practice/16.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">الاستشارات القانونية والاقتصادية.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'estsharat'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/16.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <a href="javascript:void(0)" id = 'monaz3at'><img src="images/practice/17.png" alt="images"></a>
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
                                                <a href="#"><img src="images/services/4.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <a href="javascript:void(0)" id = 'sharekat'><img src="images/practice/18.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">تأسيس الشركات وهيكلتها بكافة انواعها.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'sharekat'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                                <a href="javascript:void(0)" id = 'eda3'><img src="images/practice/19.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">التعامل مع مصر للمقاصة والقيد والإيداع المركزي.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'eda3'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                                <a href="javascript:void(0)" id = 'ta7keem'><img src="images/practice/20.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">منازعات التحكيم التجاري الدولي والمحلي  </h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'ta7keem'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                                <a href="javascript:void(0)" id = 'tasdeek'><img src="images/practice/20.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">التصديق على الأوراق الرسمية.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'tasdeek'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                                <a href="javascript:void(0)" id = 'doyon'><img src="images/practice/20.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">تحصيل وتسوية الديون من القطاع المصرفي.</h4>
                                            {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                            <a href="javascript:void(0)" id = 'doyon'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                    <div id="services2">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="image-box-law">
                                    <div class="featured-post">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/services/service.png" alt="images"></a>
                                        </div>
                                        <div class="icon">
                                            <a href="javascript:void(0)" id = 'mas2olya'><img src="images/practice/15.png" alt="images"></a>
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
                                            <a href="javascript:void(0)" id = 'ta2menat'><img src="images/practice/16.png" alt="images"></a>
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
                                            <a href="javascript:void(0)" id = 'dawla'><img src="images/practice/17.png" alt="images"></a>
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
                                            <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/18.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="content-law">
                                        <h4 class="name">إقامة العمل وتصاريح عمل الأجانب.</h4>
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'tasaree7'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/19.png" alt="images"></a>
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
                                            <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/20.png" alt="images"></a>
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
                                            <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/20.png" alt="images"></a>
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
                                            <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/20.png" alt="images"></a>
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

                        <div id="services3">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="image-box-law">
                                        <div class="featured-post">
                                            <div class="entry-image">
                                                <a href="#"><img src="images/services/service.png" alt="images"></a>
                                            </div>
                                            <div class="icon">
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/15.png" alt="images"></a>
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
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/16.png" alt="images"></a>
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
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/17.png" alt="images"></a>
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
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/18.png" alt="images"></a>
                                            </div>
                                        </div>
                                        <div class="content-law">
                                            <h4 class="name">خدمة الضرائب والجمارك.</h4>
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'gamarek'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/19.png" alt="images"></a>
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
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/20.png" alt="images"></a>
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
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/20.png" alt="images"></a>
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
                                                <a href="javascript:void(0)" id = 'syagha'><img src="images/practice/20.png" alt="images"></a>
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
{{-- </div> --}}
</div>

	<div class="team" id="team">
		<div class="container">
			<h3 class="title" >فريق العمل</h3>
         
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
					<ul class="social-nav model-3d-0">
						<li>
							<a href="#" class="facebook">
								<div class="front">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<div class="front">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<div class="front">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<div class="front">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-4 team-grid">
					<div class="pic">
						<div class="stack twisted">
                            
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " class="img-responsive">
						</div>
					</div>
					<h4>Michael Loe</h4>
					<ul class="social-nav model-3d-0">
						<li>
							<a href="#" class="facebook">
								<div class="front">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<div class="front">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<div class="front">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<div class="front">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-4 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " class="img-responsive">
						</div>
					</div>
					<h4>Mary Jane</h4>
					<ul class="social-nav model-3d-0">
						<li>
							<a href="#" class="facebook">
								<div class="front">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<div class="front">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<div class="front">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<div class="front">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
							</a>
						</li>
					</ul>
				</div>
                <div class="col-xs-4 team-grid">
					<div class="pic">
						<div class="stack twisted">
							<img src="https://www.revolution.com/wp-content/uploads/2015/03/Meredith_Serious.jpg" alt=" " class="img-responsive">
						</div>
					</div>
					<h4>Mary Jane</h4>
					<ul class="social-nav model-3d-0">
						<li>
							<a href="#" class="facebook">
								<div class="front">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-facebook icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<div class="front">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-twitter icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<div class="front">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-google-plus icon-border-2"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<div class="front">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
								<div class="back">
									<i class="fa fa-rss icon-border-2"></i>
								</div>
							</a>
						</li>
					</ul>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>



     <section class="attorneys attorneys-style2" id="att" style="text-align:right;">
        <div class="container">
            <div class="top-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="content">
                            <div class="caption">فريق العمل</div>
                            <p class="description" style="font-size: 18px;">
                                نضم فريق عمل مكون من حوالي 20 محاميآ وما يقرب من 20 مساعدآ وموظفآ على درجة عالية من الحرفية والخبرة يعملون جنبآ الى جنب في أكثر من 40 مجالآ من مجالات المحاماة والاستشارات القانونية الموثقة 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
              
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="attorneys-info attorneys-hv-link mg-attorneys-home custom-align custom-end">
                            <div class="attorneys-content">
                                <div class="content-wrap">
                                    {{-- <h3 class="name"><a href="#">محامي رقم 3</a></h3> --}}
                                    {{-- <p class="position">محامي خبير</p> --}}
                                </div>
                            </div>
                            <div class="attorneys-avatar hv-link-content">
                                <div class="image image-full">
                                    <img src="images/attorneys/empty.jpg" alt="images">
                                </div>
                                <div class="overlay-box">
                                    {{-- <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="attorneys-info attorneys-hv-link mg-attorneys-home">
                            <div class="attorneys-avatar hv-link-content">
                                <div class="image image-full">
                                    <img src="images/attorneys/empty.jpg" alt="images">
                                </div>
                                <div class="overlay-box">
                                    {{-- <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="attorneys-content">
                                <div class="content-wrap">
                                    {{-- <h3 class="name"><a href="#">محامي رقم 4</a></h3> --}}
                                    {{-- <p class="position">محامي خبير</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="attorneys-info attorneys-hv-link mg-attorneys-home custom-align custom-end">
                            <div class="attorneys-content">
                                <div class="content-wrap" >
                                    {{-- <h3 class="name"><a href="#">محامي رقم 1</a></h3> --}}
                                    {{-- <p class="position">محامي خبير</p> --}}
                                </div>
                            </div>
                            <div class="attorneys-avatar hv-link-content">
                                <div class="image image-full">
                                    <img src="images/attorneys/empty.jpg" alt="images">
                                </div>
                                <div class="overlay-box">
                                    {{-- <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="attorneys-info attorneys-hv-link mg-attorneys-home">
                            <div class="attorneys-avatar hv-link-content">
                                <div class="image image-full">
                                    <img src="images/attorneys/empty.jpg" alt="images">
                                </div>
                                <div class="overlay-box">
                                    {{-- <div class="content">
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="attorneys-content">
                                <div class="content-wrap">
                                    {{-- <h3 class="name"><a href="#">محامي رقم 2</a></h3> --}}
                                    {{-- <p class="position">محامي خبير</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="view-all"><a href="#">view all</a></div> --}}
            </div>
        </div>
    </section><!-- attorneys --> 
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
                                        <input type="text" class="your-name" placeholder="الاسم كامل">
                                    </div>
                                    <div class="your-email mg-text">
                                        <input type="text" class="your-email" placeholder="الإميل">
                                    </div>
                                    <div class="your-phone mg-text">
                                        <input type="text" class="your-phone" placeholder="رقم التليفون">
                                    </div>
                                    <div class="your-phone mg-text " >
                                        <input type="date" class="date" placeholder="رقم التليفون">
                                    </div>
                                    {{-- <div class="subject mg-text">
                                        <input type="text" class="subject" placeholder="Subject">
                                    </div> --}}
                                    <div class="message-wrap mg-text">
                                        <textarea name="message" id="message" rows="8" placeholder="تفاصيل"></textarea>
                                    </div>
                                    <div class="fl-btn">
                                        <button class="hvr-vertical" style="font-size: 25px;">حجز</button>
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
                            <h4 class="heading" style="color:white;">احصل علي استشاره</h4>
                            <p class="description" style="font-size:25px;font-weight:bold;color:white;">
                                تغطي مجالات عمل وخدمات المؤسسة نطاقاً واسعآ من المجالات والتخصصات إذا تقدم المؤسسة حلول مبتكرة واستشارات موجهة للأفراد والشركات فى جميع المراحل بداية من متطلبات انظمة إدارة حقوق الملكية الفكرية ويضمن التعاون الموثق بين إدارات المكتب ان يصبح مركزآ مؤهلاً لتلبية احتياجات العملاء. 
                            </p>
                            <div class="flat-spacer" data-desktop="90" data-sdesktop="60" data-mobi="25" data-smobi="25"></div>
                            <div class="call-us">
                                <div class="text" style="color:white;">
                                    او اتصل بنا 
                                </div>
                                {{-- <h3 class="phone-number"> --}}
                                    <br>

                                    <a class="phone-number1" style="color:white;;font-size:40px;" href="tel:0201278823809">0201278823809</a><br><br>
                                    {{-- <a class="phone-number2" style="color:white;;font-size:40px;"  href="tel:02035902759">02035902759</a><br><br> --}}
                                    <a class="phone-number3" style="color:white;;font-size:40px;"  href="tel:0201272653225">0201272653225</a>
 
                                {{-- </h3> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- case-evaluation -->
    <section class="facts" style="background-image: linear-gradient( #3c1e136c,#CCA776,white) !important;padding-top:50px;">
        <div class="container">
            <div class="flat-counter"  >
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="counter">                      
                            <div class="content-counter">
                                <div class="numb-count-wrap">
                                    <span  class="numb-count" data-from="0" data-to="42" data-speed="2000" data-inviewport="yes">25</span>
                                </div>
                                <div class="name-count">سنوات الخبره</div>
                                <div class="icon-count"><img src="images/home1/09.png" alt="images"></div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter">                            
                            <div class="content-counter">
                                <div class="numb-count-wrap">
                                    <span class="numb-count" data-from="0" data-to="100" data-speed="2000" data-inviewport="yes">100</span>
                                    <span class="numb-bs">+</span>
                                </div>
                                <div class="name-count">Total Attorney</div>
                                <div class="icon-count"><img src="images/home1/10.png" alt="images"></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="counter">                            
                            <div class="content-counter">
                                <div class="numb-count-wrap">
                                    <span class="numb-count" data-from="0" data-to="2000" data-speed="2000" data-inviewport="yes">225</span>
                                    <span class="numb-bs">+</span>
                                </div>
                                <div class="name-count">عملاء سعداء</div>
                                <div class="icon-count"><img src="images/home1/11.png" alt="images"></div>
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
    {{-- <section class="testimonial clearfix">
        <div class="container-fluid">
            <div class="title-section text-center">
                <h3 class="flat-title">What People Say</h3>
                <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p>
            </div>
            <div class="slider testimonial-wrap testimonial-flexslider equalize sm-equalize-auto">
                <div class="col-left" style="display:none;">
                    <div class="themesflat-content-box" data-padding="0% 0% 0% 28%" data-sdesktoppadding="0% 0% 0% %0" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                        <div id="carousel-testimonial" class="flexslider">
                            <ul class="slides client-avatar translate-none"> 
                                <li class="avatar avatar-1">
                                    <img src="images/logo/17.png" alt="images">
                                </li>
                                <li class="avatar avatar-2">
                                    <img src="images/home1/18.png" alt="images">
                                </li>
                                <li class="avatar avatar-3">
                                    <img src="images/home1/19.png" alt="images">
                                </li>
                                <li class="avatar avatar-4">
                                    <img src="images/home1/20.png" alt="images">
                                </li>
                                <li class="avatar avatar-5">
                                    <img src="images/home1/21.png" alt="images">
                                </li> 
                                <li class="avatar avatar-6">
                                    <img src="images/home1/22.png" alt="images">
                                </li>
                                <li class="avatar avatar-7">
                                    <img src="images/home1/23.png" alt="images">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-right" >
                    <div class="themesflat-content-box" data-padding="5% 31.2% 0% 20%" data-sdesktoppadding="10% 10% 0% 0%" data-ssdesktoppadding="10% 10% 0% 0%" data-mobipadding="40px 0% 0% 0%" data-smobipadding="40px 0% 0% 0%">
                        <div id="slider-testimonial" class="flexslider">
                            <ul class="slides client-info">
                                <li>
                                    <div class="heading">They are professional</div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    </p>
                                    <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/home1/24.png" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">Mehbuba Khan</div>
                                            <div class="position">Web developer</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="heading">They are professional</div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    </p>
                                    <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/home1/24.png" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">Mehbuba Khan</div>
                                            <div class="position">Web developer</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="heading">They are professional</div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    </p>
                                    <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/home1/24.png" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">Mehbuba Khan</div>
                                            <div class="position">Web developer</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="heading">They are professional</div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    </p>
                                    <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/home1/24.png" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">Mehbuba Khan</div>
                                            <div class="position">Web developer</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="heading">They are professional</div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    </p>
                                    <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/home1/24.png" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">Mehbuba Khan</div>
                                            <div class="position">Web developer</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="heading">They are professional</div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    </p>
                                    <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/home1/24.png" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">Mehbuba Khan</div>
                                            <div class="position">Web developer</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="heading">They are professional</div>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    </p>
                                    <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/home1/24.png" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">Mehbuba Khan</div>
                                            <div class="position">Web developer</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- testimonial --><!-- testimonial -->  --}}
    {{-- <section class="partners">
        <div class="container">
            <div class="title-section text-center">
                <h3 class="flat-title">Our Partners</h3>
                <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p>
            </div>
            <table class="partners-table">
                <tbody>
                    <tr>
                        <td><img src="images/home1/26.png" alt="images"></td>
                        <td><img src="images/home1/27.png" alt="images"></td>
                        <td><img src="images/home1/28.png" alt="images"></td>
                        <td><img src="images/home1/29.png" alt="images"></td>
                        <td><img src="images/home1/30.png" alt="images"></td>
                        <td><img src="images/home1/31.png" alt="images"></td>
                    </tr>
                    <tr>
                        <td><img src="images/home1/32.png" alt="images"></td>
                        <td><img src="images/home1/33.png" alt="images"></td>
                        <td><img src="images/home1/34.png" alt="images"></td>
                        <td><img src="images/home1/35.png" alt="images"></td>
                        <td><img src="images/home1/36.png" alt="images"></td>
                        <td><img src="images/home1/37.png" alt="images"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section><!-- partners --> --}}
    {{-- style="background-image: url(images/transparent-head/footer.png)" --}}
    <footer id="footer" class="footer" style=" background-image: linear-gradient(to left,#cca776c4,#3c1e13d7) !important;">
        <div class="footer-widgets">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                     
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-contact mg-footer-mbb">
                                <h2 class="widget-title" style="text-align: right;">تواصل</h2>
                                <div class="content">
                                    <ul>
                                       
                                        <li style="text-align: right; "><span><a  style="color:white;" href="tel:201278823809">+201278823809</a> <br>
                                            <a  style="color:white;" href="tel:2035902759">+2035902759</a><br>
                                            <a  style="color:white;"  href="tel:201272653225">+201272653225</a>
                                            <a  style="text-align: right !important; color:white;" href="mailto:info@mostafaelroby.com">info@mostafaelroby.com</a>
                                            </span></li>
                                         
                
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-services mg-footer-mbb">
                                <h2 class="widget-title" style="text-align: right;">التعريف</h2>
                                <div class="content">
                                    <ul class="widget-menu" >
                                        <li style="text-align: right;"><a href="#" >من نحن</a></li>
                                        <li style="text-align: right;"><a href="#">فريق العمل</a></li>
                                        <li style="text-align: right;"><a href="#">التوظيف و التدريب</a></li>
                                        {{-- <li><a href="#">Practice Area</a></li>
                                        <li><a href="#">Help Guide</a></li>
                                        <li><a href="#">Tutorials</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-6 col-sm-6" >
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6" >
                            <div class="widget widget-text mg-footer-mbb">
                                <div class="content">
                                    <div class="images-logo" >
                                        <br>
                                        {{-- <img src="images/logo/l w.png" style="background-size:10% 10%;height:80px; " alt="images"> --}}
                                        <img src="images/logo/logo-01.png"  alt="images" style="float: right;" data-retina="images/logo/logo-01.png">
                                      <ul>
                                        <li style="color: white; text-align:right; float:right;"><span class="text " style="text-align: right;">170 طريق الحرية باب شرقي
                                            الأسكندرية</span></li>
                                           
                                      </ul>
                                    </div>
                                    {{-- <p>
                                        نغطي مجالات عمل وخدمات المؤسسة نطاقاً واسعآ من المجالات والتخصصات إذا تقدم المؤسسة حلول مبتكرة واستشارات موجهة للأفراد والشركات فى جميع المراحل بداية من متطلبات انظمة إدارة حقوق الملكية الفكرية ويضمن التعاون الموثق بين إدارات المكتب ان يصبح مركزآ مؤهلاً لتلبية احتياجات العملاء. 
                                    </p> --}}
                                    {{-- <div class="list-socials">
                                        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-services mg-footer-mbs">
                                <h2 class="widget-title">Help Desk</h2>
                                <div class="content">
                                    <ul class="widget-menu">
                                        <li><a href="#">Customer Care</a></li>
                                        <li><a href="#">Legal Help</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Donation</a></li>
                                        <li><a href="#">Child Care</a></li>
                                        <li><a href="#">Presonal Care</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-newsletter">
                                <h2 class="widget-title">Newsletter</h2>
                                <div class="content">
                                    <p>Polore eu fugiat nulla pariatur Excepteur sint occaecat cupidat at non tomake bole</p>
                                    <form action="#" class="form-email-footer">
                                        <input type="text" class="your-email" placeholder="Your email">
                                        <button class="btn-email">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="footer-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="widget widget-text mg-footer-mbb">
                                <div class="content">
                                    <div class="images-logo">
                                        <img src="images/footer/07.png" alt="images">
                                    </div>
                                    <p>
                                        Naboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proiden
                                    </p>
                                    <div class="list-socials">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-7 col-sm-7">
                            <div class="widget widget-twitter">
                                <h2 class="widget-title">Recent Tweets</h2>
                                <div class="content">
                                    <div class="tw-wrap">
                                        <div class="text-link">
                                            Lco lodoami tomader lok amitomader vai amar ar kisu naikeho <a href="#">http://bit.ly/7asF34</a>
                                        </div>
                                        <div class="text-time"><a href="#">@Fine Law</a>   -   2 hours ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="bottom-wrap">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="copyright" style="text-align: center;">
                                    All rights reserved  ©  <a href="#">Solasta</a>  2022
                                </div>
                            </div>
                            {{-- <div class="col-lg-7 col-md-12">
                                <div class="menu-footer">
                                    <ul>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Legal</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
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