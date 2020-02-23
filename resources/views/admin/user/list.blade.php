@extends('user::admin.main')
@section('content')
    <h1>{{ $title }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Group</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $key => $value)
            <tr>
                <th scope="row">{{ $value->id }}</th>
                <td>{{ $value->username }}</td>
                <td>{{ getGroup($value->level) }}</td>
                <td>
                    <a href="/user/edit/{{ $value->id }}">
                        Edit
                    </a>
                    <a href="/user/delete/{{ $value->id }}">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
