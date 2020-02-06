<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show data</title>
</head>
<body>
    <fieldset>
        <legend>Show Data</legend>
    kode : <b>{{$barang->kode}}</b><br>
    nama : <b>{{$barang->nama}}</b><br>
    harga : <b>{{$barang->harga}}</b><br>
    foto : <img src="{{$barang->foto}}" alt="">




    </fieldset>
</body>
</html>
