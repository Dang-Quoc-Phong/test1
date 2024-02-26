@extends('layout.main')
@section('content')
<a href="add-student">Them moi sinh vien</a>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>year_of_birth</th>
            <th>phone_number</th>
            <th>Action</th>

        </thead>
        <tbody>
            @foreach ($students as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->year_of_birth }}</td>
                    <td>{{ $c->phone_number }}</td>
                    <th>
                        <a href="edit-student/{{$c->id}}">Sửa</a>
                        <a href="delete-student/{{$c->id}}" onclick="return confirm('Ban chac chan muon xoa khong?')">Xóa</a>
                    </th>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
