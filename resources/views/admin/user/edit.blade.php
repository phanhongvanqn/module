@extends('user::admin.main')
@section('content')
    <h1>{{ $title }}</h1>

    <form action="" method="post">
        <div class="form-group">
            <label>Tên đăng nhập</label>
            <input type="text" class="form-control" name="username" value="{{ $data->username }}" readonly>
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" name="password">
        </div>

        <div class="form-group">
            <label for="">Nhập lại Mật khẩu</label>
            <input type="password" class="form-control" id="" name="password_confirmation">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Nhóm</label>
            <select class="form-control" name="level">
                <option value="1" {{ (($data->level == 1) ? 'selected': '') }}>Bán Hàng</option>
                <option value="2" {{ (($data->level == 2) ? 'selected': '') }}>Pha Chế</option>
                <option value="3" {{ (($data->level == 3) ? 'selected': '') }}>Lễ Tân</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        @csrf
    </form>
@endsection
