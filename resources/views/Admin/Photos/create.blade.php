@extends('Admin.layouts.master')
@section('content')
    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/dropzone.css')}}">
    @endsection
    <div class="bg-content pb-5">
        <h3 class="p-4"> آپلود فایل</h3>
        <div class="col-md-10 offset-1">
            {!! Form::open(['method'=>'POST' , 'route'=>'photos.store','files'=>true,'class'=>'dropzone'])  !!}

            {!! Form::close()  !!}
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/dropzone.js')}}"></script>
@endsection













