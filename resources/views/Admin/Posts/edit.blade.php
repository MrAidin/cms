@extends('Admin.layouts.master')
@section('content')
    @include('partials.form-errors')

    <div class="bg-content">
        <h3 class="p-4"> ویرایش کاربر {{ $post->title }} </h3>

        <div class="row">
            <div class="col md 3">
                <img src="{{$post->photo->path ?? "/images/100.png"}}" alt="100*100"
                     class="img-fluid img-thumbnail shadow mr-1">

            </div>

            <div class="col-md-9 pl-5">
                {!! Form::model($post,['method'=>'PATCH' , 'route'=>['posts.update',$post->id],'files'=>true])  !!}
                <div class="form-group">
                    {!! Form::label('title' , 'عنوان:') !!}
                    {!! Form::text('title' ,$post->title, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug' , 'نام مستعار:') !!}
                    {!! Form::text('slug' ,$post->slug, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category' , 'دسته بندی:') !!}
                    {!! Form::select('category' ,$categories,$post->category->id,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description' , 'توضیحات:') !!}
                    {!! Form::textarea('description' ,$post->description, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('status' , 'وضعیت:') !!}
                    {!! Form::select('status' ,['0'=>'غیر فعال','1'=>'فعال'],null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('first_photo' , 'تصویر اصلی:') !!}
                    {!! Form::file('first_photo' ,null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('meta_description' , 'متا توضیحات:') !!}
                    {!! Form::textarea('meta_description' ,$post->meta_description, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('meta_keywords' , 'متا برچسب ها:') !!}
                    {!! Form::textarea('meta_keywords' ,$post->meta_keywords, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('ذخیره',['class'=>'btn btn-success float-right']) !!}
                </div>
                {!! Form::close()  !!}
                {!! Form::open(['method'=>'DELETE' , 'route'=>['posts.destroy',$post->id]])  !!}
                <div class="form-group">
                    {!! Form::submit('حذف',['class'=>'btn btn-danger mr-2']) !!}
                </div>
                {!! Form::close()  !!}

            </div>

        </div>


    </div>

@endsection
