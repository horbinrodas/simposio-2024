<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .diploma {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 18px;
            color: #666;
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="diploma">
        <h1>Diploma de Participación</h1>
        <p>Este diploma certifica que <strong>{{ $participante }}</strong> ha participado en el Simposio 2024.</p>
    </div>
    <div class="footer">
        <p>© {{ date('Y') }} Simposio 2024. Todos los derechos reservados.</p>
    </div>
</body>
</html>
