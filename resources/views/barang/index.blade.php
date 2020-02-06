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
    <center>List book</center>
    <table border="1">
        <thead>
            <tr>
                <th>kode</th>
                <th>nama</th>
                <th>harga</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $data)
            <tr>
            <td>{{$data->kode}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->harga}}</td>
            <td><a href="/barang/{{$data->id}}">Show</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
