@extends('layouts.app')

@section('style')
<link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex">
        <h4 class="m-0">إنشاء وثيقة إنهاء مقررات</h4>
        <a href="/documents" class="btn btn-primary ml-auto">العودة إلى الوثائق</a>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <h6>الجمهورية العربية السورية</h6>
            <h6>وزارة التعليم العالي</h6>
            <h6>جامعة تشرين</h6>
            <h6>كلية الهندسة المعلوماتية</h6>
          </div>
          <div class="col-4 text-center">
            <img src="{{ asset('/images/index.jpg') }}" width="100px" height="100px">
          </div>
          <div class="col-4">
            <h6 class="text-right">Syrian Arab Republic</h6>
            <h6 class="text-right">Ministry of Higher Education</h6>
            <h6 class="text-right">Tishreen University</h6>
            <h6 class="text-right">Faculty of Informatic Engineering</h6>
          </div>
        </div>
          <div class="row mt-3">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="number">الرقم: {{ $document->description['number'] }}</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="date">التاريخ: {{ $document->description['date'] }}</label>
              </div>
            </div>
          </div>

          <div class="from-row d-flex justify-content-center">
            <h1>وثيقة إنهاء مقررات</h1>
          </div>

          <div class="from-row d-flex justify-content-center">
            <label>(خاصة لدرجة الماجستير ، ودبلوم تأهيل تربوي)</label>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="student_name">إن الطالب {{ $document->description['student_name'] }}</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="study_year">مسجل في السنة {{ $document->description['study_year'] }}</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="year">للعام الدراسي {{ $document->description['year'] }}</label>
              </div>
            </div>
          </div>

            <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="season">وبنتيجة امتحانات الدورة الفصلية {{ $document->description['season'] }}</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="faculty_name">من العام المذكور</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="average">قد أنهى جميع مقرراته بمعدل قدره {{ $document->description['average'] }}</label>
              </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                  <label for="average_write">كتابةً {{ $document->description['average_write'] }}</label>
                </div>
              </div>
            <div class="col-4">
              <div class="form-group">
                <label for="evaluation">وتقدير {{ $document->description['evaluation'] }}</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="stay_until">علماً بأن الكلية بصدد إصدار قرار التخرج أصولاً</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="request_id">وبناء على طلبه المقدم لدينا برقم {{ $document->description['request_id'] }}</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="req_date">تاريخ {{ $document->description['req_date'] }}</label>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="stay_until">أعطي هذه الوثيقة وذلك بناء على قرار مجلس التعليم العالي رقم /417/ تاريخ 22/7/2010</label>
              </div>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-6">
              <div class="form-group float-left">
                <label for="doc_organizer">منظم الوثيقة</label>
                <br>
                <label for="doc_organizer">الاسم {{ $document->description['doc_organizer'] }}</label>
                </div>
            </div>
            <div class="col-6">
              <div class="form-group float-right">
                <label for="doc_checker">مدقق الوثيقة</label>
                <br>
                <label for="doc_checker">الاسم {{ $document->description['doc_checker'] }}</label>

                {{-- <label for="doc_checker_sign">التوقيع</label> --}}

              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-4">
              <div class="form-group float-left">
                <label for="head_of_examonation_division">رئيس شعبة الامتحانات</label>
                <br>
                <label for="head_of_examonation_division">الاسم {{ $document->description['head_of_examination_division'] }}</label>
                {{-- <label for="head_of_examonation_division_sign">التوقيع</label> --}}
                </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="head_of_precinct">رئيس الدائرة</label>
                <br>
                <label for="head_of_precinct">الاسم {{ $document->description['head_of_precinct'] }}</label>

                {{-- <label for="head_of_precinct_sign">التوقيع</label> --}}
              </div>
            </div>
            <div class="col-4">
                <div class="form-group float-right">
                  <label for="dean_of_faculty">عميد كلية الهندسة المعلوماتية</label>
                  <br>
                  <label for="dean_of_faculty">الاسم {{ $document->description['dean_of_faculty'] }}</label>
  
                  {{-- <label for="dean_of_faculty_sign">التوقيع</label> --}}
                </div>
              </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 text-center">
                <a href="/document/{{ $document->type }}/print/{{ $document->id }}" class="btn btn-primary btn-sm ml-auto">طباعة</a>
                <a href="/document/{{ $document->type }}/pdf/{{ $document->id }}" class="btn btn-success btn-sm ml-auto">تحويل إلى pdf</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection

@section('script')

@endsection