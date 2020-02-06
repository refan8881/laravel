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
    title : <b>{{$book->title}}</b><br>
    publisher : <b>{{$book->publisher}}</b><br>
    price : <b>{{$book->price}}</b><br>
    pages : <b>{{$book->pages}}</b><br>
    synopsis : <b>{{$book->synopsis}}</b><br>
    status : <b>@if ($book->status == 1 )</b>
                <b>premium</b>
                @else
                pirated
                @endif
    <br>date : <b>{{$book->date}}</b>


    </fieldset>
</body>
</html>
