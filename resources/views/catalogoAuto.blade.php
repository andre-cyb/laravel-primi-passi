<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel catalogo auto</title>
</head>
<body>
    <header>
        <h1>Il nostro usato </h1>
        <nav>
            <span><a href="/">home</a></span>
            <span><a href="/catalogo-auto">Catalogo auto</a></span>
            <span><a href="/chi-siamo">Chi siamo</a></span>
            <span><a href="/contatti">Contatti</a></span>
        </nav>
    </header>
    <main>
        <h2>lista auto di fascia: {{ $fascia }}</h2>
        @foreach($autoUsate as $auto)
            <ul>
                @foreach($auto as $info)
                <li>{{ $info }}</li>

                @endforeach
            </ul>
        @endforeach
    </main>
    


    
</body>
</html>