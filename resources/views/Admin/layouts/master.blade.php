<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت | داشبورد </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">خانه</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">تماس</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-comments-o"></i>
                </a>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                        class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">

            <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/admin/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">آیدین</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                      with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{route('dashboard.index')}}" class="nav-link active">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    داشبورد <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-user-circle"></i>
                                <p>
                                    مدیریت کاربران
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('users.index')}}" class="nav-link">
                                        <i class="fa fa-list-ul nav-icon"></i>
                                        <p>لیست کاربران</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('users.create')}}" class="nav-link">
                                        <i class="fa fa-user-plus nav-icon"></i>
                                        <p>ثبت کاربر جدید</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>کاربر</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- posts btn drop down--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-file-o"></i>
                                <p>
                                    مدیریت مطالب
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('posts.index')}}" class="nav-link">
                                        <i class="fa fa-list-ol nav-icon"></i>
                                        <p>لیست مطالب</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('posts.create')}}" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>ثبت مطلب جدید</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>مطلب</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- categoreis btn drop down--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-archive"></i>
                                <p>
                                    مدیریت دسته بندی ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('categories.index')}}" class="nav-link">
                                        <i class="fa fa-list-ol nav-icon"></i>
                                        <p>لیست دسته بندی ها</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('categories.create')}}" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>ثبت دسته بندی جدید</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>دسته بندی</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{--  drop down for media--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-image"></i>
                                <p>
                                    رسانه ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('photos.index')}}" class="nav-link">
                                        <i class="fa fa-list-ol nav-icon"></i>
                                        <p>لیست فایل ها</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('photos.create')}}" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>آپلود فایل</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>دسته بندی</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-edit"></i>
                                <p>
                                    فرم‌ها
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>اجزا عمومی</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/advanced.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>پیشرفته</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/editors.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ویشرایشگر</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    جداول
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>جداول ساده</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>جداول داده</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-header">مثال‌ها</li>
                        <li class="nav-item">
                          <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon fa fa-calendar"></i>
                            <p>
                              تقویم
                              <span class="badge badge-info right">2</span>
                            </p>
                          </a>
                        </li> -->
                        <!-- <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-envelope-o"></i>
                            <p>
                              ایمیل‌ باکس
                              <i class="fa fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>اینباکس</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>ایجاد</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>خواندن</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-book"></i>
                            <p>
                              صفحات
                              <i class="fa fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/examples/invoice.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>سفارشات</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/profile.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>پروفایل</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/login.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>صفحه ورود</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/register.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>صفحه عضویت</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/lockscreen.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>قفل صفحه</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-plus-square-o"></i>
                            <p>
                              بیشتر
                              <i class="fa fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/examples/404.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>ارور 404</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/500.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>ارور 500</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/blank.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>صفحه خالی</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="starter.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>صفحه شروع</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-header">متفاوت</li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>مستندات</p>
                          </a>
                        </li>
                        <li class="nav-header">برچسب‌ها</li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-danger"></i>
                            <p class="text">مهم</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-warning"></i>
                            <p>هشدار</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-info"></i>
                            <p>اطلاعات</p>
                          </a>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">داشبورد</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
       @yield('header')
        <div class="row">
            <div class="container">

                @yield('content')
            </div>


        </div>
        {{--            </div>--}}
        {{--        </section>--}}
    </div>
    <footer class="main-footer">
        <strong><a href="http://github.com/mraidin">Aidin</a> CopyLeft &copy; 2020 </strong>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>


</body>
<script src="{{asset('js/admin.js')}}" type="application/javascript"></script>
@yield('scripts')


</html>
