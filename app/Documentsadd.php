<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Documentsadd
{
    // protected $flow =[1,3];
    public function successDocumentCreate(Request $request)
    {
        $document = new Document();
        $document->type = 'success';
        $document->name = 'وثيقة ترفع';
        $document->office_id = auth()->user()->office_id;
        
        $description = $document->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_name'] = request('student_name');
        $description['birth_place'] = request('birth_place');
        $description['birth_date'] = request('birth_date');
        $description['nationality'] = request('nationality');
        $description['university_id'] = request('university_id');
        $description['study_year'] = request('study_year');
        $description['year'] = request('year');
        $description['season'] = request('season');
        $description['success_year'] = request('success_year');
        $description['register_year'] = request('register_year');
        $description['req_id'] = request('req_id');
        $description['req_date'] = request('req_date');
        $description['doc_organizer'] = request('doc_organizer');
        $description['doc_checker'] = request('doc_checker');
        $description['head_of_examination_division'] = request('head_of_examination_division');
        $description['head_of_precinct'] = request('head_of_precinct');
        $description['dean_of_faculty'] = request('dean_of_faculty');

        $document->description = $description;
        $document->save();
        // return redirect('/');
    }

    public function successDocumentUpdate(Request $request,$id)
    {
        $document = Document::find($id);
        $document->type = 'success';
        $document->name = 'وثيقة ترفع';
        $document->office_id = auth()->user()->office_id;
        
        $description = $document->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_name'] = request('student_name');
        $description['birth_place'] = request('birth_place');
        $description['birth_date'] = request('birth_date');
        $description['nationality'] = request('nationality');
        $description['university_id'] = request('university_id');
        $description['study_year'] = request('study_year');
        $description['year'] = request('year');
        $description['season'] = request('season');
        $description['success_year'] = request('success_year');
        $description['register_year'] = request('register_year');
        $description['req_id'] = request('req_id');
        $description['req_date'] = request('req_date');
        $description['doc_organizer'] = request('doc_organizer');
        $description['doc_checker'] = request('doc_checker');
        $description['head_of_examination_division'] = request('head_of_examination_division');
        $description['head_of_precinct'] = request('head_of_precinct');
        $description['dean_of_faculty'] = request('dean_of_faculty');

        $document->description = $description;
        $document->save();
        // return redirect('/');
    }
    
    public function successDocumentCreateValidate(){

        return request()->validate([
            'number' => 'required',
            'date' => 'required',
            'student_name' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'nationality' => 'required',
            'university_id' => 'required',
            'study_year' => 'required',
            'year' => 'required',
            'season' => 'required',
            'success_year' => 'required',
            'register_year' => 'required',
            'req_id' => 'required',
            'req_date' => 'required',
            'doc_organizer' => 'required',
            'doc_checker' => 'required',
            'head_of_examination_division' => 'required',
        ]); 
    }

    public function successDocumentUpdateValidate($id){
        $document = Document::find($id);
        if($document->office_id == 2)
        {
            return request()->validate([
                'number' => 'required',
                'date' => 'required',
                'student_name' => 'required',
                'birth_place' => 'required',
                'birth_date' => 'required',
                'nationality' => 'required',
                'university_id' => 'required',
                'study_year' => 'required',
                'year' => 'required',
                'season' => 'required',
                'success_year' => 'required',
                'register_year' => 'required',
                'req_id' => 'required',
                'req_date' => 'required',
                'doc_organizer' => 'required',
                'doc_checker' => 'required',
                'head_of_examination_division' => 'required',
            ]);
        }
        elseif($document->office_id == 5){
            return request()->validate([
                'head_of_precinct' => 'required'
            ]);
        }
        elseif($document->office_id == 3){
            return request()->validate([
                'dean_of_faculty' => 'required'
            ]);
        }
    }

    public function timeDocumentCreate(Request $request)
    {
        $document = new Document();
        $document->type = 'time';
        $document->name = 'وثيقة دوام';
        $document->office_id = auth()->user()->office_id;
        
        $description = $document->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_name'] = request('student_name');
        $description['birth_place'] = request('birth_place');
        $description['birth_date'] = request('birth_date');
        $description['nationality'] = request('nationality');
        $description['faculty_name'] = request('faculty_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['year'] = request('year');
        $description['university_id'] = request('university_id');
        $description['stay_until'] = request('stay_until');
        $description['doc_organizer'] = request('doc_organizer');
        $description['head_student_affairs_division'] = request('head_student_affairs_division');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $document->description = $description;

        $document->save();
    }
    public function timeDocumentUpdate(Request $request,$id)
    {
        $document = Document::find($id);
        $document->type = 'time';
        $document->name = 'وثيقة دوام';
        $document->office_id = auth()->user()->office_id;
        
        $description = $document->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_name'] = request('student_name');
        $description['birth_place'] = request('birth_place');
        $description['birth_date'] = request('birth_date');
        $description['nationality'] = request('nationality');
        $description['faculty_name'] = request('faculty_name');
        $description['study_year'] = request('study_year');
        $description['department'] = request('department');
        $description['year'] = request('year');
        $description['university_id'] = request('university_id');
        $description['stay_until'] = request('stay_until');
        $description['doc_organizer'] = request('doc_organizer');
        $description['head_student_affairs_division'] = request('head_student_affairs_division');
        $description['dean_of_theFaculty'] = request('dean_of_theFaculty');
        $document->description = $description;

        // $now = DB::table('document_type_office')->where('office_id',$document->office_id)->first();
        // $flow = DB::table('document_type_office')->where('document_type_id',1)
        // ->where('seq','>',$now->seq)->first();
        // if($flow == null)
        // {
        //     $flow = DB::table('document_type_office')->where('document_type_id',1)->first();
        // }
        // // ->where('office_id','<>',$document->office_id)->first();
        // $document->office_id = $flow->office_id;

        $document->save();
    }
    public function timeDocumentCreateValidate(){

        return request()->validate([
            'number' => 'required',
            'date' => 'required',
            'student_name' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'nationality' => 'required',
            'faculty_name' => 'required',
            'study_year' => 'required',
            'department' => 'required',
            'year' => 'required',
            'university_id' => 'required',
            'stay_until' => 'required',
            'doc_organizer' => 'required',
            'head_student_affairs_division' => 'required',
        ]); 
    }

    public function timeDocumentUpdateValidate($id){
        $document = Document::find($id);
        if($document->office_id == 1)
        {
            return request()->validate([
                'number' => 'required',
                'date' => 'required',
                'student_name' => 'required',
                'birth_place' => 'required',
                'birth_date' => 'required',
                'nationality' => 'required',
                'faculty_name' => 'required',
                'study_year' => 'required',
                'department' => 'required',
                'year' => 'required',
                'university_id' => 'required',
                'stay_until' => 'required',
                'doc_organizer' => 'required',
                'head_student_affairs_division' => 'required',
            ]);
        }
        elseif($document->office_id == 3){
            return request()->validate([
                'dean_of_theFaculty' => 'required'
            ]);
        }
    }

    public function coursesCompleteDocumentCreate(Request $request)
    {
        $document = new Document();
        $document->type = 'coursescomplete';
        $document->name = 'وثيقة إنهاء مقررات';
        $document->office_id = auth()->user()->office_id;
        
        $description = $document->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_name'] = request('student_name');
        $description['study_year'] = request('study_year');
        $description['year'] = request('year');
        $description['season'] = request('season');
        $description['average'] = request('average');
        $description['average_write'] = request('average_write');
        $description['evaluation'] = request('evaluation');
        $description['request_id'] = request('request_id');
        $description['req_date'] = request('req_date');
        $description['doc_organizer'] = request('doc_organizer');
        $description['doc_checker'] = request('doc_checker');
        $description['head_of_examination_division'] = request('head_of_examination_division');
        $description['head_of_precinct'] = request('head_of_precinct');
        $description['dean_of_faculty'] = request('dean_of_faculty');

        $document->description = $description;

        $document->save();
    }

    public function coursesCompleteDocumentUpdate(Request $request,$id)
    {
        $document = Document::find($id);
        $document->type = 'coursescomplete';
        $document->name = 'وثيقة إنهاء مقررات';
        $document->office_id = auth()->user()->office_id;
        
        $description = $document->description;
        $description['number'] = request('number');
        $description['date'] = request('date');
        $description['student_name'] = request('student_name');
        $description['study_year'] = request('study_year');
        $description['year'] = request('year');
        $description['season'] = request('season');
        $description['average'] = request('average');
        $description['average_write'] = request('average_write');
        $description['evaluation'] = request('evaluation');
        $description['request_id'] = request('request_id');
        $description['req_date'] = request('req_date');
        $description['doc_organizer'] = request('doc_organizer');
        $description['doc_checker'] = request('doc_checker');
        $description['head_of_examination_division'] = request('head_of_examination_division');
        $description['head_of_precinct'] = request('head_of_precinct');
        $description['dean_of_faculty'] = request('dean_of_faculty');

        $document->description = $description;

        $document->save();
    }
    public function coursesCompleteDocumentCreateValidate(){

        return request()->validate([
            'number' => 'required',
            'date' => 'required',
            'student_name' => 'required',
            'study_year' => 'required',
            'year' => 'required',
            'season' => 'required',
            'average' => 'required',
            'average_write' => 'required',
            'evaluation' => 'required',
            'request_id' => 'required',
            'req_date' => 'required',
            'doc_organizer' => 'required',
            'doc_checker' => 'required',
            'head_of_examination_division' => 'required',
        ]); 
    }

    public function coursesCompleteDocumentUpdateValidate($id){

        $document = Document::find($id);
        if($document->office_id == 2)
        {
            return request()->validate([
                'number' => 'required',
                'date' => 'required',
                'student_name' => 'required',
                'study_year' => 'required',
                'year' => 'required',
                'season' => 'required',
                'average' => 'required',
                'average_write' => 'required',
                'evaluation' => 'required',
                'request_id' => 'required',
                'req_date' => 'required',
                'doc_organizer' => 'required',
                'doc_checker' => 'required',
                'head_of_examination_division' => 'required',
            ]);
        }
        elseif($document->office_id == 5){
            return request()->validate([
                'head_of_precinct' => 'required'
            ]);
        }
        elseif($document->office_id == 3){
            return request()->validate([
                'dean_of_faculty' => 'required'
            ]);
        } 
    }

    public function moveDocument($document)
    {
        // $document = Document::find($id);
        $doctype = DB::table('documents_types')->where('type',$document->type)->first();
        // $doctypeid = \App\DocumentsTypes::whereIn('type',$document->type)->first();
        // $doctypeid = 5;
        $now = DB::table('document_type_office')->where('document_type_id',$doctype->id)->where('office_id',$document->office_id)->first();
        $flow = DB::table('document_type_office')->where('document_type_id',$doctype->id)
        ->where('seq','=',$now->seq + 1)->first();
        if($flow === null)
        {
            $flow = DB::table('document_type_office')->where('document_type_id',$doctype->id)->where('seq',1)->first();
        }
        // ->where('office_id','<>',$document->office_id)->first();
        $document->office_id = $flow->office_id;
        $document->save();
    }
}