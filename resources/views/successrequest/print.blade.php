<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
    <style>
    
    /* body { background: white; }
    	.spaces {
    		white-space: pre-wrap;
		}
         */
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        font-size: 16px;
        line-height: 24px;
        /* font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; */
        font-family: 'Times New Roman',sans-serif,'Trational Arabic',Arial,tahoma;
        color: black;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <div class="row">
            <div class="col p-0 m-0">
              <p >الجمهورية العربية السورية<br>
              وزارة التعليم العالي<br>
            جامعة تشرين<br>
          كلية الهندسة المعلوماتية</p>
            </div>
            <div class="col text-center p-0 m-0">
              <img src="{{ asset('/images/index.jpg') }}" width="150px" height="150px">
            </div>
            <div class="col text-right p-0 m-0">
              <p >Syrian Arab Republic<br>
                Ministry of Higher Education<br>
                Tishreen University<br>
                Faculty of Informatics Engineering
              </p>
            </div>
          </div>
          <br>
          <div class="row">
            <p >الرقم: {{$document->description['number']}}
              <br>
              التاريخ: {{$document->description['date']}}
            </p>
          </div>
          <br>
          <div class="row d-flex justify-content-center mb-2">
            <h2 >طلب الحصول على وثيقة ترفع</h2>
          </div>
  
          <div class="row d-flex justify-content-center mb-1">
              <h2 >السيد الدكتور عميد الكلية</h2>
            </div>
  
  
          <div class="row">
              {{-- <p width="500px"></p> --}}
              {{-- <p style="font-size:180%;"> --}}
              <p>
              مقدمة الطالب &nbsp; {{$document->description['student_shortname']}} &nbsp; &nbsp; بن &nbsp; {{$document->description['father_name']}} &nbsp; &nbsp;  السنة &nbsp; {{$document->description['study_year']}} &nbsp; &nbsp; القسم/الشعبة &nbsp; {{$document->description['department']}} &nbsp; &nbsp;
              الرقم الجامعي &nbsp; {{$document->description['university_id']}} <br>
              أعرض ما يلي: <br>
              أرجو التفضل بالموافقة على منحي وثيقة دوام للعام الدراسي &nbsp; {{$document->description['year']}}
              </p>
          </div>
  
          <div class="row d-flex justify-content-center mb-2">
              الطوابع القانونية
            </div>
  
          <div class="row mb-3">
              <div class="col-4 "><label for="" class=""> طابع مالي</label> </div>
              <div class="col-4"><label for="" class=""> طابع نقابة</label></div>
              <div class="col-4"><label for="" class=""> طابع بحث علمي</label></div>
          </div>
          <div class="row d-flex justify-content-end mb-2">
            <p>
              اسم الطالب وتوقيعه: {{$document->description['student_name']}}
            </p>
          </div>
          
          <div class="row">
            <p>
              مطالعة شعبة الامتحانات: {{$document->description['examinations_review']}}
            </p>
          </div>
          <div class="row d-flex justify-content-end">
            <p>
              الاسم والتوقيع: {{$document->description['examinations_name']}}
            </p>
          </div>
  
          <div class="row d-flex justify-content-end mb-2">
            <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
          </div>
  
          <div class="row d-flex justify-content-end">
            <p>
              عميد كلية الهندسة المعلوماتية
              <br>
              {{$document->description['dean_of_theFaculty']}}
            </p>
          </div>
  
          <div class="row d-flex justify-content-end">
            <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
        </div>
    </div>
    <script>
        window.print();
      </script>  
</body>
</html>