<!doctype html>
<html lang="en">
@include('user::admin.head')
<body>
<div class="container">
    <br />
    <style>
        a:link, a{color: white !important;}
        td a:link{color: black !important;}
    </style>
    @include('user::admin.errors')

    <button class="btn btn-primary"><a href="/user/add">Thêm Thành Viên</a> </button>
    <button class="btn btn-success"><a href="/user/list">DS Thành Viên</a> </button>

    @yield('content')
</div>
@include('user::admin.footer')
</body>
</html>
