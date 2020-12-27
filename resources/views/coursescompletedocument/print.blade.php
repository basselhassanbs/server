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
        max-width: 700px;
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
            <h2>وثيقة إنهاء مقررات</h2>
          </div>

          <div class="row d-flex justify-content-center mb-2">
            <p>(خاصة لدرجة الماجستير ، ودبلوم التأهيل التربوي)</p>
          </div>
          
          <div class="row">
              {{-- <p width="500px"></p> --}}
              {{-- <p style="font-size:180%;"> --}}
              <p>
                  إن الطالب &nbsp; {{$document->description['student_name']}} &nbsp; &nbsp; مسجل في السنة &nbsp; {{$document->description['study_year']}} &nbsp; &nbsp; للعام الدراسي &nbsp; {{$document->description['year']}} &nbsp; &nbsp;
                  وبنتيجة امتحانات الدورة الفصلية &nbsp; {{$document->description['season']}} &nbsp; من العام المذكور <br>
                  قد أنهى جميع مقرراته بمعدل قدره &nbsp; /{{$document->description['average']}}/ {{$document->description['average_write']}} &nbsp; &nbsp; وتقدير &nbsp; {{$document->description['evaluation']}} <br>
                  علماً بأن الكلية بصدد إصدار قرار التخرج أصولاً. <br>
                  وبناء على طلبه المقدم لدينا برقم &nbsp; /{{$document->description['request_id']}}/ &nbsp; &nbsp; تاريخ &nbsp; {{$document->description['req_date']}} &nbsp; &nbsp; أعطي هذه الوثيقة وذلك بناء
                  قرار مجلس التعليم العالي رقم /417/ تاريخ 22/7/2010.<br>
                  ولا تصلح هذه الوثيقة إلا من أجل الغاية المشار إليها.
              </p>
          </div>

          <div class="row mt-3">
            <div class="col-6">
                <div class="form-group ml-2">
                    <label>منظم الوثيقة</label>
                    <br>
                    <label>الاسم {{$document->description['doc_organizer']}}</label>
                    <br>
                    <label>التوقيع</label>
                    <br>
                    <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group ml-5">
                    <label for="doc_checker">مدقق الوثيقة</label>
                    <br>
                    <label for="doc_checker">الاسم {{$document->description['doc_checker']}}</label>
                    <br>
                    <label for="doc_checker_sign">التوقيع</label>
                    <br>
                    <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-4">
                <label class="">رئيس شعبة الامتحانات </label>
                <br>
                <label class="">{{$document->description['head_of_examination_division']}}</label>
                <br>
                <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">

            </div>
            <div class="col-4">
                <label class="">رئيس الدائرة</label>
                <br>
                <label class="">{{$document->description['head_of_precinct']}}</label>
                <br>
                <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
            </div>
            <div class="col-4">
                <label class="">عميد كلية الهندسة المعلوماتية</label>
                <br>
                <label class="">{{$document->description['dean_of_faculty']}}</label>
                <br>
                <img src="{{ asset('/images/signature.png') }}" width="100px" height="50px">
            </div>
        </div>
    </div>
    <script>
        window.print();
      </script>  
</body>
</html>