<div class="card my-4">
    <h5 class="card-header">جستجو</h5>
    <div class="card-body">
        {!! Form::open(['method'=>'GET' , 'route'=>'frontend.posts.search'])  !!}
        <div class="input-group">
            {!! Form::text('title' ,null, ['class'=>'form-control']) !!}
            <span class="input-group-btn">
            {!! Form::submit('جستجو',['class'=>'btn btn-secondary']) !!}
            </span>

            {!! Form::close()  !!}
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">دسته بندی ها</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach($categories as $category)
                            <li>
                                <a href="#">{{$category->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
