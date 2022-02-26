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
            background:  url("images/head/service.jpg");
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


                       <div class="scene">

                        <div class="current">
                            <div class="cube">
                                <div class="face">الخدمات</div>
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
   
        
    
    <section class="practice-featured" id="services">
        <div class="practice-area practice-area-style2" >
            <div class="container">
                <div class="title-section text-center">
                    <h3 class="texts" >الخدمات</h3>
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
                                                <a href="javascript:void(0)" id = ''><img src="images/services/scale.png"  alt="images"></a>
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
                                                <img src="images/services/scale.png" alt="images" >
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
                                            <a href="/company-open" id = 'sharekat'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagek2 row">
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
                            <div class="pagekk3 row">
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
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'mas2olya'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'ta2menat'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                        {{-- <p class="description">يستوعب الفريق احتياجات العملاء العقارية ويتبع منهجآ عمليآ فى حل المشكلات ذات الصلة</p> --}}
                                        <a href="javascript:void(0)" id = 'dawla'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'tasaree7'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="pagem4 row">
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
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = '3akary'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'e5tra3'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                        {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                        <a href="javascript:void(0)" id = 'gensya'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                        {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                        <a href="javascript:void(0)" id = 'elec'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>

                        <div id="services3">
                            <div class="row">
                                <div class="pagem5 row">
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'zawag'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'hegra'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">يستوعب الفريق احتياجات العملاء العقارية ويتبع منهجآ عمليآ فى حل المشكلات ذات الصلة</p> --}}
                                            <a href="javascript:void(0)" id = 'petrol'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'gamarek'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="pagem6 row">
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'cinema'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p> --}}
                                            <a href="javascript:void(0)" id = 'amlaak'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                            <a href="javascript:void(0)" id = 'tamalok'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
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
                                            {{-- <p class="description">تضم المؤسسة فريقآ متحصصأ فى إعداد وصياغة ومراجعة كافة انواع العقود القانونية وترجمتها من العربية الى اللغات الاجنبية والعكس</p> --}}
                                            <a href="javascript:void(0)" id = 'osra'><span style="font-weight:bold;font-size:20px;">للمزيد اضغط هنا</span></a>
                                        </div>
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