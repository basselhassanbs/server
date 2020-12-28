<?php

namespace App\Http\Controllers;

use App\Office;
use App\RequestDoc;
use App\RequestOperation;
use Illuminate\Http\Request;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;

class RequestDocController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('requestshome',[
            'documents' => auth()->user()->requestTimeLine(),
            'documentstypes' => auth()->user()->documentstypes()
        ]);
        
    }
    public function create($type)
    {
        $this->authorize('req');
        switch ($type) {
            case 'successrequest':
                return view('successrequest.create');
                break;
            case 'timerequest':
                return view('timerequest.create');
                break;
            case 'coursescompleterequest':
                return view('coursescompleterequest.create');
                break;
        }
    }
    public function store(Request $request,$type)
    {
        $requestoperation = new RequestOperation;
        switch ($type) {
            case 'successrequest':
                $requestoperation->successRequestCreateValidate();
                $requestoperation->successRequestCreate($request);
                return redirect('/requests');
            case 'timerequest':
                $requestoperation->timeRequestCreateValidate();
                $requestoperation->timeRequestCreate($request);
                return redirect('/requests');
            case 'coursescompleterequest':
                $requestoperation->coursesCompleteRequestCreateValidate();
                $requestoperation->coursesCompleteRequestCreate($request);
                return redirect('/requests');
            default:
                return "hello";
        }
    }


    public function show($type,$id)
    {
        $document = RequestDoc::findOrFail($id);
        $this->authorize('req-show',$document);
        switch ($type) {
            case 'successrequest':
                return view('successrequest.show',compact('document'));
                break;
            case 'timerequest':
                return view('timerequest.show',compact('document'));
                break;
            case 'coursescompleterequest':
                return view('coursescompleterequest.show',compact('document'));
                break;
        }
    }
    public function edit($type,$id)
    {
        $document = RequestDoc::findOrFail($id);
        $this->authorize('req-show',$document);
        switch ($type) {
            case 'successrequest':
                return view('successrequest.edit',['document' => $document]);

                break;
            case 'timerequest':
                return view('timerequest.edit',['document' => $document]);
                break;
            case 'coursescompleterequest':
                return view('coursescompleterequest.edit',['document' => $document]);
                break;
        }    
    }
    public function update(Request $request,$id,$type)
    {
        $requestoperation = new RequestOperation;
        $document = RequestDoc::findOrFail($id);
        switch ($type) {
            case 'successrequest':
                $requestoperation->successRequestUpdateValidate($id);
                $requestoperation->successRequestUpdate($request,$id);
                return redirect('/requests');
            case 'timerequest':
                $requestoperation->timeRequestUpdateValidate($id);
                $requestoperation->timeRequestUpdate($request,$id);
                return redirect('/requests');
            case 'coursescompleterequest':
                $requestoperation->coursesCompleteRequestUpdateValidate($id);
                $requestoperation->coursesCompleteRequestUpdate($request,$id);
                return redirect('/requests');
            default:
                return "hello";
        }
    }
    public function destroy(RequestDoc $document)
    {
        if($document){
             $document->delete();
            return redirect('/requests')->with([
                'message' => 'تم الحذف بنجاح',
                'alert-type' => 'success'
            ]);
        }
        else{
            return redirect('/requests')->with([
                'message' => 'فشل الحذف',
                'alert-type' => 'danger'
            ]);
        }
    }
    public function move($id){
            $document = RequestDoc::find($id);
            $requestoperation = new RequestOperation;
            if($document){
                $requestoperation->moveDocument($document);
                $office = Office::find($document->office_id);
                return redirect('/requests')->with([
                    'message' => 'تم الإرسال بنجاح إلى مكتب '. $office->name,
                    'alert-type' => 'success'
                ]);
            }
            else{
                return redirect('/requests')->with([
                    'message' => 'فشل الإرسال',
                    'alert-type' => 'danger'
                ]);
            }
            // $documentsadd->moveDocument($document);
            // return redirect('/documents');
        }
    public function print($type,$id){
        $document = RequestDoc::findOrFail($id);
        $this->authorize('req-show',$document);
        switch ($type) {
             case 'successrequest':
                return view('successrequest.print',compact('document'));
                 break;
            case 'timerequest':
                return view('timerequest.print',compact('document'));
                break;
            case 'coursescompleterequest':
                return view('coursescompleterequest.print',compact('document'));
                break;
        }
    }
    public function pdf($type,$id){
        $document = RequestDoc::findOrFail($id);
        // $this->authorize('req-show',$document);
        switch ($type) {
            case 'successrequest':

                $data['number'] = $document->description['number'];
                $data['date'] = $document->description['date'];
                $data['student_shortname'] = $document->description['student_shortname'];
                $data['father_name'] = $document->description['father_name'];
                $data['study_year'] = $document->description['study_year'];
                $data['department'] = $document->description['department'];
                $data['university_id'] = $document->description['university_id'];
                $data['year'] = $document->description['year'];
                $data['student_name'] = $document->description['student_name'];
                $data['examinations_review'] = $document->description['examinations_review'];
                $data['examinations_name'] = $document->description['examinations_name'];
                $data['dean_of_theFaculty'] = $document->description['dean_of_theFaculty'];

                $pdf = PDF::loadView('successrequest.pdf3', $data);
                return $pdf->stream('document.pdf');
                // return view('successrequest.pdf2',compact('data'));
            case 'timerequest':

                $data['number'] = $document->description['number'];
                $data['date'] = $document->description['date'];
                $data['student_shortname'] = $document->description['student_shortname'];
                $data['father_name'] = $document->description['father_name'];
                $data['study_year'] = $document->description['study_year'];
                $data['department'] = $document->description['department'];
                $data['university_id'] = $document->description['university_id'];
                $data['year'] = $document->description['year'];
                $data['season'] = $document->description['season'];
                $data['student_name'] = $document->description['student_name'];
                $data['teacher_review'] = $document->description['teacher_review'];
                $data['teacher_name'] = $document->description['teacher_name'];
                $data['examinations_review'] = $document->description['examinations_review'];
                $data['examinations_name'] = $document->description['examinations_name'];
                $data['examinations_sign'] = $document->description['examinations_sign'];
                $data['dean_of_theFaculty'] = $document->description['dean_of_theFaculty'];
                $data['dean_of_theFaculty_sign'] = $document->description['dean_of_theFaculty_sign'];
                $pdf = PDF::loadView('timerequest.pdf', $data);
                return $pdf->stream('document.pdf');
                // return view('timerequest.pdf',compact('document'));

            case 'coursescompleterequest':
                $data['number'] = $document->description['number'];
                $data['date'] = $document->description['date'];
                $data['student_shortname'] = $document->description['student_shortname'];
                $data['father_name'] = $document->description['father_name'];
                $data['mother_name'] = $document->description['mother_name'];
                $data['study_year'] = $document->description['study_year'];
                $data['department'] = $document->description['department'];
                $data['university_id'] = $document->description['university_id'];
                $data['university_register_year'] = $document->description['university_register_year'];
                $data['student_name'] = $document->description['student_name'];
                $data['examinations_review'] = $document->description['examinations_review'];
                $data['dean_of_theFaculty'] = $document->description['dean_of_theFaculty'];

                $pdf = PDF::loadView('coursescompleterequest.pdf', $data);
                return $pdf->stream('document.pdf');
                // return view('coursescompleterequest.pdf',compact('document'));
        }
    }
}
