<?php

namespace App;
use App\RequestDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestOperation{
    public function timeRequestCreate(Request $request)
    {
        $requestdoc = new RequestDoc();
        $requestdoc->type = 'timerequest';
        $requestdoc->name = 'طلب وثيقة دوام';
        $requestdoc->seq = 1;
        $requestdoc->office_id = auth()->user()->office_id;

        $description = $requestdoc->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_shortname'] = request('student_shortname');
        $description['father_name'] = request('father_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['university_id'] = request('university_id');
        $description['year'] = request('year');
        $description['season'] = request('season');
        $description['student_name'] = request('student_name');
        $description['teacher_review'] = request('teacher_review');
        $description['teacher_name'] = request('teacher_name');
        $description['examinations_review'] = request('examinations_review');
        $description['examinations_name'] = request('examinations_name');
        $description['examinations_sign'] = request('examinations_sign');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $description['dean_of_theFaculty_sign'] = request('dean_of_theFaculty_sign');
        $requestdoc->description = $description;

        $requestdoc->save();
    }

    public function timeRequestUpdate(Request $request,$id)
    {
        $requestdoc = RequestDoc::find($id);
        $requestdoc->type = 'timerequest';
        $requestdoc->name = 'طلب وثيقة دوام';
        $requestdoc->office_id = auth()->user()->office_id;

        $description = $requestdoc->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_shortname'] = request('student_shortname');
        $description['father_name'] = request('father_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['university_id'] = request('university_id');
        $description['year'] = request('year');
        $description['season'] = request('season');
        $description['student_name'] = request('student_name');
        $description['teacher_review'] = request('teacher_review');
        $description['teacher_name'] = request('teacher_name');
        $description['examinations_review'] = request('examinations_review');
        $description['examinations_name'] = request('examinations_name');
        $description['examinations_sign'] = request('examinations_sign');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $description['dean_of_theFaculty_sign'] = request('dean_of_theFaculty_sign');
        $requestdoc->description = $description;

        $requestdoc->save();
    }

    public function timeRequestCreateValidate()
    {
        return request()->validate([
            'number' => 'required',
            'date' => 'required',
            'student_shortname' => 'required',
            'father_name' => 'required',
            'study_year' => 'required',
            'department' => 'required',
            'university_id' => 'required',
            'year' => 'required',
            'season' => 'required',
            'student_name' => 'required',
            'teacher_review' => 'required',
            'teacher_name' => 'required',
        ]);
    }

    public function timeRequestUpdateValidate($id)
    {
        $document = Document::find($id);
        if($document->office_id == 4)
        {
            return request()->validate([
                'number' => 'required',
                'date' => 'required',
                'student_shortname' => 'required',
                'father_name' => 'required',
                'study_year' => 'required',
                'department' => 'required',
                'university_id' => 'required',
                'year' => 'required',
                'season' => 'required',
                'student_name' => 'required',
                'teacher_review' => 'required',
                'teacher_name' => 'required',
            ]);
        }
        elseif($document->office_id == 2)
        {
            return request()->validate([
                'examinations_review' => 'required',
                'examinations_name' => 'required',
            ]);
        }
        elseif($document->office_id == 3)
        {
            return request()->validate([
                'dean_of_theFaculty' => 'required',
            ]);
        }
    }

    public function successRequestCreate(Request $request)
    {
        $requestdoc = new RequestDoc();
        $requestdoc->type = 'successrequest';
        $requestdoc->name = 'طلب وثيقة ترفع';
        $requestdoc->seq = 1;
        $requestdoc->office_id = auth()->user()->office_id;

        $description = $requestdoc->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_shortname'] = request('student_shortname');
        $description['father_name'] = request('father_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['university_id'] = request('university_id');
        $description['year'] = request('year');
        $description['student_name'] = request('student_name');
        $description['examinations_review'] = request('examinations_review');
        $description['examinations_name'] = request('examinations_name');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $requestdoc->description = $description;

        $requestdoc->save();
    }

    public function successRequestUpdate(Request $request,$id)
    {
        $requestdoc = RequestDoc::find($id);
        $requestdoc->type = 'successrequest';
        $requestdoc->name = 'طلب وثيقة ترفع';
        $requestdoc->office_id = auth()->user()->office_id;

        $description = $requestdoc->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_shortname'] = request('student_shortname');
        $description['father_name'] = request('father_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['university_id'] = request('university_id');
        $description['year'] = request('year');
        $description['student_name'] = request('student_name');
        $description['examinations_review'] = request('examinations_review');
        $description['examinations_name'] = request('examinations_name');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $requestdoc->description = $description;

        $requestdoc->save();
    }

    public function successRequestCreateValidate()
    {
        return request()->validate([
            'number' => 'required',
            'date' => 'required',
            'student_shortname' => 'required',
            'father_name' => 'required',
            'study_year' => 'required',
            'department' => 'required',
            'university_id' => 'required',
            'year' => 'required',
            'student_name' => 'required',
        ]);
    }

    public function successRequestUpdateValidate($id)
    {
        $document = Document::find($id);
        if($document->office_id == 4)
        {
            return request()->validate([
                'number' => 'required',
                'date' => 'required',
                'student_shortname' => 'required',
                'father_name' => 'required',
                'study_year' => 'required',
                'department' => 'required',
                'university_id' => 'required',
                'year' => 'required',
                'student_name' => 'required',
            ]);
        }
        elseif($document->office_id == 2)
        {
            return request()->validate([
                'examinations_review' => 'required',
                'examinations_name' => 'required',
            ]);
        }
        elseif($document->office_id == 3)
        {
            return request()->validate([
                'dean_of_theFaculty' => 'required',
            ]);
        }
    }

    public function coursesCompleteRequestCreate(Request $request)
    {
        $requestdoc = new RequestDoc();
        $requestdoc->type = 'coursescompleterequest';
        $requestdoc->name = 'طلب وثيقة إنهاء مقررات';
        $requestdoc->seq = 1;
        $requestdoc->office_id = auth()->user()->office_id;

        $description = $requestdoc->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_shortname'] = request('student_shortname');
        $description['father_name'] = request('father_name');
        $description['mother_name'] = request('mother_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['university_id'] = request('university_id');
        $description['university_register_year'] = request('university_register_year');
        $description['student_name'] = request('student_name');
        $description['examinations_review'] = request('examinations_review');
        // $description['examinations_name'] = request('examinations_name');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $requestdoc->description = $description;

        $requestdoc->save();
    }

    public function coursesCompleteRequestUpdate(Request $request,$id)
    {
        $requestdoc = RequestDoc::find($id);
        $requestdoc->type = 'coursescompleterequest';
        $requestdoc->name = 'طلب وثيقة إنهاء مقررات';
        $requestdoc->office_id = auth()->user()->office_id;

        $description = $requestdoc->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_shortname'] = request('student_shortname');
        $description['father_name'] = request('father_name');
        $description['mother_name'] = request('mother_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['university_id'] = request('university_id');
        $description['university_register_year'] = request('university_register_year');
        $description['student_name'] = request('student_name');
        $description['examinations_review'] = request('examinations_review');
        // $description['examinations_name'] = request('examinations_name');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $requestdoc->description = $description;

        $requestdoc->save();
    }

    public function coursesCompleteRequestCreateValidate()
    {
        return request()->validate([
            'number' => 'required',
            'date' => 'required',
            'student_shortname' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'study_year' => 'required',
            'department' => 'required',
            'university_id' => 'required',
            'university_register_year' => 'required',
            'student_name' => 'required',
        ]);
    }

    public function coursesCompleteRequestUpdateValidate($id)
    {
        $document = Document::find($id);
        if($document->office_id == 4)
        {
            return request()->validate([
                'number' => 'required',
                'date' => 'required',
                'student_shortname' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'study_year' => 'required',
                'department' => 'required',
                'university_id' => 'required',
                'university_register_year' => 'required',
                'student_name' => 'required',
            ]);
        }
        elseif($document->office_id == 2)
        {
            return request()->validate([
                'examinations_review' => 'required',
                // 'examinations_name' => 'required',
            ]);
        }
        elseif($document->office_id == 3)
        {
            return request()->validate([
                'dean_of_theFaculty' => 'required',
            ]);
        }
    }

    public function moveDocument($document)
    {
        // $document = Document::find($id);
        $doctype = DB::table('documents_types')->where('type',$document->type)->first();
        
        $now = DB::table('document_type_office')->where('document_type_id',$doctype->id)
        ->where('seq',$document->seq)->first();
        $flow = DB::table('document_type_office')->where('document_type_id',$doctype->id)
        ->where('seq','=',$now->seq + 1)->first();
        if($flow === null)
        {
            $flow = DB::table('document_type_office')->where('seq','=',1)->where('document_type_id',$doctype->id)->first();
        }
        // ->where('office_id','<>',$document->office_id)->first();
        $document->office_id = $flow->office_id;
        $document->seq = $flow ->seq;
        $document->save();
    }
}