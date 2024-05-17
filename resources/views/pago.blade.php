<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pago</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-900">
  @if(isset($cod_participante))
    <div class="xsm:w-full mx-auto bg-gray-900 h-screen flex flex-col justify-center">
      <form action="{{url('/submit-pago')}}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto mt-8">
        <div class="flex items-center justify-center">
          <img src="{{ asset('images/umg.png') }}" width="100" alt="">
        </div>
        @csrf
        <div class="mb-4">
          <label for="cod_participante" class="block text-white text-sm font-bold mb-2">Codigo Participante:</label>
          <input type="text" readonly="readonly" name="cod_participante" value="{{ $cod_participante }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
          <label for="cod_pago" class="block text-white text-sm font-bold mb-2">Codigo Pago:</label>
          <input type="text" placeholder="codigo pago" name="cod_pago" id="cod_pago" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
          <label for="monto" class="block text-white text-sm font-bold mb-2">Monto:</label>
          <input type="number" placeholder="monto" id="monto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
          <label for="fecha_pago" class="block text-white text-sm font-bold mb-2">Fecha de Pago:</label>
          <input type="date" name="fecha_pago" id="fecha_pago" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
          <label for="comprobante" class="block text-white text-sm font-bold mb-2">Comprobante:</label>
          <input type="file" name="comprobante" id="comprobante" accept=".pdf, .jpg, .jpeg, .png" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" required>
          <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
        </div>
        <div class="flex items-center justify-center">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </div>
      </form>
    </div>
  @endif
  @if(isset($message))
    <div class="fixed inset-0 flex items-center justify-center z-50">
      <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">AVISO</h2>
        <p>{{ $message }}</p>
        <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="window.location.href = '/'">Aceptar</button>
      </div>
    </div>
  @endif
</body>
</html>