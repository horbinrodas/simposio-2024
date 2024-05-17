<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Confirmación de Pago</title>
</head>
<body>
    <h1>¡Confirmación de Pago!</h1>
    <p>Estimado(a) {{ $participante->nombre }},</p>
    <p>Gracias por su participación. Su pago ha sido recibido correctamente.</p>
    <p>A continuación se muestran los detalles de su participación:</p>
    <ul>
        <li>Nombre: {{ $participante->nombre }}</li>
        <li>Email: {{ $participante->email }}</li>
        <li>Teléfono: {{ $participante->telefono }}</li>
        <li>Código de Participante: 127.0.0.1:8000/pago/{{ $participante->codigo_participante }}</li>
    </ul>
</body>
</html>