@extends('layouts.master')
@section('konten')

    <nav>

<a href="/home">home</a>
<a href="/about">about</a>
<a href="/contact">contact</a>
<a href="/buku">buku</a>
<a href="/barang">barang</a>
    <br>
    <h1>Ini Halaman barang</h1>

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

@endsection
