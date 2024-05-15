<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/icon.svg" type="image/x-icon">
    <title>simposio</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class=" xsm:w-full mx-auto">
        <nav class="bg-gray-900 flex justify-between lg:justify-start items-center">
            <div class="logo flex-initial p-2 w-1/6">
                <img src="images/umg.png" width="100" alt="">
            </div>

            <div class="text-red-500 font-bold">
                <h2>UNIVERSIDAD</h2>
                <h2>MARIANO GALVEZ</h2>
            </div>
            
            <div class="links lg:block hidden w-1/6 md:w-4/6">
                <ul class="flex menu text-white-800 items-center justify-center gap-5">
                    <li><a href="#" class="link"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Eventos</a></li><br>
                    <li><a href="{{url('inscribirse')}}" class="link"><img src="icons/ticket.svg" class="inline-block mr-2" alt="">Inscribirse</a></li><br>
                    <li><a href="#"class="link"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li><br>
                    <li><a href="#"class="link"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li><br>
                    <li><a href="{{url('/')}}"class="link"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                   </ul>
            </div>

            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu"><img src="icons/menu.svg" class="items-center" alt=""></a>

                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-sky-900">
                    <li><a href="#" class="link"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Eventos</a></li><br>
                    <li><a href="{{url('inscribirse')}}" class="link"><img src="icons/ticket.svg" class="inline-block mr-2" alt="">Incribirse</a></li><br>
                    <li><a href="#"class="link"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li><br>
                    <li><a href="#"class="link"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li><br>
                    <li><a href="{{url('/')}}"class="link"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                </ul>
            </div>
        </nav>

</div>

<div class="relative">
    <img src="images/fondos2.jpg" alt="" class="w-full h-auto">
    <p class="absolute top-1 text-white bg-black bg-opacity-50 p-4 text-lg md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl text-center md:text-left">
        14 <br> 
        Septiembre <br> 
        ___________________________ <br> 
        UNIVERSIDAD MARIANO <br> 
        GALVEZ, CAMPUS <br> 
        QUETZALTENANGO <br> 
        ___________________________ <br> 
        2 Avenida Zona 1 <br> 
        La Esperanza,  Quetzaltenango
    </p>
</div>

<div class="bg-gray-800 p-8"></div>

<section class="bg-sky-950">
    <div class="max-w-md mx-auto">
        <h3 class="text-red-500 font-bold">INSCRIPCION</h3>
        <form action=""></form>
        <div class="mb-4">
            <label for="nombre" class="block text-blue-50">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="w-full border-blue-500 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">

            <label for="nombre" class="block text-blue-50">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="w-full border-blue-500 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        
            <label for="nombre" class="block text-blue-50">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="w-full border-blue-500 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        
            <label for="nombre" class="block text-blue-50">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="w-full border-blue-500 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        
        </div>
    </div>
</section>
 
<footer class="bg-gray-900 text-gray-300 py-8">
    <div class="container mx-auto flex flex-wrap justify-between items-center">
        <div class="flex-1 mb-4">
            <h4 class="text-lg font-semibold mb-2">Simposio 2024</h4>
            <ul>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Evento</a></li>
                <li><a href="{{url('inscribirse')}}"class="block py-2 hover:text-white"><img src="icons/ticket.svg" class="inline-block mr-2"  alt="">Inscribirse</a></li>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li>
                <li><a href="{{url('/')}}" class="block py-2 hover:text-white"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li>
            </ul>
        </div>
        <div class="flex-1 mb-4">
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="flex-1 mb-4 text-right">
            <h4 class="text-lg font-semibold mb-2">Simposio2024</h4>
            <ul>
                <li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/fb.svg" alt=""></a></li>
                <li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/wsp.svg" alt=""></a></li>
                <li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/tw.svg" alt=""></a></li>
                <!--<li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/yt.svg" alt=""></a></li>-->            </ul>
        </div>
    </div>
</footer>

<script>
        const menuButton = document.querySelector('#mobile-menu');

        menuButton.addEventListener('click', e  => {
            const menu = document.querySelector('.mobile-links');

            menu.classList.toggle('hidden');
        });
</script>
</body>
</html>