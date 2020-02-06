<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>

<a href="/home">home</a>
<a href="/about">about</a>
<a href="/contact">contact</a>
<a href="/buku">buku</a>
<a href="/barang">barang</a>

    </nav>
    {{-- tempat konten dynamis --}}
        @yield('konten')
    {{-- akhir tempat konten dynamis --}}

    <footer>SMK ASSALAAM</footer>
</body>
</html>
