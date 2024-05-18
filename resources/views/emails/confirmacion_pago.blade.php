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
    <p>Gracias por su participación. Su pago ha sido validado correctamente.</p>
    <p>A continuación se muestran los detalles de su registro:</p>
    <ul>
        <li>Nombre: {{ $participante->nombre }}</li>
        <li>Email: {{ $participante->email }}</li>
        <li>Teléfono: {{ $participante->telefono }}</li>
        <li>Si no puede visualizar el codigo qr ingrese al siguiente enlace: https://127.0.0.1:8000/qr/{{$participante->codigo_participante}}</li>
        {!!$qr!!}
    </ul>
    <p>Gracias por participar. Puedes visitar el sitio oficial para más información <a href="https://autoselect.online">aquí</a>.</p>
    <p><strong>NOTA IMPORTANTE:</strong> Por favor guarda tu código qr de participante, este servirá como asistencia para el día del evento.</p>
</body>
</html>
