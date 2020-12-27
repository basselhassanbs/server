<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FSDDFSF</title>
    <style>
    body {}

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        /* border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15); */
        font-size: 16px;
        line-height: 24px;
        font-family: 'XBRiyaz',sans-serif;
        color: black;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: right;
    }
    .invoice-box img {
        padding-right: 200px;
    }
    .left {
      text-align: left;
    }
    .center{
      text-align: center;
    }
    .mt{
      margin-top: 25px;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                الجمهورية العربية السورية<br>
                                وزارة التعليم العالي<br>
                                جامعة تشرين<br>
                                كلية الهندسة المعلوماتية
                            </td>
    
                            <td class="title" style="text-align: center">
                                <img src="{{ public_path('/images/index.jpg') }}" height="100px" alt=""
                                    style="margin-right: 38px">
                            </td>
                            <td style="text-align:left">
                                Syrian Arab Republic<br>
                                Ministry of Higher Education <br>
                                Tishreen University<br>
                                Faculty Of Informatic Engineering
    
                            </td>
                        </tr>
    
                    </table>
                </td>
            </tr>
        </table>
        <div>
            <p >الرقم: {{$number}}
                <br>
                التاريخ: {{$date}}
            </p>
        </div>
        <div class="center">
            <h2>طلب الحصول على وثيقة دوام</h2>
        </div>
    
        <div class="center">
            <h2>السيد الدكتور عميد الكلية</h2>
        </div>
        <div>
             مقدمة الطالب &nbsp; {{$student_shortname}} &nbsp; &nbsp; بن &nbsp; {{$father_name}} &nbsp; &nbsp; السنة &nbsp; {{$study_year}} &nbsp; &nbsp; القسم/الشعبة &nbsp; {{$department}} <br>
            الرقم الجامعي &nbsp; {{$university_id}} <br>
            أعرض ما يلي:<br>
            أرجو التفضل بالموافقة على منحي وثيقة دوام للعام الدراسي &nbsp; {{$year}} &nbsp; &nbsp; الفصل &nbsp; {{$season}}<br>
        </div>
    
        <div class="center mt">
            الطوابع القانونية
        </div>
    
        <p>طابع مالي &nbsp; &nbsp;&nbsp; طابع نقابة &nbsp; &nbsp; &nbsp; طابع بحث علمي <p>
    
        <div class="left mt">
          اسم الطالب وتوقيعه: {{$student_name}}
        </div>
        <div class="row mt">
            مطالعة المدرس المختص : {{$teacher_review}}
        </div>
        <div class="left mt">
            الاسم والتوقيع: {{$teacher_name}}
        </div>
        <div class="row mt">
            مطالعة شعبة الامتحانات: {{$examinations_review}}
        </div>
    
        <div class="left mt">
            الاسم والتوقيع: {{$examinations_name}}
        </div>
    
        <div class="left">
          <img src="{{ public_path('/images/signature.png') }}" width="100px" height="50px">
        </div>
    
        <div>ًملاحظة لا يجوز تقديم هذا الطلب إلا من قبل صاب العلاقة حصرا. 
        <br>إلى شعبة شؤون الطلاب لإعداد الوثيقة المطلوبة أصولا.</div>
        <div class="left mt">
             عميد كلية الهندسة المعلوماتية<Br>
             {{$dean_of_theFaculty}}
         </div>
         
         <div class="left">
          <img src="{{ public_path('/images/signature.png') }}" width="100px" height="50px">
        </div>
    </div>
</body>
</html>