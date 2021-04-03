@extends('Admin.layouts.master')
@section('content')
    @include('partials.form-errors')

    <div class="bg-content">
        <h3 class="p-4"> ویرایش کاربر {{ $user->name }} </h3>

        <div class="row">
            <div class="col md 3">
                <img src="{{$user->photo->path ?? "/images/100.png"}}" alt="100*100"
                     class="img-fluid img-thumbnail shadow mr-1">

            </div>

            <div class="col-md-9 pl-5">
                {!! Form::model($user,['method'=>'PATCH' , 'route'=>['users.update',$user->id],'files'=>true])  !!}
                <div class=" form-group
            ">
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
                    {!! Form::select('status' ,['0'=>'غیر فعال','1'=>'فعال'],null, ['class'=>'form-control']) !!}
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
                    {!! Form::submit('بروزرسانی',['class'=>'btn btn-success float-right']) !!}
                </div>
                {!! Form::close()  !!}
                {!! Form::open(['method'=>'DELETE' , 'route'=>['users.destroy',$user->id]])  !!}
                <div class="form-group">
                    {!! Form::submit('حذف',['class'=>'btn btn-danger mr-2']) !!}
                </div>
                {!! Form::close()  !!}
            </div>

        </div>


    </div>

@endsection
