@extends('Admin.layouts.master')
@section('content')
    @if(Session::has('delete_post'))
        <div class="alert alert-danger">
            <div>
                {{ session('delete_post') }}
            </div>
        </div>
    @endif
    @if(Session::has('add_post'))
        <div class="alert alert-success">
            <div>
                {{ session('add_post') }}
            </div>
        </div>
    @endif
    @if(Session::has('edit_post'))
        <div class="alert alert-warning">
            <div>
                {{ session('edit_post') }}
            </div>
        </div>
    @endif
    <h3 class="p-4">لیست مطالب</h3>
    <table class="table table-hover text shadow bg-light-gradient">
        <thead>
        <tr class='text-center'>
            <th scope="col">تصویر</th>
            <th scope="col">عنوان</th>
            <th scope="col">کاربر</th>
            <th scope="col">توضیحات</th>
            <th scope="col">دسته بندی</th>
            <th scope="col">وضعیت</th>
            <th scope="col">تاریخ ایجاد</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr class='text-center'>
                @if($post->photo_id)
                    <td><img src="{{$post->photo->path}}" alt="100*100" width="100" class="rounded-circle shadow"></td>
                @else
                    <td></td>

                @endif
                <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                <td>{{$post->user->name}}</td>
                <td>{{Str::limit($post->description, 20)}}</td>
                {{--<td>{{Verta::instance($user->created_at)}}</td>--}}
                <td>{{$post->category->title}}</td>

                <td>
                    @if($post->status ==0)
                        <span class="badge badge-danger">منتشر نشده</span>
                    @else
                        <span class="badge badge-success">منتشر شده</span>
                    @endif
                </td>
                <td>{{Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}</td>

            </tr>


        @endforeach
        </tbody>
    </table>
@endsection
