@extends('layouts.app')

@section('title', 'Submission List')

@section('content')
    <h1>Daftar Data yang Dikirim</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>File Upload</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submissions as $index => $submission)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $submission->name }}</td>
                    <td>{{ $submission->email }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $submission->file_path) }}" target="_blank">
                            <img src="{{ asset('storage/' . $submission->file_path) }}" width="100">
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="/">← Kembali ke Form</a>
@endsection
