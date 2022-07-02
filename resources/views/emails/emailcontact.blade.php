<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo Electronico</h1>
    <p><strong>Nombre: </strong>{{ $contact['name'] }}</p>
    <p><strong>Email: </strong>{{ $contact['email'] }}</p>
    <p><strong>Asunto: </strong>{{ $contact['object'] }}</p>
    <p><strong>Mensaje: </strong>{{ $contact['message'] }}</p>
</body>
</html>