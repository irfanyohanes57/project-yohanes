@extends('layouts.app')

@section('content')

<div style="
    width: 90%;
    max-width: 1000px;
    margin: 40px auto;
">

    <div style="
        background-color: white;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.10);
    ">

        <h2 style="margin-top: 0;">
            Selamat Datang Di Halaman Home
        </h2>

        <a href="/mahasiswa" style="
            display: inline-block;
            background-color: #198754;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
        ">
            Lihat Detail
        </a>

    </div>

</div>

@endsection