@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2>مكتب {{ auth()->user()->office->name }}</h2>
                    <div class="dropdown ml-auto">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          إضافة وثيقة
                        </button>
                        <div class="dropdown-menu">
                            @foreach ($documentstypes as $value)
                                <a class="dropdown-item" href="/documents/{{ $value->type }}/create">{{ $value->name }}</a>
                            @endforeach
                        </div>
                      </div>
                </div>
                
                    <div class="table-responsive ">
                        <table class="table card-table">
                            <thead>
                                <tr>
                                    <th>اسم الطالب</th>
                                    <th>نوع الوثيقة</th>
                                    <th>تاريخ الوثيقة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $document)
                                    <tr>
                                        <td><a href="/documents/{{ $document->type }}/{{ $document->id }}">{{ $document->description['student_name'] }}</a></td>
                                        <td>{{ $document->name }}</td>
                                        <td>{{ $document->created_at->toDateString() }}</td>
                                        <td>
                                            <a href="/documents/{{ $document->type }}/{{ $document->id }}/edit" class="btn btn-primary btn-sm">تعديل</a>
                                            <a href="javascript:void(0)" onclick="if (confirm('سيتم إرسال الوثيقة إلى المكتب المختص، هل أنت متأكد!')) { document.getElementById('move-{{ $document->id }}').submit();} else { return false; }" class="btn btn-success btn-sm">إرسال</a>
                                            <form action="/documents/{{ $document->id }}/move" method="POST" id="move-{{ $document->id }}" style="display: none">
                                                @csrf
                                                @method('PUT')
                                            </form>
                                            <a href="javascript:void(0)" onclick="if (confirm('هل أنت متأكد!')) { document.getElementById('delete-{{ $document->id }}').submit();} else { return false; }" class="btn btn-danger btn-sm">حذف</a>
                                            <form action="/documents/{{ $document->id }}" method="POST" id="delete-{{ $document->id }}" style="display: none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <td colspan="4">
                                    <div>
                                        {!! $documents->links() !!}
                                    </div>
                                </td>
                            </tfoot>
                        </table>
                    </div>
                
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
