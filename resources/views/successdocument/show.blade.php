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

                    <div class="form-row mt-3">
                        <label class=" col-form-label" for="number">الرقم: {{ $document->description['number'] }}</label>

                    </div>
                    <div class="form-row mt-2">
                        <label class=" col-form-label" for="date">التاريخ: {{ $document->description['date'] }}</label>

                    </div>
                    <div class="from-row d-flex justify-content-center mt-2">
                        <h1>وثيقة ترفع</h1>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="student_name">إن الطالب  {{ $document->description['student_name'] }}</label>

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
                                <label for="nationality">والمتمتع بالجنسية {{ $document->description['nationality'] }}</label>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="university_id">رقمه الجامعي {{ $document->description['university_id'] }}</label>
                                    
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="study_year">من طلاب السنة {{ $document->description['study_year'] }}</label>
                                    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="year">للعام الدراسي {{ $document->description['year'] }}</label>
                                    
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="season">وبنتيجة أمتحانات الدورة الفصلية {{ $document->description['season'] }}</label>
                                    
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="success_year">من العام المذكور قد ترفع إلى السنة {{ $document->description['success_year'] }}</label>
                                    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="register_year">ويحق له التسجيل في العام الدراسي {{ $document->description['register_year'] }}</label>
                                    
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="req_id">وبناء على طلبه المسجل في ديوان الكلية رقم {{ $document->description['req_id'] }}</label>
                                    
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="req_date"> تاريخ {{ $document->description['req_date'] }}</label>
                                    
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
                        
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group float-left ml-5">
                                <label for="doc_organizer">منظم الوثيقة</label>
                                <br>
                                <label for="doc_organizer">الاسم {{ $document->description['doc_organizer'] }}</label>
                                    
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group float-right mr-5">
                                <label for="doc_checker">مدقق الوثيقة</label>
                                <br>
                                <label for="doc_checker">الاسم {{ $document->description['doc_checker'] }}</label>
                                    
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <label for="head_of_examination_division" class="">رئيس شعبة الامتحانات</label>
                            <br>
                            <label for="head_of_examination_division" class="">{{ $document->description['head_of_examination_division'] }}</label>
                                
                        </div>
                        <div class="col-4">
                            <label for="head_of_precinct" class="">رئيس الدائرة</label>
                            <br>
                            <label for="head_of_precinct" class="">{{ $document->description['head_of_precinct'] }}</label>

                                
                        </div>
                        <div class="col-4">
                            <label for="dean_of_faculty" class="">عميد كلية الهندسة المعلوماتية</label>
                            <br>
                            <label for="dean_of_faculty" class="">{{ $document->description['dean_of_faculty'] }}</label>
                                
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <a href="/document/{{ $document->type }}/print/{{ $document->id }}" class="btn btn-primary btn-sm ml-auto">طباعة</a>
                            <a href="/document/{{ $document->type }}/pdf/{{ $document->id }}" class="btn btn-success btn-sm ml-auto">تحويل إلى pdf</a>
                        </div>
                    </div>
                        {{-- <div class="footer">
                            
                        </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection