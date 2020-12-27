@extends('layouts.app')

@section('style')
<link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex">
        <h4 class="m-0">إنشاء طلب الحصول على وثيقة إنهاء مقررات</h4>
        <a href="/requests" class="btn btn-primary ml-auto">العودة إلى الوثائق</a>
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
        <form class="form" method="POST" action="/requests/coursescompleterequest">
          @csrf

          <div class="row mt-3">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="number">الرقم:</label>
                <input value="{{ old('number') }}" type="number" class="form-control col-sm-2" name="number" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}/>
                <p class="help-block text-danger">{{ $errors->first('number') }}</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="date">التاريخ:</label>
                <input value="{{ old('date') }}" type="date" class="form-control col-sm-2" name="date" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}/>
                <p class="help-block text-danger">{{ $errors->first('date') }}</p>
              </div>
            </div>
          </div>

          <div class="from-row d-flex justify-content-center">
            <h1>طلب الحصول على وثيقة إنهاء مقررات</h1>
          </div>

          <div class="from-row d-flex justify-content-center">
            <h1>السيد الدكتور عميد الكلية</h1>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="student_shortname">مقدمة الطالب</label>
                <input value="{{ old('student_shortname') }}" type="text" name="student_shortname" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('student_shortname') }}</p>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="father_name">بن</label>
                <input value="{{ old('father_name') }}" type="text" name="father_name" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('father_name') }}</p>

              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="mother_name">والدتي</label>
                <input value="{{ old('mother_name') }}" type="text" name="mother_name" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('mother_name') }}</p>

              </div>
            </div>
          </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                      <label for="study_year">السنة</label>
                      <input value="{{ old('study_year') }}" type="text" name="study_year" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                      <p class="help-block text-danger">{{ $errors->first('study_year') }}</p>
      
                    </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="department">القسم/الشعبة</label>
                    <input value="{{ old('department') }}" type="text" name="department" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                    <p class="help-block text-danger">{{ $errors->first('department') }}</p>

                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="university_id">الرقم الجامعي</label>
                    <input value="{{ old('university_id') }}" type="number" name="university_id" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                    <p class="help-block text-danger">{{ $errors->first('university_id') }}</p>

                </div>
                </div>
          </div>

          <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="university_register_year">المسجل بالجامعة لأول مرة عام</label>
                    <input value="{{ old('university_register_year') }}" type="number" name="university_register_year" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                    <p class="help-block text-danger">{{ $errors->first('university_register_year') }}</p>
                </div>
            </div>
          
        </div>
          
          <div class="row">
              <div class="col-4">
                  <div class="form-group">
                    <label for="">أعرض ما يلي:</label>
                    <br>
                    <label for="year">أرجو التفضل بالموافقة على منحي وثيقة إنهاء مقررات من أجل التسجيل لدرجة الماجستير / دبلوم تأهيل تربوي</label>
                  </div>
              </div>
          </div>


           <div class="row mb-3">
                <div class="col-4 "><label for="" class=""> طابع مالي</label> </div>
                <div class="col-4"><label for="" class=""> طابع نقابة</label></div>
                <div class="col-4"><label for="" class=""> طابع بحث علمي</label></div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group float-right">
                      <label for="student_name">اسم الطالب وتوقيعه</label>
                      <br>
                      <input value="{{ old('student_name') }}" type="text" name="student_name" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                      <p class="help-block text-danger">{{ $errors->first('student_name') }}</p>
                    </div>
                  </div>
            </div>
            
            

            <div class="row">
                <div class="col-10">
                  <div class="form-group">
                    <label for="examinations_review">إلى شعبة الامتحانات أصولاً</label>
                    <textarea class="form-control" rows="2" name="examinations_review" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>{{ old('examinations_review') }}</textarea>
                    <p class="help-block text-danger">{{ $errors->first('examinations_review') }}</p>
                  </div>
                </div>
              </div>


            {{-- <div class="row">
                <div class="col">
                    <div class="form-group float-right">
                      <label for="examinations_name">الاسم والتوقيع</label>
                      <br>
                      <input value="{{ old('examinations_name') }}" type="text" name="examinations_name" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                      <p class="help-block text-danger">{{ $errors->first('examinations_name') }}</p>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col">
                    <div class="form-group float-right">
                      <label for="dean_of_theFaculty">عميد كلية الهندسة المعلوماتية</label>
                      <br>
                      <input value="{{ old('dean_of_theFaculty') }}" type="text" name="dean_of_theFaculty" class="form-control" {{ auth()->user()->office_id != 3 ? 'readonly' : '' }}>
                      <p class="help-block text-danger">{{ $errors->first('dean_of_theFaculty') }}</p>
                      <input type="checkbox" class="form-control" value="{{ old('dean_of_theFaculty_sign') }}" name="dean_of_theFaculty_sign" {{ auth()->user()->office_id != 3 ? 'disabled' : '' }}>
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