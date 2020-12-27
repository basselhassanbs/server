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
          <div class="row">
            <p>الرقم: {{$document->description['number']}}
              <br>
              التاريخ: {{$document->description['date']}}
            </p>
          </div>
          <br>
          <div class="row d-flex justify-content-center">
            <h1>وثيقة دوام</h1>
          </div>
          <div class="row">
              <p width="500px">إن الطالب &nbsp; {{$document->description['student_name']}} &nbsp; &nbsp; المولود في &nbsp; {{$document->description['birth_place']}} &nbsp; &nbsp; عام &nbsp; {{$document->description['birth_date']}} &nbsp; &nbsp; والمتمتع بالجنسية العربية &nbsp; {{$document->description['nationality']}} &nbsp; &nbsp;
                طالب مسجل في كلية &nbsp; {{$document->description['faculty_name']}} <br> السنة &nbsp; {{$document->description['study_year']}} &nbsp; &nbsp; قسم &nbsp; {{$document->description['department']}} &nbsp;&nbsp; للعام الدراسي &nbsp; {{$document->description['year']}} &nbsp; &nbsp;
              رقمه الجامعي &nbsp; {{$document->description['university_id']}} &nbsp; &nbsp; هو مداوم بانتظام لغاية &nbsp; {{$document->description['stay_until']}}</p>
          </div>
  
          <div class="row mt-5">
            <div class="col d-flex justify-content-start">
              <p>منظم الوثيقة
                <br>
                 الاسم والتوقيع {{$document->description['doc_organizer']}}
                 <br>
              </p>
              {{-- <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px"> --}}
            </div>
            <div class="col d-flex justify-content-end">
              <p>
                رئيس شعبة شؤون الطالب
                <br>
                الاسم والتوقيع {{$document->description['head_student_affairs_division']}}
              </p>
              {{-- <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px"> --}}
            </div>
          </div>
          
  
          <div class="row">
            <div class="col d-flex justify-content-start">
              <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
            </div>
            <div class="col d-flex justify-content-end">
              <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
            </div>
          </div>
  
          <br>
          <div class="row d-flex justify-content-end">
            {{-- <div class="col d-flex justify-content-end"> --}}
              <p>
                عميد كلية الهندسة المعلوماتية
                <br>
                الاسم والتوقيع {{$document->description['dean_of_theFaculty']}}
              </p>
            {{-- </div> --}}
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
