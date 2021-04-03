@extends('Admin.layouts.master')
@section('content')
    @include('partials.form-errors')

    <div class="bg-content">
        <h3 class="p-4">ثبت کاربر جدید</h3>
        <div class="col-md-6 offset-3">
            {!! Form::open(['method'=>'POST' , 'route'=>'users.store','files'=>true])  !!}
            <div class="form-group">
                {!! Form::label('name' , 'نام و نام خانوادگی:') !!}
                {!! Form::text('name' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email' , 'ایمیل:') !!}
                {!! Form::text('email' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('roles' , 'نقش:') !!}
                {!! Form::select('roles[]' ,$roles,null,['multiple'=>'multiple','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status' , 'وضعیت:') !!}
                {!! Form::select('status' ,['0'=>'غیر فعال','1'=>'فعال'],0, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('avatar' , 'تصویر پروفایل:') !!}
                {!! Form::file('avatar' ,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password' , 'رمز عبور:') !!}
                {!! Form::password('password' , ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره',['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close()  !!}
        </div>
    </div>
@endsection













