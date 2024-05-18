<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Datos Adicionales</title>
</head>
<body>
    <h1>Datos Adicionales</h1>
    <p>Estimado(a) {{ $participante->nombre }},</p>
    <p>Su pago ha sido rechazado, por favor ingrese al enlace proporcionado e ingrese de nuevo sus datos.</p>
    <p>A continuación se muestran los detalles de su registro:</p>
    <ul>
        <li>Nombre: {{ $participante->nombre }}</li>
        <li>Email: {{ $participante->email }}</li>
        <li>Teléfono: {{ $participante->telefono }}</li>
        <li>Enlace para realizar pago: 127.0.0.1:8000/pago/{{ $participante->codigo_participante }}</li>
    </ul>
    <p>Gracias por participar. Puedes visitar el sitio oficial para más información <a href="https://autoselect.online">aquí</a>.</p>
    <p><strong>NOTA IMPORTANTE:</strong> Por favor guarda tu código de participante, este servirá como asistencia para el día del evento.</p>
</body>
</html>
