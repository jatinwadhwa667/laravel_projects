<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blad parameter</title>
</head>

<body>

    <a href="{{ route('namedfile.file')}}">About page link</a>

    <br>

    <a href="{{ route('nameparameter')}}">parmter page link</a>


    <br>
    <a href="{{ url('book/test1')}}">test2 page link</a>

    <br>
    <a href="{{ route('book.test2')}}">test2 page link  group route with name parmeter</a>


    

    {{-- <h1>{{ $book1 }}<h2> --}}

        
    {{-- print array --}}
    {{-- {{ print_r($bookdata) }} --}}

    {{-- array data  print using loop --}}

    {{-- <ul>
        @foreach ($bookdata as $data)
            <li>{{ $data }}</li>
        @endforeach
    </ul> --}}
</body>

</html>
