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
        <h4 class="m-0">تعديل وثيقة</h4>
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
        <form class="form" method="POST" action="/documents/{{ $document->id }}/{{ $document->type }}">
          @csrf
          @method('PUT')
          <div class="row mt-3">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="number">الرقم:</label>
                <input type="number" class="form-control col-sm-2" value="{{ $document->description['number'] }}" name="number" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}/>
                <p class="help-block text-danger">{{ $errors->first('number') }}</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="date">التاريخ:</label>
                <input type="date" class="form-control col-sm-2" value="{{ $document->description['date'] }}" name="date" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}/>
                <p class="help-block text-danger">{{ $errors->first('date') }}</p>
              </div>
            </div>
          </div>
          <div class="from-row d-flex justify-content-center">
            <h1>وثيقة دوام</h1>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="student_name">إن الطالب</label>
                <input type="text" name="student_name" class="form-control" value="{{ $document->description['student_name'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('student_name') }}</p>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="birth_place">المولود في</label>
                <input type="text" name="birth_place" class="form-control" value="{{ $document->description['birth_place'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('birth_place') }}</p>

              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="birth_date">عام</label>
                <input type="number" name="birth_date" class="form-control" value="{{ $document->description['birth_date'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('birth_date') }}</p>

              </div>
            </div>
          </div>

            <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="nationality">والمتمتع بالجنسية العربية</label>
                <input type="text" name="nationality" class="form-control" value="{{ $document->description['nationality'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('nationality') }}</p>

              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="faculty_name">طالب مسجل في كلية</label>
                <input type="text" name="faculty_name" class="form-control" value="{{ $document->description['faculty_name'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('faculty_name') }}</p>

              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="study_year">السنة</label>
                <input type="text" name="study_year" class="form-control" value="{{ $document->description['study_year'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('study_year') }}</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="department">قسم</label>
                <input type="text" name="department" class="form-control" value="{{ $document->description['department'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('department') }}</p>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="year">للعام الدراسي</label>
                <input type="text" name="year" class="form-control" value="{{ $document->description['year'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('year') }}</p>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="university_id">رقمه الجامعي</label>
                <input type="number" name="university_id" class="form-control" value="{{ $document->description['university_id'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('university_id') }}</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="stay_until">هو مداوم بانتظام لغاية</label>
                <input type="date" name="stay_until" class="form-control" value="{{ $document->description['stay_until'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('stay_until') }}</p>
              </div>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-6">
              <div class="form-group float-left">
                <label for="doc_organizer">منظم الوثيقة</label>
                <br>
                <label for="doc_organizer">الاسم والتوقيع</label>
                <input type="text" name="doc_organizer" class="form-control" value="{{ $document->description['doc_organizer'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('doc_organizer') }}</p>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group float-right">
                <label for="head_student_dffairs_division">رئيس شعبة شؤون الطلاب</label>
                <br>
                <label for="head_student_dffairs_division">الاسم والتوقيع</label>
                <input type="text" name="head_student_affairs_division" class="form-control" value="{{ $document->description['head_student_affairs_division'] }}" {{ auth()->user()->office_id != 1 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('head_student_affairs_division') }}</p>

                <label for="dean_of_theFaculty" class="mt-5">عميد كلية الهندسة المعلوماتية</label>
                @if (array_key_exists('dean_of_theFaculty',$document->description))
                  <input type="text" name="dean_of_theFaculty" class="form-control" size="10" value="{{ $document->description['dean_of_theFaculty'] }}" {{ auth()->user()->office_id != 3 ? 'readonly' : '' }}>
                @else
                <input type="text" name="dean_of_theFaculty" class="form-control" size="10" value="" {{ auth()->user()->office_id != 3 ? 'readonly' : '' }}>
                @endif
                <p class="help-block text-danger">{{ $errors->first('dean_of_theFaculty') }}</p>

                {{-- <div class="custom-control custom-checkbox mt-2">
                  <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                  <label class="custom-control-label" for="defaultUnchecked">اضغط هنا للتوقيع</label>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="text-left mt-3">
            <button type="submit" name="save" class="btn btn-primary">حفظ</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  
@endsection

@section('script')
    <script src="{{ asset('js/pickadate/picker.js') }}"></script>
    <script src="{{ asset('js/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('js/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('js/pickadate/ar.js') }}"></script>
    
    <script>
      $(document).ready(function(){
        $('.datepicker').pickadate({
          format: 'yyyy-mm-dd',
          selectMonth: true,
          selectYear: true,
          clear: 'Clear',
          close: 'Ok',
          closeOnSelect: true
        });
      });
    </script>
@endsection