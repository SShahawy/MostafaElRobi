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
        '<h3><b>تم ارسال بيانات التأسيس , سيتم التواصل</b></h3>',
          showConfirmButton:true,

          confirmButtonText:'<i style="padding:10px 50px;" class="btn-lg btn-warning">!تم</i> ',
          
      });
        </script>
    @endif

    <style>
        
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
    <div class="contact clearfix img-behind-hire">
        <div class="container second">

                <div class="title-section text-center ">
                      
                      <div class="scene" dir="rtl">

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
                            <h3 class="title texts">تأسيس شركات</h3>
                            <p>
                                نقوم بتوفير كافة الخدمات القانونية للشركات الجديدة والقائمة بالعمل كوكيل للشركة. ويوفر مكتبنا كل ما يتعلق بخدمات تأسيس الشركات لدينا كجزء من خدمتنا مساعدة الأفراد الأجانب والكيانات التجارية الأخرى لتأسيس وجودهم قانونا. 
                            </p>
                            <ul class="case-info">
                               
                                <li>
                                    <span class="categories " >محامون . مستشارون</span>
                                    <span class="rg-ct" >مصطفي الروبي</span>
                                </li>
                            </ul><br>
                            
                                <button type="button" data-toggle="modal" id="mediumButton" data-target="#mediumModal" class="all-buttons" >
                                    <span class="building">   ابدأ بتأسيس الشركه الاَن</span> 
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
                <h3 class="title texts">
                    خبرتنا  
                    <h3>

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
                        
                        <ul class="process-steps" style="margin-right: 20px;" > 
                            <li class="steps"   >
                                <div class="steps-name" dir="rtl">
                                    <span class="number" style=" ">١</span>
                                    <span class="name" > شركات أشخاص</span>
                                </div>
                            </li>
                            <li class="steps"  >
                                <div class="steps-name" dir="rtl">
                                    <span class="number" style=" ">٢</span>
                                    <span class="name" > شركات أموال </span>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    </div>

                    
                    <div class="case-results">
                        <div class="container">
                        <div class="flat-portfolio ">
                            <h3 class=" title texts" style="color: #A83E17;">شركات أشخاص</h3>
                            <p style="font-weight:bold; font-size:20px; text-align:center;">لشركات الاشخاص في القانون المصري أشكال ثلاثة هي شركة التضامن وشركة التوصية وشركة المحاصة ، وأهم مايميز هذه الشركات أنها تقوم علي الإعتبار الشخصي والثقة المتبادلة بين الشركاء ولشركات الأشخاص خصائص وأحكام مشتركة </p>
                                <ul class="flat-filter-isotype">
                                    <li class="active"><a href="#" data-filter=".tdamon"><button class="all-buttons" >شركة التضامن </button> </a></li>
                                    <li><a href="#" data-filter=".twsya"><button class="all-buttons" >شركات التوصية البسيطة</button></a></li>
                                    <li><a href="#" data-filter=".ma7asa"><button class="all-buttons" >
                                       شركات المحاصة
                                    </button></a></li>
                                  

                                </ul>
                            </div>
                            <br><br>
                            <div class="flat-courses clearfix isotope-courses" >
                                <div class="case clearfix tdamon" style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;" >شركة التضامن </h3>
                                        
                                        <p >
                                            هي الشركة التي تقوم بين شخصين فأكثر بقصد الإستغلال التجارى وذلك عن طريق عنوان مخصوص يضم إسم واحد أو أكثر من الشركاء ، ويكون كل شريك مسؤلا أمام الغير عن ديون الشركة مسؤلية شخصية في كل أمواله وبالتضامن مع الشركة ومع غيره من الشركاء .    
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p id="ti2" style="font-weight:500;color:#B5735D !important;">خصائص شركة التضامن </p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" >عدم جواز تداول حصة الشريك </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" > أن للشركة عنوانا يتألف من أسماء الشركة </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" >أن جميع الشركاء في شركة التضامن يكتسبون صفة التاجر</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٤</span>
                                                    <span class="name" > أن جميع الشركاء مسئولون عن إلتزاماتها وديونها مسئولية شخصية وتضامنية </span>
                                                </div>
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="case clearfix twsya " style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;">شركات التوصية البسيطة</h3>
                                        
                                        <p >
                                            
                                            هى الشركة التي تعقد بين شريك واحد أو أكثر مسؤلين ومتضامنين وبين شريك واحد أو أكثر يكونون أصحاب أموال فيها وخارجين عن الإدارة ويسمون موصين 
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p id="ti3" style="font-size: 25px;font-weight:500;color:#B5735D !important;">
                                             خصائص شركة التوصية البسيطة
                                        </p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" >	عدم جواز إنتقال حصة الشريك </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" > 	صفة التاجر </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" >عنوان الشركة </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٤</span>
                                                    <span class="name" >المسؤلية المحدودة للشريك الموصي </span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="case clearfix ma7asa" style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;">شركات المحاصة</h3>
                                        
                                        <p >
                                            هى شركة مستترة تنعقد بين شخصين أو أكثر يقدم كل منهما حصة من مال أو عمل للقيام بعمل واحد أو سلسلة من الأعمال دون أن تكتسب هذه الشركة الشخصية المعنوية أو تخضع لإجراءات الشهر وذلك لإقتسام مايشأ عن هذه الشركة من أرباح أو خسائر .
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p style="font-size: 25px;font-weight:500">خصائص شركة المحاصة </p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" >	أنها شركة مستترة لا عنوان لها</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" >إنعدام شخصيتها القانونية</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" >أنها من شركات الأشخاص </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٤</span>
                                                    <span class="name" >أنها من الشركات التجارية </span>
                                                </div>
                                            </li>
                                         

                                        </ul>
                                    </div>
                                </div>
                                
                            
                        </div>
                    </div>

                </div>


                    <div class="case-results">
                        <div class="container">
                        <div class="flat-portfolio ">
                            <h3 class=" title texts" style="color: #A83E17;">شركات الأموال</h3>
                            <p style="font-weight:bold; font-size:20px; text-align:center;">
                                هي شركات تقوم علي الإعتبار المالي ويتراجع فيها الإعتبار الشخصي . والشكل الذى تتخذه هذه الشركات هو     
                            </p>
                                <ul class="flat-filter-isotype">
                                    <li class=""><a href="#" data-filter=".mosahma"><button class="all-buttons" >شركات المساهمة</button> </a></li>
                                    <li><a href="#" data-filter=".asehom"><button class="all-buttons" >شركات التوصية بالأسهم</button></a></li>
                                    <li><a href="#" data-filter=".ma7doda"><button class="all-buttons" >شركات ذات المسئولية المحدودة </button></a></li>
                                  

                                </ul>
                            </div>
                            <br><br>
                            <div class="flat-courses clearfix isotope-courses" >
                                <div class="case clearfix mosahma" style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;" >شركات مساهمة</h3>
                                        
                                        <p>
                                            تعرف بأنها شركة ينقسم رأسمالها إلي أسهم متساوية القيمة يمكن تداولها علي النحو المبين بالقانون , وتقتصر مسؤلية المساهم فيها علي أداء قمة الأسهم التي إكتتب فيها ولا يسأل عن ديون الشركة إلا في حدود ما اكتتب فيه من أسهم وتتخذ لها إسم تجارى يشتق من الغرض من إنشائها     
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p id="ti2" style="font-weight:500;color:#B5735D !important;">وخصائص شركة المساهمة </p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" >شركة المساهمة من شركات الأموال</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" >شركة المساهة نظام قانوني </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" >ضعف نية المشاركة لدى الشركاء المساهمين</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٤</span>
                                                    <span class="name" > 	إسم شركة المساهمة </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٥</span>
                                                    <span class="name" > رأس مال شركة المساهمة %</span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٦</span>
                                                    <span class="name" >مسؤلية الشريك المساهم </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٧</span>
                                                    <span class="name" >عدم إكتساب الشريك المساهم لصفة التاجر </span>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="case clearfix asehom " style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;">شركات التوصية بالأسهم</h3>
                                        
                                        <p >
                                            هى شركة يتكون رأس مالها من حصة أو أكثر يملكها شريك متضامن أو أكثر وأسهم متساوية القيمة يكتتب فيها مساهم أو أكثر ويمكن تداولها علي الوجه المبين في القانون , ويسأل الشريك أو الشركاء المتضامنون عن إلتزامات الشركة مسؤلية غيرمحدودة أما الشريك المساهم فلا يكون مسئولا إلا في حدود قيمة الأسهم التي إكتتب فيها ، ويتكون عنوان الشركة منإسم أو أكثر من أسماء الشركاء المتضامنين دون غيرهم .
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p id="ti3" style="font-size: 25px;font-weight:500;color:#B5735D !important;">خصائص شركة التوصية بالأسهم </p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" >تضم نوعين من الشركاء </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" > عنوان الشركة </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" >رأس مال الشركة </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="case clearfix ma7doda" style="width:100% !important;">  
                                    <div class="process  mg-case-details">
                                        <h3 class="title texts" style="color:#B5735D !important;">شركات ذات المسئولية المحدودة</h3>
                                        
                                        <p >
                                            هي شركة لا يزيد عدد الشركاء فيها علي خمسين شريكا لا يكون كل منهم مسئولا إلا بقدر حصته . وأنه لا يجوز تأسيسها أو زيادة رأس مالها أو الإقتراض لحسابها عن طريق الإكتتاب العام ولا يجوز لها إصدارأسهم أو سندات قابلة للتداول , ويكون إنتقال حصص الشركاء فيها خاضعا لاسترداد الشركاء طبقا للشروط الخاصة التي يتضمنها عقد المشاركة فضلا عن الشروط المقررة في هذا القانون ويكون لها أن تتخذ إسما خاصا ويجوز أن يكون إسمها مستمدا من غراضها ويجوز أن يتضمن عنوانها إسم شريك أو اكثر
                                        </p>
                                        <hr style="border:1px #CCA776 solid;">
                                        <p id="ti3" style="font-size: 25px;font-weight:500;color:#B5735D !important;">خصائص الشركة ذات المسؤلية المحدودة  </p>

                                        <ul class="process-steps"> 
                                            <li class="steps">
                                                <div class="steps-name" >
                                                    <span class="number" style="float:right;margin-left:10px;">١</span>
                                                    <span class="name" >عنوان الشركة  </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٢</span>
                                                    <span class="name" >المسؤلية المحدودة للشركاء  </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٣</span>
                                                    <span class="name" >عدم إكتساب الشريك صفة التاجر </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٤</span>
                                                    <span class="name" > حظر الإكتتاب العام أو إصدار أوراق مالية قابلة للتداول  </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٥</span>
                                                    <span class="name" > تقييد التنازل عن حصة الشريك </span>
                                                </div>
                                            </li>
                                            <li class="steps">
                                                <div class="steps-name">
                                                    <span class="number" style="float:right;margin-left:10px;">٦</span>
                                                    <span class="name" >	إستمرارالشركة رغم الشريك أو إفلاسه أو إعساره أو الحجر عليه </span>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>








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
        
                        
                        <form action="{{ route('company') }}" method="post" enctype="multipart/form-data">
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
                                            <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
                                    @else
                                        <input type="text" name="{{$key}}" class="form-control">
                                        
                                    @endif
                                </div>
                                <label for="{{$key}}" class="col-sm-4 col-form-label text-right font-weight-bold required"> : {{ $value }}</label>

                            </div>
                        @endforeach
                        <div class="modal-footer">
                            <div class="modal-button-default">
                                <input type="submit" value="تقديم البيانات!" class="all-buttons btn btn-primary">
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


    
    </div>
    
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    
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

    <script>
       
    </script>
</body>
@include('pages.footer')
@include('pages.modals._modal_com_show')
</html>