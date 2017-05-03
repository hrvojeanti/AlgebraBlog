<!DOCTYPE html>
<html lang="hr">
    <head>
       
        <title>Laravel project</title>

    </head>
    <body>
        <h2>Dobro Došli!</h2>
        @foreach($items as $item)

            <a href="/item/{{ $item->id }}">

            {{ $item->title }} 

        </a>
            <br />

        @endforeach
    </body>
</html>
