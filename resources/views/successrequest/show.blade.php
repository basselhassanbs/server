@extends('layouts.app')

@section('style')
<link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex">
        <h4 class="m-0">إنشاء طلب الحصول على وثيقة ترفع</h4>
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
          
          <div class="row mt-3">
            <div class="col">
              <div class="form-group">
                <label class=" col-form-label"  for="number">الرقم: {{ $document->description['number']  }}</label>
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

          <div class="from-row d-flex justify-content-center mt-2">
            <h1>طلب الحصول على وثيقة ترفع</h1>
          </div>

          <div class="from-row d-flex justify-content-center mb-2">
            <h1>السيد الدكتور عميد الكلية</h1>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="student_name">مقدمة الطالب {{ $document->description['student_shortname'] }}</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="father_name">بن {{ $document->description['father_name'] }}</label>
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
                <label for="department">القسم/الشعبة {{ $document->description['department'] }}</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="university_id">الرقم الجامعي {{ $document->description['university_id'] }}</label>
              </div>
            </div>
          </div>
          
          <div class="row">
              <div class="col-4">
                  <div class="form-group">
                    <label for="">أعرض ما يلي:</label>
                  </div>
              </div>
            
          </div>

          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="year">أرجو التفضل بالموافقة على منحي وثيقة ترفع للعام الدراسي {{ $document->description['year'] }}</label>
              </div>
            </div>
            {{-- <div class="col-4">
              <div class="form-group">
                <label for="season">الفصل</label>
                <input value="{{ old('season') }}" type="text" name="season" class="form-control" {{ auth()->user()->office_id != 4 ? 'readonly' : '' }}>
                <p class="help-block text-danger">{{ $errors->first('season') }}</p>
              </div>
            </div> --}}
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
                      <label for="student_name">{{ $document->description['student_name'] }}</label>
                    </div>
                  </div>
            </div>
            

            <div class="row">
                <div class="col-10">
                  <div class="form-group">
                    <label for="examinations_review">مطالعة شعبة الامتحانات:</label>
                    <p>{{ $document->description['examinations_review'] }}</p>
                    {{-- <textarea class="form-control" rows="2" value="{{ $document->description['examinations_review'] }}" name="examinations_review" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}></textarea> --}}
                    
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col">
                    <div class="form-group float-right">
                      <label for="examinations_name">الاسم والتوقيع {{ $document->description['examinations_name'] }}</label>
                      
                    </div>
                  </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group float-right">
                      <label for="dean_of_theFaculty">عميد الكلية {{ $document->description['dean_of_theFaculty'] }}</label>
                    </div>
                  </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <a href="/request/{{ $document->type }}/print/{{ $document->id }}" class="btn btn-primary btn-sm ml-auto">طباعة</a>
                <a href="/request/{{ $document->type }}/pdf/{{ $document->id }}" class="btn btn-success btn-sm ml-auto">تحويل إلى pdf</a>
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