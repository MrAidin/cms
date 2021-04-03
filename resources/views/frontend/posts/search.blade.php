@extends('frontend.layouts.master')
@section('navigation')
    @include('partials.navigation',['categories'=>$categories])
@endsection
@section('content')

    <h4 class="mt-4">نتیجه عبارت جستوجو شده برای: {{$query}}</h4>
    @foreach($posts as $post)
        <h1 class="mt-4"><a href="{{route('frontend.posts.show',$post->slug)}}"> {{$post->title}}</a></h1>

        <!-- Author -->
        <p class="lead">
            ایجاد شده توسط
            <a href="#">{{$post->user->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>منتشر شده
            {{Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}
        </p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$post->photo->path ?? "https//www.placehold.it/900*300"}}" alt="image">

        <hr>

        <!-- Post Content -->
        <div>{{Str::limit( $post->description,120)}}</div>
        <div class="col-md-12 text-right">
            <a href="{{route('frontend.posts.show',$post->slug)}}" class="btn btn-dark">ادامه مطلب</a>
        </div>
        <hr>


    @endforeach
    <div class="col-md-12 text-center">{{$posts->links()}}</div>
@endsection
@section('category')
    @include('partials.sidebar',['categories'=>$categories])
@endsection
