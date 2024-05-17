<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Diploma por Correo Electrónico</title>
</head>
<body>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buscar-carnet') }}" method="POST">
        @csrf
        <label for="carnet">Número de Carnet:</label>
        <input type="text" id="carnet" name="carnet" required>
        <button type="submit">Buscar</button>
    </form>

    @if(session('persona'))
        <div>
            <p>Nombre: {{ session('persona')->nombre }}</p>
            <p>Apellido: {{ session('persona')->apellido }}</p>
            <p>Email: {{ session('persona')->email }}</p>
            <p>Teléfono: {{ session('persona')->telefono }}</p>
        </div>

        <form action="{{ route('generar-diploma') }}" method="POST">
            @csrf
            <input type="hidden" name="nombre" value="{{ session('persona')->nombre }}">
            <input type="hidden" name="email" value="{{ session('persona')->email }}">
            <button type="submit">Enviar Correo</button>
        </form>
    @endif
</body>
</html>
