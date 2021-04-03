@extends('Admin.layouts.master')
@section('content')
    @if(Session::has('delete_category'))
        <div class="alert alert-danger">
            <div>
                {{ session('delete_category') }}
            </div>
        </div>
    @endif
    @if(Session::has('add_category'))
        <div class="alert alert-success">
            <div>
                {{ session('add_category') }}
            </div>
        </div>
    @endif
    @if(Session::has('edit_category'))
        <div class="alert alert-warning">
            <div>
                {{ session('edit_category') }}
            </div>
        </div>
    @endif
    <h3 class="p-4">لیست دسته بندی ها</h3>
    <table class="table table-hover text shadow bg-light-gradient">
        <thead>
        <tr class='text-center'>
            <th scope="col">شناسه #</th>
            <th scope="col">عنوان</th>
            <th scope="col">تاریخ ایجاد</th>

        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr class='text-center'>
                <td>{{$category->id}}</td>
                <td><a href="{{route('categories.edit',$category->id)}}">{{$category->title}}</a></td>
                <td>{{Verta::instance($category->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>
    <div class="col-md-12"></div>
@endsection
