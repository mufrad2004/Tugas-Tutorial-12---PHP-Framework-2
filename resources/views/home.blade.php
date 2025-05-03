@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome!</h1>

    <form method="POST" action="{{ route('form.submit') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="file" name="file">
        <button type="submit">Submit</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
        <p>Nama: <strong>{{ session('name') }}</strong></p>
        <p>Email: <strong>{{ session('email') }}</strong></p>
        <p>File berhasil diupload ke: <strong>{{ session('file') }}</strong></p>
    @endif

    <br>
    <a href="/send-email">Kirim Email</a>
@endsection
