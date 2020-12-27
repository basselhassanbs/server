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
        /* line-height: inherit; */
        text-align: right;
        font-size: 16px;
        line-height: 24px;
        font-family: 'XBRiyaz',sans-serif;
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
    .right{
        text-align: right;
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
            <h2>وثيقة دوام</h2>
        </div>

        <div>
            إن الطالب &nbsp; {{$student_name}} &nbsp; &nbsp; المولود في &nbsp; {{$birth_place}} &nbsp; &nbsp; عام &nbsp; {{$birth_date}} &nbsp; &nbsp; والمتمتع بالجنسية العربية &nbsp; {{$nationality}} <br>
            طالب مسجل في كلية &nbsp; {{$faculty_name}} &nbsp; &nbsp; السنة &nbsp; {{$study_year}} &nbsp; &nbsp; قسم &nbsp; {{$department}} &nbsp; &nbsp; للعام الدراسي &nbsp; {{$year}} <br>
            رقمه الجامعي &nbsp; {{$university_id}} &nbsp; &nbsp; هو مداوم بانتظام لغاية &nbsp; {{$stay_until}} <br>
        </div>
        <table cellpadding="0" cellspacing="0" class="mt">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                منظم الوثيقة<br>
                                الاسم والتوقيع {{$doc_organizer}}<br>
                                <img src="{{ public_path('/images/signature.png') }}" width="100px" height="50px">
                            </td>
    
                            <td style="text-align:left">
                                رئيس شعبة شؤون الطلاب<br>
                                الاسم والتوقيع {{$head_student_affairs_division}}<br>
                                <img src="{{ public_path('/images/signature.png') }}" width="100px" height="50px">
    
                            </td>
                        </tr>
    
                    </table>
                </td>
            </tr>
        </table>

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