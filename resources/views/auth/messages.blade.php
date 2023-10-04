<!-- Trong tệp resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Liên Hệ</h1>
    <style>
        /* Trong tệp public/css/messages.css */

/* Quy tắc CSS cho bảng */
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 8px;
    text-align: left;
}

/* Quy tắc CSS cho tiêu đề */
h1 {
    font-size: 24px;
    color: #333;
}

    </style>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
