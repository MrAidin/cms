@extends('Admin.layouts.master')
@section('content')
    @include('partials.form-errors')

    <div class="bg-content">
        <h3 class="p-4"> ویرایش دسته بندی {{ $category->title }} </h3>

        <div class="row">
            <div class="col-md-6 offset-3">
                {!! Form::model($category,['method'=>'PATCH' , 'route'=>['categories.update',$category->id]])  !!}
                <div class="form-group">
                    {!! Form::label('title' , 'عنوان:') !!}
                    {!! Form::text('title' ,$category->title, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug' , 'نام مستعار:') !!}
                    {!! Form::text('slug' ,$category->slug, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('meta_description' , 'متا توضیحات:') !!}
                    {!! Form::textarea('meta_description' ,$category->meta_description, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('meta_keywords' , 'متا برچسب ها:') !!}
                    {!! Form::textarea('meta_keywords' ,$category->meta_keywords, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('ذخیره',['class'=>'btn btn-success float-right']) !!}
                </div>
                {!! Form::close()  !!}
                {!! Form::open(['method'=>'DELETE' , 'route'=>['categories.destroy',$category->id]])  !!}
                <div class="form-group">
                    {!! Form::submit('حذف',['class'=>'btn btn-danger mr-2']) !!}
                </div>
                {!! Form::close()  !!}

            </div>

        </div>


    </div>

@endsection
