<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Diploma por Correo Electrónico</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900">
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

    <div class="flex justify-center text-center">
        <form action="{{ route('buscar-carnet') }}" method="POST" class="mt-4">
            <div class="flex items-center justify-center">
            <img src="{{ asset('images/umg.png') }}" width="100" alt="">
            </div>
            @csrf
            <label for="carnet" class="block mb-2" style="color: white;">Número de Carnet:</label>
            <input type="text" id="carnet" name="carnet" value="{{ $carnet }}" required class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
            <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Buscar</button>
        </form>
    </div>

    @if(session('persona'))
    <div class="xsm:w-full mx-auto bg-gray-900 flex flex-col justify-center">
        <div class="mt-4 text-center">
            <p class="mb-2" style="color: white;">Nombre: {{ session('persona')->nombre }}</p>
            <p class="mb-2" style="color: white;">Apellido: {{ session('persona')->apellido }}</p>
            <p class="mb-2" style="color: white;">Email: {{ session('persona')->email }}</p>
            <p class="mb-2" style="color: white;">Teléfono: {{ session('persona')->telefono }}</p>
        

            <form action="{{ route('generar-diploma') }}" method="POST" class="mt-4">
                @csrf
                <input type="hidden" name="nombre" value="{{ session('persona')->nombre }}">
                <input type="hidden" name="email" value="{{ session('persona')->email }}">
                <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Enviar Correo</button>
            </form>
        </div>
    </div>
    @endif
</body>
</html>
