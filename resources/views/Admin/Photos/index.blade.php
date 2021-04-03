@extends('Admin.layouts.master')

@section('content')
    @if(Session::has('delete_file'))
        <div class="alert alert-info">
            <div>
                {{ session('delete_file') }}
            </div>
        </div>
    @endif
    <h3 class="p-4">لیست فایل</h3>
    <table class="table table-hover text shadow bg-light-gradient">
        <thead>
        <tr class='text-center'>
            <th scope="col">شناسه</th>
            <th scope="col">تصویر</th>
            <th scope="col">کاربر</th>
            <th scope="col">تاریخ ایجاد</th>
            <th scope="col">حذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr class='text-center'>
                <td>{{$photo->id}}</td>
                <td><img src="{{$photo->path}}" alt="{{$photo->id}}" class="img" width="100"></td>
                <td>{{$photo->user->name}}</td>
                <td>{{Verta::instance($photo->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}</td>
                <td>
                    {!! Form::open(['method'=>'DELETE' , 'route'=>['photos.destroy',$photo->id]])  !!}
                    {!! Form::submit('حذف',['class'=>'btn btn-danger']) !!}
                    {!! Form::close()  !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-12">{{$photos->links()}}</div>

@endsection



