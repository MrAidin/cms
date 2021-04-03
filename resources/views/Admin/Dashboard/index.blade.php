@extends('Admin.layouts.master')

@section('header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$postsCount}}</h3>

                            <p>پست ها</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-folder"></i>
                        </div>
                        <a href="{{route('posts.index')}}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$categoriesCount}}</h3>

                            <p>دسته بندی ها</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-archive"></i>
                        </div>
                        <a href="{{route('categories.index')}}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$usersCount}}</h3>

                            <p>کاربران ثبت شده</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('users.index')}}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$photosCount}}</h3>

                            <p>رسانه</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-images"></i>
                        </div>
                        <a href="{{route('photos.index')}}" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

        </div>
    </section>
@endsection
@section('content')
    <div class="row">
    <div class="col-md-6">
    <h5 class="p-4">آخرین مطالب</h5>
    <table class="table table-hover text shadow bg-light-gradient">
        <thead>
        <tr class='text-center'>
            <th scope="col">عنوان</th>
            <th scope="col">دسته بندی</th>
            <th scope="col">تاریخ ایجاد</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr class='text-center'>

                <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                {{--<td>{{Verta::instance($user->created_at)}}</td>--}}
                <td>{{$post->category->title}}</td>
                <td>{{Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}</td>

            </tr>


        @endforeach
        </tbody>
    </table>
    </div>
    <div class="col-md-6">
        <h5 class="p-4">آخرین کاربران</h5>
        <table class="table table-hover text shadow bg-light-gradient">
            <thead>
            <tr class='text-center'>
                <th scope="col">نام</th>
                <th scope="col">ایمیل</th>
                <th scope="col">تاریخ ایجاد</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class='text-center'>

                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    {{--<td>{{Verta::instance($user->created_at)}}</td>--}}
                    <td>{{$user->email}}</td>
                    <td>{{Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}</td>

                </tr>


            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection



