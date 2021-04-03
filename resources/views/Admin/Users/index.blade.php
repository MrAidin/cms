@extends('Admin.layouts.master')

@section('content')
    @if(Session::has('delete_user'))
        <div class="alert alert-success">
            <div>
                {{ session('delete_user') }}
            </div>
        </div>
    @endif
    @if(Session::has('add_user'))
        <div class="alert alert-success">
            <div>
                {{ session('add_user') }}
            </div>
        </div>
    @endif
    @if(Session::has('edit_user'))
        <div class="alert alert-success">
            <div>
                {{ session('edit_user') }}
            </div>
        </div>
    @endif
    <h3 class="p-4">لیست کاربران</h3>
    <table class="table table-hover text shadow bg-light-gradient">
        <thead>
        <tr class='text-center'>
            <th scope="col">آواتار</th>
            <th scope="col">نام</th>
            <th scope="col">ایمیل</th>
            <th scope="col">نقش</th>
            <th scope="col">وضعیت</th>
            <th scope="col">تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class='text-center'>
                @if($user->photo_id)
                    <td><img src="{{$user->photo->path}}" alt="100*100" width="100" class="rounded-circle shadow"></td>
                @else
                    <td></td>

                @endif
                <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                {{--<td>{{Verta::instance($user->created_at)}}</td>--}}
                <td>
                    <ul>
                        @foreach($user->roles as $role)
                            <li class="li-none">{{$role->name}}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    @if($user->status ==0)
                        <span class="badge badge-danger">غیر فعال</span>
                    @else
                        <span class="badge badge-success">فعال</span>
                    @endif
                </td>
                <td>{{Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
