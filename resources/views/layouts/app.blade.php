<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'PRODI SI UNPAM' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="margin: 0; background-color: #f8f9fa;">

    <!-- NAVBAR -->
    <nav style="
        background-color: #0d6efd;
        padding: 15px 0;
        box-shadow: 0 2px 5px rgba(0,0,0,0.15);
    ">

        <div style="
            width: 90%;
            max-width: 1100px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        ">

            <!-- LOGO / NAMA -->
            <a href="/" style="
                color: white;
                text-decoration: none;
                font-size: 20px;
                font-weight: bold;
            ">
                PRODI SI UNPAM
            </a>

            <!-- MENU -->
            <div>

                <a href="/" style="
                    color: white;
                    text-decoration: none;
                    margin-left: 25px;
                ">
                    Home
                </a>

                <a href="/mahasiswa" style="
                    color: white;
                    text-decoration: none;
                    margin-left: 25px;
                ">
                    Profile
                </a>

                <a href="/project" style="
                    color: white;
                    text-decoration: none;
                    margin-left: 25px;
                ">
                    Project
                </a>

                <a href="/about" style="
                    color: white;
                    text-decoration: none;
                    margin-left: 25px;
                ">
                    About
                </a>

            </div>

        </div>

    </nav>


    <!-- ISI HALAMAN -->
    @yield('content')


    <!-- FOOTER -->
    <footer style="
        text-align: center;
        padding: 20px;
        margin-top: 80px;
        color: #777;
        background-color: white;
    ">

        <small>
            &copy; 2026 All rights reserved.
        </small>

    </footer>

</body>

</html>