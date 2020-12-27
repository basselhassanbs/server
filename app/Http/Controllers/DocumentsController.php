<?php

namespace App\Http\Controllers;

use App\Document;
use App\User;
use App\Documentsadd;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;

class DocumentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',[
            'documents' => auth()->user()->timeline(),
            'documentstypes' => auth()->user()->documentstypes()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        switch ($type) {
            case 'success':
                $this->authorize('success-doc-create');
                return view('successdocument.create');
                break;
            case 'time':
                $this->authorize('time-doc-create');
                return view('timedocument.create2');
                break;
            case 'coursescomplete':
                $this->authorize('success-doc-create');
                return view('coursescompletedocument.create');
                break;
        }
        // return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$type)
    {
        
        $documentsadd = new Documentsadd;
        switch ($type) {
            case 'success':
                $documentsadd->successDocumentCreateValidate();
                $documentsadd->successDocumentCreate($request);
                return redirect('/documents');
            case 'time':
                $documentsadd->timeDocumentCreateValidate();
                $documentsadd->timeDocumentCreate($request);
                return redirect('/documents');
            case 'coursescomplete':
                $documentsadd->coursesCompleteDocumentCreateValidate();
                $documentsadd->coursesCompleteDocumentCreate($request);
                return redirect('/documents');
            default:
                return "hello";
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show($type,$id)
    {
        $document = Document::findOrFail($id);
        $this->authorize('doc-show',$document);
        switch ($type) {
            case 'success':
                return view('successdocument.show',compact('document'));
                break;
            case 'time':
                return view('timedocument.show',compact('document'));
                break;
            case 'coursescomplete':
                return view('coursescompletedocument.show',compact('document'));
                break;
        }
        // return view('documents.show',compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($type,$id)
    {
        $document = Document::findOrFail($id);
        $this->authorize('doc-show',$document);
        switch ($type) {
            case 'success':
                return view('successdocument.edit',['document' => $document]);
                break;
            case 'time':
                return view('timedocument.edit',['document' => $document]);
                break;
            case 'coursescomplete':
                return view('coursescompletedocument.edit',['document' => $document]);
                break;
        }
        // $document = Document::findOrFail($id);
        // return view('documents.edit',compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$type)
    {
        // $document = Document::find($id);
        
        $documentsadd = new Documentsadd;
        switch ($type) {
            case 'success':
                $documentsadd->successDocumentUpdateValidate($id);
                $documentsadd->successDocumentUpdate($request,$id);
                return redirect('/documents');
            case 'time':
                $documentsadd->timeDocumentUpdateValidate($id);
                $documentsadd->timeDocumentUpdate($request,$id);
                return redirect('/documents');
            default:
                $documentsadd->coursesCompleteDocumentUpdateValidate($id);
                $documentsadd->coursesCompleteDocumentUpdate($request,$id);
                return redirect('/documents');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        if($document){
            $document->delete();
            return redirect('/documents')->with([
                'message' => 'تم الحذف بنجاح',
                'alert-type' => 'success'
            ]);
        }
        else{
            return redirect('/documents')->with([
                'message' => 'فشل الحذف',
                'alert-type' => 'danger'
            ]);
        }
    }

    public function move($id){
        $document = Document::find($id);
        $documentsadd = new Documentsadd;
        if($document){
            $documentsadd->moveDocument($document);
            return redirect('/documents')->with([
                'message' => 'تم الإرسال بنجاح',
                'alert-type' => 'success'
            ]);
        }
        else{
            return redirect('/documents')->with([
                'message' => 'فشل الإرسال',
                'alert-type' => 'danger'
            ]);
        }
        // $documentsadd->moveDocument($document);
        // return redirect('/documents');
    }

    public function print($type,$id){
        $document = Document::findOrFail($id);
        switch ($type) {
            case 'success':
                return view('successdocument.print',compact('document'));
                break;
            case 'time':
                return view('timedocument.print',compact('document'));
                break;
            case 'coursescomplete':
                return view('coursescompletedocument.print',compact('document'));
                break;
        }
    }
    public function pdf($type,$id){
        $document = Document::findOrFail($id);
        switch ($type) {
            case 'success':
                $data['number'] = $document->description['number'];
                $data['date'] = $document->description['date'];
                $data['student_name'] = $document->description['student_name'];
                $data['birth_place'] = $document->description['birth_place'];
                $data['birth_date'] = $document->description['birth_date'];
                $data['nationality'] = $document->description['nationality'];
                $data['university_id'] = $document->description['university_id'];
                $data['study_year'] = $document->description['study_year'];
                $data['year'] = $document->description['year'];
                $data['season'] = $document->description['season'];
                $data['success_year'] = $document->description['success_year'];
                $data['register_year'] = $document->description['register_year'];
                $data['req_id'] = $document->description['req_id'];
                $data['req_date'] = $document->description['req_date'];
                $data['doc_organizer'] = $document->description['doc_organizer'];
                $data['doc_checker'] = $document->description['doc_checker'];
                $data['head_of_examination_division'] = $document->description['head_of_examination_division'];
                $data['head_of_precinct'] = $document->description['head_of_precinct'];
                $data['dean_of_faculty'] = $document->description['dean_of_faculty'];
                $pdf = PDF::loadView('successdocument.pdf',$data);
                return $pdf->stream('document.pdf');
                // return view('sucessdocument.sucess');
            case 'time':
                $data['number'] = $document->description['number'];
                $data['date'] = $document->description['date'];
                $data['student_name'] = $document->description['student_name'];
                $data['birth_place'] = $document->description['birth_place'];
                $data['birth_date'] = $document->description['birth_date'];
                $data['nationality'] = $document->description['nationality'];
                $data['faculty_name'] = $document->description['faculty_name'];
                $data['study_year'] = $document->description['study_year'];
                $data['department'] = $document->description['department'];
                $data['year'] = $document->description['year'];
                $data['university_id'] = $document->description['university_id'];
                $data['stay_until'] = $document->description['stay_until'];
                $data['doc_organizer'] = $document->description['doc_organizer'];
                $data['head_student_affairs_division'] = $document->description['head_student_affairs_division'];
                $data['dean_of_theFaculty'] = $document->description['dean_of_theFaculty'];
                $pdf = PDF::loadView('timedocument.pdf',$data);
                return $pdf->stream('document.pdf');
                // return view('timedocument.pdf',compact('document'));
            case 'coursescomplete':

                $data['number'] = $document->description['number'];
                $data['date'] = $document->description['date'];
                $data['student_name'] = $document->description['student_name'];
                $data['study_year'] = $document->description['study_year'];
                $data['year'] = $document->description['year'];
                $data['season'] = $document->description['season'];
                $data['average'] = $document->description['average'];
                $data['average_write'] = $document->description['average_write'];
                $data['evaluation'] = $document->description['evaluation'];
                $data['request_id'] = $document->description['request_id'];
                $data['req_date'] = $document->description['req_date'];
                $data['doc_organizer'] = $document->description['doc_organizer'];
                $data['doc_checker'] = $document->description['doc_checker'];
                $data['head_of_examination_division'] = $document->description['head_of_examination_division'];
                $data['head_of_precinct'] = $document->description['head_of_precinct'];
                $data['dean_of_faculty'] = $document->description['dean_of_faculty'];
                $pdf = PDF::loadView('coursescompletedocument.pdf',$data);
                return $pdf->stream('document.pdf');

        }
    }
}
