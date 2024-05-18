<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>{{ config('app.name') }}</title>
 
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
 
        @filamentStyles
        @vite('resources/css/app.css')
    </head>
 
    <body class="antialiased bg-gray-800">
        @auth
            <div class="flex justify-end">
              <h1 class="text-white">Bienvenido, {{ auth()->user()->name }}</h1>
              <form action="{{ url('/logout') }}" method="GET">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
              </form>
            </div>
        @endauth
        {{ $slot }}
 
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>