@php
$titoloBenvenuto = "Benvenuto nella Home Page";

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    
    <h1>{{ $titoloBenvenuto }}</h1>
    <header>
        <nav>
            <span><a href="">home</a></span>
            <span><a href="/catalogo-auto">Catalogo auto</a></span>
            <span><a href="/chi-siamo">Chi siamo</a></span>
            <span><a href="/contatti">Contatti</a></span>
        </nav>
    </header>


    <h2>esempio di dati passati tramite view()</h2>

    <ul>
        <li>{{ $brand }}</li>
        <li>{{ $model }}</li>
        <li>{{ $km }} km</li>
        <li>{{ $color }}</li>
    </ul>

</body>
</html>


