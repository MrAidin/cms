@extends('Admin.layouts.master')
@section('content')
    @include('partials.form-errors')

    <div class="bg-content">
        <h3 class="p-4">ثبت دسته بندی جدید </h3>
        <div class="col-md-6 offset-3">
            {!! Form::open(['method'=>'POST' , 'route'=>'categories.store'])  !!}
            <div class="form-group">
                {!! Form::label('title' , 'عنوان:') !!}
                {!! Form::text('title' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('slug' , 'نام مستعار:') !!}
                {!! Form::text('slug' ,null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('meta_description' , 'متا توضیحات:') !!}
                {!! Form::textarea('meta_description' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('meta_keywords' , 'متا برچسب ها:') !!}
                {!! Form::textarea('meta_keywords' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره',['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close()  !!}
        </div>
    </div>
@endsection
