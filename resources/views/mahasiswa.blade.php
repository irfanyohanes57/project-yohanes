@extends('layouts.app')

@section('content')

<div style="
    width: 90%;
    max-width: 800px;
    margin: 40px auto;
">

    <div style="
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.10);
        text-align: center;
    ">

        <h2 style="margin-bottom: 30px;">
            Profile Mahasiswa UNPAM
        </h2>


        <!-- FOTO -->
        <img
            src="{{ asset('images/foto-saya.jpg') }}"
            alt="Foto Mahasiswa"
            style="
                width: 160px;
                height: 160px;
                object-fit: cover;
                border-radius: 50%;
                margin-bottom: 30px;
            "
        >


        <!-- DATA -->
        <div style="
            display: grid;
            grid-template-columns: 180px auto;
            width: fit-content;
            margin: auto;
            text-align: left;
            font-size: 18px;
            line-height: 2;
        ">

            <strong>Nama :</strong>
            <span>{{ $mahasiswa['nama'] }}</span>

            <strong>NIM :</strong>
            <span>{{ $mahasiswa['nim'] }}</span>

            <strong>Email :</strong>
            <span>{{ $mahasiswa['email'] }}</span>

            <strong>Program Studi :</strong>
            <span>{{ $mahasiswa['prodi'] }}</span>

            <strong>Status :</strong>
            <span>{{ $mahasiswa['status'] }}</span>

        </div>

    </div>

</div>

@endsection