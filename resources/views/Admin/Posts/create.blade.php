@extends('Admin.layouts.master')
@section('content')
    @include('partials.form-errors')

    <div class="bg-content">
        <h3 class="p-4">ثبت مطلب جدید</h3>
        <div class="col-md-10 offset-1">
            {!! Form::open(['method'=>'POST' , 'route'=>'posts.store','files'=>true])  !!}
            <div class="form-group">
                {!! Form::label('title' , 'عنوان:') !!}
                {!! Form::text('title' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('slug' , 'نام مستعار:') !!}
                {!! Form::text('slug' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category' , 'دسته بندی:') !!}
                {!! Form::select('category' ,$categories,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description' , 'توضیحات:') !!}
                {!! Form::textarea('description' ,null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('status' , 'وضعیت:') !!}
                {!! Form::select('status' ,['0'=>'غیر فعال','1'=>'فعال'],0, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('first_photo' , 'تصویر اصلی:') !!}
                {!! Form::file('first_photo' ,null, ['class'=>'form-control']) !!}
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
