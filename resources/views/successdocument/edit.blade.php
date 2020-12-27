@extends('layouts.app')

@section('style')
<link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="m-0">إنشاء وثيقة ترفع</h4>
                    <a href="/documents" class="btn btn-primary ml-auto">العودة إلى الوثائق</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <h6 class="">الجمهورية العربية السورية</h6>
                            <h6 class="">وزارة التعليم العالي</h6>
                            <h6 class="">جامعة تشرين</h6>
                            <h6 class="">كلية الهندسة المعلوماتية</h6>
                        </div>
                        <div class="col-4 text-center">
                            <img src="{{ URL::to('/') }}/images/index.jpg" width="100px" height="100px">
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
                        <div class="form-row mt-3">
                            <label class=" col-form-label" for="number">الرقم:</label>
                            <input value="{{ $document->description['number'] }}" type="number" class="form-control col-sm-2" name="number" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }} />
                            <p class="help-block text-danger">{{ $errors->first('number') }}</p>
                        </div>
                        <div class="form-row mt-2">
                            <label class=" col-form-label" for="date">التاريخ:</label>
                            <input value="{{ $document->description['date'] }}" type="date" class="form-control col-sm-2" name="date" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }} />
                            <p class="help-block text-danger">{{ $errors->first('date') }}</p>
                        </div>
                        <div class="from-row d-flex justify-content-center mt-2">
                            <h1>وثيقة ترفع</h1>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="student_name">إن الطالب</label>
                                    <input value="{{ $document->description['student_name'] }}" type="text" name="student_name" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('student_name') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="birth_place">المولود في</label>
                                    <input value="{{ $document->description['birth_place'] }}" type="text" name="birth_place" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('birth_place') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="birth_date">عام</label>
                                    <input value="{{ $document->description['birth_date'] }}" type="number" name="birth_date" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('birth_date') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="nationality">والمتمتع بالجنسية</label>
                                    <input value="{{ $document->description['nationality'] }}" type="text" name="nationality" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('nationality') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="university_id">رقمه الجامعي</label>
                                    <input value="{{ $document->description['university_id'] }}" type="number" name="university_id" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('university_id') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="study_year">من طلاب السنة</label>
                                    <input value="{{ $document->description['study_year'] }}" type="text" name="study_year" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('study_year') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="year">للعام الدراسي</label>
                                    <input value="{{ $document->description['year'] }}" type="text" name="year" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('year') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="season">وبنتيجة أمتحانات الدورة الفصلية</label>
                                    <input value="{{ $document->description['season'] }}" type="text" name="season" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('season') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="success_year">من العام المذكور قد ترفع إلى السنة</label>
                                    <input value="{{ $document->description['success_year'] }}" type="text" name="success_year" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('success_year') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="register_year">ويحق له التسجيل في العام الدراسي</label>
                                    <input value="{{ $document->description['register_year'] }}" type="text" name="register_year" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('register_year') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="req_id">وبناء على طلبه المسجل في ديوان الكلية رقم</label>
                                    <input value="{{ $document->description['req_id'] }}" type="number" name="req_id" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('req_id') }}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="req_date"> تاريخ</label>
                                    <input value="{{ $document->description['req_date'] }}" type="date" name="req_date" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('req_date') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mt-2">
                                    <label for="">أعطي هذه الوثيقة . </label>
                                </div>
                            </div>
                        </div>
                        
                        {{-- <br> --}}
                        {{-- <div class="row mb-3">
                            <div class="col-4 "><label for="" class=""> طابع مالي</label> </div>
                            <div class="col-4"><label for="" class=""> طابع نقابة معلمين</label></div>
                            <div class="col-4"><label for="" class=""> طابع بحث علمي</label></div>
                        </div> --}}
                        {{-- <br>
                        <br> --}}
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group float-left ml-5">
                                    <label for="doc_organizer">منظم الوثيقة</label>
                                    <br>
                                    <label for="doc_organizer">الاسم</label>
                                    <input value="{{ $document->description['doc_organizer'] }}" type="text" name="doc_organizer" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('doc_organizer') }}</p>


                                    <label for="doc_organizer_sign">التوقيع</label>
                                    <input type="checkbox" class="form-control" value="{{ old('doc_organizer_sign') }}" name="doc_organizer_sign" {{ auth()->user()->office_id != 2 ? 'disabled' : '' }}>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group float-right mr-5">
                                    <label for="doc_checker">مدقق الوثيقة</label>
                                    <br>
                                    <label for="doc_checker">الاسم</label>
                                    <input value="{{ $document->description['doc_checker'] }}" type="text" name="doc_checker" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                    <p class="help-block text-danger">{{ $errors->first('doc_checker') }}</p>

                                    <label for="doc_checker_sign">التوقيع</label>
                                    <input type="checkbox" class="form-control" value="{{ old('doc_checker_sign') }}" name="doc_checker_sign" {{ auth()->user()->office_id != 2 ? 'disabled' : '' }}>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-4">
                                <label for="head_of_examination_division" class="">رئيس شعبة الامتحانات </label>
                                <input value="{{ $document->description['head_of_examination_division'] }}" type="text" name="head_of_examination_division" class="form-control" {{ auth()->user()->office_id != 2 ? 'readonly' : '' }}>
                                <p class="help-block text-danger">{{ $errors->first('head_of_examination_division') }}</p>

                                <label for="head_of_examination_division_sign">التوقيع</label>
                                <input type="checkbox" class="form-control" value="{{ old('head_of_examination_division_sign') }}" name="head_of_examination_division_sign" {{ auth()->user()->office_id != 2 ? 'disabled' : '' }}>
                            </div>
                            <div class="col-4">
                                <label for="head_of_precinct" class="">رئيس الدائرة</label>
                                <input value="{{ $document->description['head_of_precinct'] }}" type="text" name="head_of_precinct" class="form-control" {{ auth()->user()->office_id != 5 ? 'readonly' : '' }}>
                                <p class="help-block text-danger">{{ $errors->first('head_of_precinct') }}</p>

                                <label for="head_of_precinct_sign">التوقيع</label>
                                <input type="checkbox" class="form-control" value="{{ old('head_of_precinct_sign') }}" name="head_of_precinct_sign" {{ auth()->user()->office_id != 5 ? 'disabled' : '' }}>
                            </div>
                            <div class="col-4">
                                <label for="dean_of_faculty" class="">عميد كلية الهندسة المعلوماتية</label>
                                <input value="{{ $document->description['dean_of_faculty'] }}" type="text" name="dean_of_faculty" class="form-control" {{ auth()->user()->office_id != 3 ? 'readonly' : '' }}>
                                <p class="help-block text-danger">{{ $errors->first('dean_of_faculty') }}</p>

                                <label for="dean_of_theFaculty_sign">التوقيع</label>
                                <input type="checkbox" class="form-control" value="{{ old('dean_of_theFaculty_sign') }}" name="dean_of_theFaculty_sign" {{ auth()->user()->office_id != 3 ? 'disabled' : '' }}>
                            </div>
                        </div>
                        <br>
                        <div class="footer">
                            <button type="submit" class="btn btn-outline-primary float-left">حفظ</button>
                        </div>

                    </form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection