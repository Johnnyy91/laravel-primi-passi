<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Helloworld</title>
</head>
<body>
    <a href="{{url('/list')}}">LINK 1</a>
    <h1>HELLO WORLD</h1>

    @php
        $Number = [1,2,4,7,8,3,4,7];
    @endphp

    @foreach($Number as $Numbers )
        <h3>{{$Numbers}}</h3>
    @endforeach

</body>
</html>
