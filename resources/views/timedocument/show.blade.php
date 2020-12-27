@extends('layouts.app')

@section('style')
<link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/pickadate/classic.css') }}">
<link rel="stylesheet" href="{{ asset('css/pickadate/classic.date.css') }}">
<link rel="stylesheet" href="{{ asset('css/pickadate/classic.time.css') }}">
<link rel="stylesheet" href="{{ asset('css/pickadate/rtl.css') }}">
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex">
        <h4 class="m-0">إنشاء وثيقة دوام</h4>
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
            <h1>وثيقة دوام</h1>
          </div>
          <div class="row mt-2">
            <div class="col-4">
              <div class="form-group">
                <label for="student_name">إن الطالب {{ $document->description['student_name'] }}</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="birth_place">المولود في {{ $document->description['birth_place'] }}</label>

              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="birth_date">عام {{ $document->description['birth_date'] }}</label>

              </div>
            </div>
          </div>

            <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="nationality">والمتمتع بالجنسية العربية {{ $document->description['nationality'] }}</label>
                
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="faculty_name">طالب مسجل في كلية {{ $document->description['faculty_name'] }}</label>
                
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="study_year">السنة {{ $document->description['study_year'] }}</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="department">قسم {{ $document->description['department'] }}</label>
                
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="year">للعام الدراسي {{ $document->description['year'] }}</label>
                
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="university_id">رقمه الجامعي {{ $document->description['university_id'] }}</label>
                
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="stay_until">هو مداوم بانتظام لغاية {{ $document->description['stay_until'] }}</label>
                
              </div>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-6">
              <div class="form-group float-left">
                <label for="doc_organizer">منظم الوثيقة</label>
                <br>
                <label for="doc_organizer">الاسم والتوقيع {{ $document->description['doc_organizer'] }}</label>
                
              </div>
            </div>
            <div class="col-6">
              <div class="form-group float-right">
                <label for="head_student_dffairs_division">رئيس شعبة شؤون الطلاب</label>
                <br>
                <label for="head_student_dffairs_division">الاسم والتوقيع {{ $document->description['head_student_affairs_division'] }}</label>
                
                <br>
                <label for="dean_of_theFaculty" class="mt-5">عميد كلية الهندسة المعلوماتية</label>
                <br>
                <label for="dean_of_theFaculty" class="">{{ $document->description['dean_of_theFaculty'] }}</label>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <a href="/document/{{ $document->type }}/print/{{ $document->id }}" class="btn btn-primary btn-sm ml-auto">طباعة</a>
              <a href="/document/{{ $document->type }}/pdf/{{ $document->id }}" class="btn btn-success btn-sm ml-auto">تحويل إلى pdf</a>
            </div>
          </div>
          {{-- <div class="text-left mt-3">
            <button type="submit" name="save" class="btn btn-primary">حفظ</button>
          </div> --}}

      </div>
    </div>
  </div>
</div>
  
@endsection

@section('script')

@endsection