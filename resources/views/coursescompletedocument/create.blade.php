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
        <form class="form" method="POST" action="/documents/coursescomplete">
          @csrf

          <div class="row mt-3">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="number">الرقم:</label>
                <input value="{{ old('number') }}" type="number" class="form-control col-sm-2" name="number" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}/>
                <p class="help-block text-danger">{{ $errors->first('number') }}</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="date">التاريخ:</label>
                <input value="{{ old('date') }}" type="date" class="form-control col-sm-2" name="date" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}/>
                <p class="help-block text-danger">{{ $errors->first('date') }}</p>
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
                <label for="student_name">إن الطالب</label>
                <input value="{{ old('student_name') }}" type="text" name="student_name" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('student_name') }}</p>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="study_year">مسجل في السنة</label>
                <input value="{{ old('study_year') }}" type="text" name="study_year" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('study_year') }}</p>

              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="year">للعام الدراسي</label>
                <input value="{{ old('year') }}" type="text" name="year" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('year') }}</p>

              </div>
            </div>
          </div>

            <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="season">وبنتيجة امتحانات الدورة الفصلية</label>
                <input value="{{ old('season') }}" type="text" name="season" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('season') }}</p>

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
                <label for="average">قد أنهى جميع مقرراته بمعدل قدره</label>
                <input value="{{ old('average') }}" type="number" name="average" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('average') }}</p>
              </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                  <label for="average_write">كتابةً</label>
                  <input value="{{ old('average_write') }}" type="text" name="average_write" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                  <p class="help-block text-danger">{{ $errors->first('average_write') }}</p>
                </div>
              </div>
            <div class="col-4">
              <div class="form-group">
                <label for="evaluation">وتقدير</label>
                <input value="{{ old('evaluation') }}" type="text" name="evaluation" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('evaluation') }}</p>
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
                <label for="request_id">وبناء على طلبه المقدم لدينا برقم</label>
                <input value="{{ old('request_id') }}" type="number" name="request_id" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('request_id') }}</p>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="req_date">تاريخ</label>
                <input value="{{ old('req_date') }}" type="date" name="req_date" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('req_date') }}</p>

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
                <label for="doc_organizer">الاسم</label>
                <input value="{{ old('doc_organizer') }}" type="text" name="doc_organizer" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('doc_organizer') }}</p>
                <label for="doc_organizer">التوقيع</label>
                <input type="checkbox" class="form-control" value="{{ old('doc_organizer_sign') }}" name="doc_organizer_sign" {{ auth()->user()->office_id != 2 ? 'disabled' : '' }}>
                </div>
            </div>
            <div class="col-6">
              <div class="form-group float-right">
                <label for="doc_checker">مدقق الوثيقة</label>
                <br>
                <label for="doc_checker">الاسم</label>
                <input value="{{ old('doc_checker') }}" type="text" name="doc_checker" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('doc_checker') }}</p>

                <label for="doc_checker_sign">التوقيع</label>
                <input type="checkbox" class="form-control" value="{{ old('doc_checker_sign') }}" name="doc_checker_sign" {{ auth()->user()->office_id != 2 ? 'disabled' : '' }}>

              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-4">
              <div class="form-group float-left">
                <label for="head_of_examination_division">رئيس شعبة الامتحانات</label>
                <br>
                <label for="head_of_examination_division">الاسم</label>
                <input value="{{ old('head_of_examination_division') }}" type="text" name="head_of_examination_division" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('head_of_examination_division') }}</p>
                <label for="head_of_examination_division_sign">التوقيع</label>
                <input type="checkbox" class="form-control" value="{{ old('head_of_examination_division_sign') }}" name="head_of_examination_division_sign" {{ auth()->user()->office_id != 2 ? 'disabled' : '' }}>
                </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="head_of_precinct">رئيس الدائرة</label>
                <br>
                <label for="head_of_precinct">الاسم</label>
                <input value="{{ old('head_of_precinct') }}" type="text" name="head_of_precinct" class="form-control" {{ auth()->user()->office_id != 5 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('head_of_precinct') }}</p>

                <label for="head_of_precinct_sign">التوقيع</label>
                <input type="checkbox" class="form-control" value="{{ old('head_of_precinct_sign') }}" name="head_of_precinct_sign" {{ auth()->user()->office_id != 5 ? 'disabled' : '' }}>
              </div>
            </div>
            <div class="col-4">
                <div class="form-group float-right">
                  <label for="dean_of_faculty">عميد كلية الهندسة المعلوماتية</label>
                  <br>
                  <label for="dean_of_faculty">الاسم</label>
                  <input value="{{ old('dean_of_faculty') }}" type="text" name="dean_of_faculty" class="form-control" {{ auth()->user()->office_id != 3 ? 'readonly' : '' }}>
                  <p class="help-block text-danger">{{ $errors->first('dean_of_faculty') }}</p>
  
                  <label for="dean_of_faculty_sign">التوقيع</label>
                  <input type="checkbox" class="form-control" value="{{ old('dean_of_faculty_sign') }}" name="dean_of_faculty_sign" {{ auth()->user()->office_id != 3 ? 'disabled' : '' }}>
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

@endsection