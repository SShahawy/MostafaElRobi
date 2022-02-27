
<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <style>
        /* body {
          font-family: 'Source Sans Pro', sans-serif;
        } */
        .img-behind-hire {
          background:  url("images/head/sharekat.jpg");
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

                <div class="title-section text-center ">
                      
                      <div class="scene">

                        <div class="current">
                            <div class="cube">
                                <div class="face">تأسيس الشركات</div>
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

    <div class="case-details" style="text-align: right;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="introduction mg-case-details d-md-flex">
                        <div class="featured-post">
                            <div class="entry-image">
                                <img src="images/services/company2.jpg" style="border: 0.1px white solid;box-shadow:1px 2px 15px black;border-radius : 4px;" alt="images">
                            </div>
                        </div>
                        <div class="case-dt introduction-content">
                            <h3 class="title texts"><a href="#">تأسيس شركات</a></h3>
                            <p>
                                نقوم بتوفير كافة الخدمات القانونية للشركات الجديدة والقائمة بالعمل كوكيل للشركة. ويوفر مكتبنا كل ما يتعلق بخدمات تأسيس الشركات لدينا كجزء من خدمتنا مساعدة الأفراد الأجانب والكيانات التجارية الأخرى لتأسيس وجودهم قانونا. 
                            </p>
                            <ul class="case-info">
                                {{-- <li>
                                    <span class="categories">Case Group</span>
                                    <span class="rg-ct">Family Law</span>
                                </li>
                                <li>
                                    <span class="categories">Client Name</span>
                                    <span class="rg-ct">Alexender Flame</span>
                                </li> --}}
                                <li>
                                    <span class="categories nav-texts" >محامون . مستشارون</span>
                                    <span class="rg-ct" >مصطفي الروبي</span>
                                </li>
                            </ul><br>
                            
                                {{-- <div class="btn4-wrapper"><div class="myBtn4"><a href="#">ابدأ بتأسيس الشركه الاَن</a></div></div> --}}
                                <button type="button" data-toggle="modal" id="mediumButton" data-target="#mediumModal" class=" all-buttons" >
                                    <i class="fa fa-map-marker"></i>
                                    أسس شركتك الاَن
                                </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="company" >
 
            <div class="container" >
                <div class="row">
                    <div class="col-lg-12 whitebox wow fadeIn">
                <h1 class="texts">
                    خبرتنا  
                    <h1>

                        <p style="font-size: 20px;line-height:60px;">
                            خبرتنا المتخصصة ومعرفتنا الواسعة تؤهلنا لعمل إجراءات تأسيس الشركات بسرعة وكفاءة. يمكننا تسجيل الشركة المحدودة بالاسهم وشركة محدودة بالضمان و أيضا تسجيل الشركات الاجنبية فى مصر
ويمكن تأسيس الشركات بطريقة من عدة طرق وعلي حسب نوع الشركة الذي يختاره مالكها, وسيتحدد معه نوع االمسؤولية القانونية لأصحابها, والمعاملة الضريبة.
                        <br><b>وفيما يلى ابرز الخيارات الشائعة للشركات وسماتها المميزة </b>
 
                        </p>
                </div>
            </div>
        </div>
        
                </section>



                   <br>
                    <div class="challange case-dt mg-case-details">
                        <div class="container">
                        <h3 class=" title texts">انواع الشركات</h3>
                        {{-- <p>
                            Duis aute irure dolor in reprehenderit in vount in culpa qui officia deserunt mollit anim id est laborum. Sediste natus error sit voluptatem accusantium doloremque laudariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                        </p> --}}
                        <ul class="process-steps" style="margin-right: 20px;" > 
                            <li class="steps"   >
                                <div class="steps-name" dir="rtl">
                                    <span class="number" style=" ">١</span>
                                    <span class="name" > شركات المساهمة</span>
                                </div>
                            </li>
                            <li class="steps"  >
                                <div class="steps-name" dir="rtl">
                                    <span class="number" style=" ">٢</span>
                                    <span class="name" > شركات ذات الملكية الفردية </span>
                                </div>
                            </li>
                            <li class="steps"   >
                                <div class="steps-name" dir="rtl">
                                    <span class="number" style=" ">٣</span>
                                    <span class="name" > شركات ذات المسئولية المحدودة</span>
                                </div>
                            </li>
                            <li class="steps"   >
                                <div class="steps-name" dir="rtl">
                                    <span class="number" style=" ">٤</span>
                                    <span class="name" >شركات التوصية البسيط</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>




                    <div class="case-results">
                        <div class="container">
                        <div class="flat-portfolio">
                                <ul class="flat-filter-isotype">
                                    <li class="active"><a href="#" data-filter=".mosahma"><button style="background-color:#B5735D !important;" class="all-buttons btn-read-more" >شركات المساهمة</button> </a></li>
                                    <li><a href="#" data-filter=".fardya"><button style="background-color:#B5735D !important;" class="all-buttons btn-read-more ">الملكية الفردية</button></a></li>
                                    <li><a href="#" data-filter=".ma7doda"><button style="background-color:#B5735D !important;" class="all-buttons btn-read-more">شركات ذات المسئولية المحدودة </button></a></li>
                                    <li><a href="#" data-filter=".baseeta"><button style="background-color:#B5735D !important;" class="all-buttons btn-read-more"> شركات التوصية البسيطة </button></a></li>

                                </ul>
                            </div>
                            <div class="flat-courses clearfix isotope-courses" >
                                <div class="case clearfix mosahma" style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" >شركات مساهمة</h3>
                                        
                                        <p >
                                            تعتبر شركات المساهمة كيان تجارى يمتلكه المساهمون. يمتلك حاملي الأسهم حصة في الشركة تتناسب مع ما يمتلكوه من أسهم الشركة (سندات الملكية). ويسمح هذا بالتفاوت فى الحصص المملوكة لبعض المساهمين الذين يملكون نسبة اكبر من أسهم الشركاء الآخرين, يستطيع حاملي الأسهم نقل اسهمهم للغير دون التأثير علي استمرار وجود الشركة    
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p id="ti2" style="font-weight:500;color:#B5735D !important;">المطلوب لتأسيس الشركه</p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" > •	شهادة من البنك بإيداع 10% من قيمة رأس المال</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" > •	صور من البطاقات الشخصية أو جوازات السفر للمؤسسين أو شهادة ميلاد بالنسبة للقاصر. (إذا وجد)</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" > •	توكيل من المؤسسين</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٤</span>
                                                    <span class="name" > •	عقد الإيجار الأصلي بإسم الشركة الجديدة بعد الحصول علي السجل التجاري شريطة أن يكون تاريخة مسجل في الشهر العقاري بغرض الحصول علي البطاقة الضريبية للشركة</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٥</span>
                                                    <span class="name" > •	الحد الأدنى من رأس المال المسموح به “مائتين وخمسين الف جنيه مصرى (نسبة مساهمة الاجانب يمكن 100%</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٦</span>
                                                    <span class="name" > •	يجب الا يقل عدد أعضاء مجلس الادارة عن “ثلاثة”, ويمكن أن يكون جميع اعضاء مجلس الإدارة من أجانب</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٧</span>
                                                    <span class="name" > •	أدنى قيمة العضوية لضمان حصة كل عضو “5000 جنيه مصرى”</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٨</span>
                                                    <span class="name" > •	يمكن لمجلس الإدارة ان يشمل علي الأكثر اثنين من ذوى الخبرة الذين لا يستوفون النصاب القانونى</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٩</span>
                                                    <span class="name" > •	يجب الا يقل عدد مؤسسو الشركة عن ثلاث (3) أشخاص طبيعين أو اعتباريين, شريطة وجود الأهلية </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">١٠</span>
                                                    <span class="name" > القانونية لمؤسسى الشركة من الأشخاص الطبيعية وأن يكون الاشخاص الاعتباريين كيانات منفصلة<br>
                                                        •	يجب الا تقل قيمة السهم عن خمسة جنيهات
                                                        </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">١١</span>
                                                    <span class="name" > •	يجب الا تزيد قيمة السهم عن ألف جنية</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">١٢</span>
                                                    <span class="name" > •	يجب الا يقل رأس مال الشركة المدفوع عن 10% من رأس المال المسموح به</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">١٣</span>
                                                    <span class="name" > •	يجب الا تقل قيمة الأسهم النقدية عن 25% من قيمة رأس المال المسموح به</span>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="case clearfix fardya " style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;">الملكية الفردية</h3>
                                        
                                        <p >
                                            تعتبر الشركات ذات الملكية الفردية الخيار المفترض أن تكون مالكا وحيداً. مع كون هذا الخيار الأقل شيوعاً والأقل تعقيداً يالنسبة لإجراءات تأسيسها عن الشركات التجارية الاخرى   
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p id="ti3" style="font-size: 25px;font-weight:500;color:#B5735D !important;">المطلوب لتأسيس الشركه</p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" > •	صورة من البطاقة الشخصية أو جواز السفر للمؤسسين أو مالك الشركة وشهادة الميلاد بالنسبة للقاصر(إذا وجد)</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" > •	توكيل من مؤسسي الشركة</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" >•	عقد الإيجار الأصلي أو التعهد بتقديمة خلال سنة واحدة من تاريخ تسجيله في الشهر العقاري</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="case clearfix ma7doda" style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;">شركات ذات المسئولية المحدودة</h3>
                                        
                                        <p >
                                            تختلف الشركة ذات المسئولية المحدودة عن الملكية الفردية في أن مسئولية الشركاء تنحصر في حدود مقدار حصصهم في رأس مال الشركة فقط وبذلك يوفر هذا النوع من الشركات حماية من المسئولية التضامنية ولكن توجد حالات استثنائية يتحمل فيها الشركاء مسئولية تضامنية كاستعمال طرق إحتيالية أو غير قانونية أو لم يتم الفصل بين أنشطة الشركة والذمة المالية الشخصية.
ووفقا للقانون المصري لا يسمح للبنوك وشركات التأمين والمنطمات الغير الربحية أن تؤسس شركة ذات مسئولية محدودة

                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        {{-- <p style="font-size: 25px;font-weight:500">المطلوب لتأسيس الشركه</p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">1</span>
                                                    <span class="name" > •	صورة من البطاقة الشخصية أو جواز السفر للمؤسسين أو مالك الشركة وشهادة الميلاد بالنسبة للقاصر(إذا وجد)</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">2</span>
                                                    <span class="name" > •	توكيل من مؤسسي الشركة</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">3</span>
                                                    <span class="name" >•	عقد الإيجار الأصلي أو التعهد بتقديمة خلال سنة واحدة من تاريخ تسجيله في الشهر العقاري</span>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="case clearfix baseeta" style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;">شركات ذات المسئولية المحدودة</h3>
                                        
                                        <p >
                                            تعتبر شركات التوصية البسيطة إذا كانت مسئولية كل الشركاء أو بعضهم مسئولية محدودة , لذلك فشركة التوصية من حيث الشكل تعتبر مناسبة إذا كنت لا ترغب في البقاء كمالك وحيد.
تكون مسئولية الشركاء في شركة التوصية مسئولية شخصية عن ديون الشركة, ويكون أي شريك مسئول مسؤلية كاملة عن الشركة ويستطيع أي شريك أيضا أن يتخذ قرارات قد تؤثر الشركة.
فى شركة التوصية البسيطة يتحمل أحد الشركاء مسؤولية اتخاذ القرارات ويكون مسؤولا مسئولية شخصية عن ديون الشركة أما باقي الشركاء يكونوا بمثابة مجرد مستثمرين فى الشركة. كل فرد لا يكون مسؤولا إلا فى حدود حصته في رأس المال المستثمر وبرغم من أن الشكل العام لشركة التضامن من الممكن أن يتغير إلا أن كل شريك يكون مسئولا فقط عن حصته في رأس المال


                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        {{-- <p style="font-size: 25px;font-weight:500">المطلوب لتأسيس الشركه</p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">1</span>
                                                    <span class="name" > •	صورة من البطاقة الشخصية أو جواز السفر للمؤسسين أو مالك الشركة وشهادة الميلاد بالنسبة للقاصر(إذا وجد)</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">2</span>
                                                    <span class="name" > •	توكيل من مؤسسي الشركة</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">3</span>
                                                    <span class="name" >•	عقد الإيجار الأصلي أو التعهد بتقديمة خلال سنة واحدة من تاريخ تسجيله في الشهر العقاري</span>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </div>
                            </div>
                            {{-- <div class="flat-pagination text-center">
                                <ul>
                                    <li><a href="#" class="numbers">1</a></li>
                                    <li><a href="#" class="numbers">2</a></li>
                                    <li><a href="#" class="numbers">3</a></li>
                                    <li><a href="#" class="numbers current">
                                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div><!-- case-results -->







                    

                </div>
                {{-- <div class="col-lg-3 col-md-12">
                    <div class="sidebar-case">
                        <div class="widget">
                            <h3 class="widget-title"><span>Similar Case</span></h3>
                        </div>
                        <div class="similar-case">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="images/case/11.png" alt="images">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="title"><a href="#">Eamod tempor inc ididunt</a></h3>
                            </div>
                        </div>
                        <div class="similar-case">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="images/case/12.png" alt="images">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="title"><a href="#">Tumi jodi nodi hoy ami hobo</a></h3>
                            </div>
                        </div>
                        <div class="similar-case">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="images/case/13.png" alt="images">
                                </div>
                            </div>
                            <div class="case-content">
                                <h3 class="title"><a href="#">Tomar chatok chokhe</a></h3>
                            </div>
                        </div>
                        <div class="img-media">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="images/case/14.png" alt="images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div><!-- case-details -->








    <!-- medium modal -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <br><br><br><br><br><br>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">أسس شركتك</h4>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <div class="alert alert-danger alert-dismissable d-none" id="js-div-alert">
                            <p>Error message</p>
                        </div>
        
                        {{-- <div class="form-group row alert alert-success d-none" id="js-div-notification">
                            <div class="col-sm-10">
                                <label id="js-label-verified-address"></label>
                                <input type="hidden" id="js-hidden-confirm-address" value="" />
                                <input type="hidden" id="js-hidden-confirm-city" value="" />
                                <input type="hidden" id="js-hidden-confirm-state" value="" />
                                <input type="hidden" id="js-hidden-confirm-zip" value="" />
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary btn-block" id="js-btn-save-address">Fill</button>
                            </div>
                        </div> --}}
                        {{-- {{ Form::open(array('route' => 'company', 'method' => 'post')) }} --}}
                        <form action="{{ route('company') }}" method="post">
                        @csrf
                        @foreach ([
                                'type' => 'نوع الشركه',
                                'count' => 'عدد الشركاء',
                                'work' => 'النشاط و الغرض',
                                'name' => 'اسمه التجاري',
                                'money' => 'ميكنه رأس المال',
                                'location' => 'مقر الشركه',
                                'email' => 'البريج الإلكتروني',
                                'phone' => 'رقم التليفون',

                                'attach' => 'المستندات',
                                ] as $key => $value)
                            <div class="form-group row" id="js-div-{!! $key !!}">
                                
                                <div class="col-sm-8">
                                    @if ($key == 'type')
                                        {!! Form::select($key,
                                        array(
                                            '' => '--- اختر نوع الشركه ---',
                                            'شركه مساهمة'=>'شركه مساهمة',
                                            'شركه ذات مسئوليه محدودة'=>'شركه ذات مسئوليه محدودة',
                                            'شركه توصيه بالاسهم'=>'شركه توصيه بالاسهم',
                                            'شركه تضامن'=>'شركه تضامن',
                                            'شركه توصيه بسيطة'=>'شركه توصيه بسيطة',
                                            ), ['class' => 'form-control', 'style' => 'padding-bottom:25px;']) !!}


                                            @elseif($key == 'attach')
                                            {{-- {!! Form::file('attach',['class' => 'dropzone']) !!} --}}
                                            <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
                                            {{-- {!! Form::label('attach', "ارفع مستنداتك", ['class' => 'col-sm-5 col-form-label text-right font-weight-bold required' ]) !!} --}}
                                    @else
                                        {{-- {!! Form::text($key, NULL, ['class' => 'form-control', ]) !!} --}}
                                        <input type="text" name="{{$key}}" class="form-control">
                                        
                                    @endif
                                </div>
                                <label for="{{$key}}" class="col-sm-4 col-form-label text-right font-weight-bold required"> : {{ $value }}</label>
                                {{-- {!! Form::label($key, ' : '.$value, ['class' => 'col-sm-4 col-form-label text-right font-weight-bold required' ]) !!} --}}

                            </div>
                        @endforeach
                        <div class="modal-footer">
                            <div class="modal-button-default">
                                <input type="submit" value="تقديم البيانات!" class="all-buttons btn btn-primary">
                                {{-- {{ Form::submit('تقديم البيانات!',['class'=> ' all-buttons btn btn-primary']) }} --}}
                                {{-- <button type="button" class="btn btn-primary" id="js-btn-save-new-location">تقديم البيانات</button> --}}
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <script>

        // display a modal (medium modal)
        $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

    </script>


    {{-- <div class="featured-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="content">
                        <h6 class="title">Lets solve your problem today</h6>
                        <p>Lorem ipsum dolor sit amet, consecte dunt ut labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="fl-btn">
                        <a href="#" class="hvr-vertical">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- featured-banner --> --}}
    </div>
    
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script> --}}
    <script src="javascript/jquery-isotope.js"></script>
    <script src="javascript/equalize.min.js"></script>
    <script src="javascript/jquery-countTo.js"></script>
    <script src="javascript/flex-slider.min.js"></script>
    
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
    <script src="javascript/main.js"></script>

    {{-- <script>
        var drop = new Dropzone('.dropzone', {
          createImageThumbnails: false,
          addRemoveLinks: true,
          url: "{{ route('company') }}",
          headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
          }
        });
      </script> --}}
</body>
@include('pages.footer')
@include('pages.modals._modal_com_show')
</html>