<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
        }
        img {
            display: block;
            height: auto;
            border: 0;
            width: 25%;
        }
        pre {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div align="center">
        <img src="{{ $message->embed( asset('img/logo.jpg')) }}" alt="logo">
    </div>
    <div align="justify">
        <p>estimad@ <strong>{{ $user->name }}</strong></p>
        <pre>{{ $content }}</pre>
    </div>

    <br><hr>

    <div align="center">
        <em>Orderweb 1.0. este es un correo generado automaticamente.
            por favor, no responder a este mensaje.
        </em>
    </div>
</body>
</html>
