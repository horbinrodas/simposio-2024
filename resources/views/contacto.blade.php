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
                    <li><a href="{{ url('eventos') }}" class="link"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Eventos</a></li><br>
                    <li><a href="{{url('inscribirse')}}" class="link"><img src="icons/ticket.svg" class="inline-block mr-2" alt="">Inscribirse</a></li><br>
                    <li><a href="{{url('contacto')}}"class="link"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li><br>
                    <li><a href="{{ route('login') }}" class="link"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li><br>
                    <li><a href="{{ url('/') }}"class="link"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                </ul>
            </div>

            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu"><img src="icons/menu.svg" class="items-center" alt=""></a>

                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-sky-900">
                    <li><a href="{{ url('eventos') }}" class="link"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Eventos</a></li><br>
                    <li><a href="{{url('inscribirse')}}" class="link"><img src="icons/ticket.svg" class="inline-block mr-2" alt="">Inscribirse</a></li><br>
                    <li><a href="{{url('contacto')}}"class="link"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li><br>
                    <li><a href="{{ route('login') }}" class="link"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li><br>
                    <li><a href="{{ url('/') }}"class="link"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                </ul>
            </div>
        </nav>

        <div class="relative">
        <img src="images/contacto.jpg" alt="" class="w-full h-auto">
        <p class="absolute top-1 text-white bg-black bg-opacity-50 p-4 text-lg md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl text-center md:text-left">
           CONTACTO Y PREGUNTAS FRECUENTES <br>  
        ______________________________________________ <br> 
        2 Avenida Zona 1 La Esperanza,  Quetzaltenango
        </p>
        </div>

        <div class="bg-white p-8"></div>

        <div class="container mx-auto bg-white">
        <div class="bg-white grid grid-cols-1 md:grid-cols-3 gap-6">

            
            <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                <img src="images/facebook.jpg" alt="Ingresar" class="mb-4">
                <button href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Messenger</button>
            </div>

            <!-- Second Division -->
            <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                <img src="images/whatsapp.jpg" alt="Imprimir" class="mb-4">
                <button href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Imprimir</button>
            </div>

            <!-- Third Division -->
            <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                <img src="images/llamar.jpg" alt="Crear" class="mb-4">
                <h1 class="font-bold items-center">Telefonos: <br> 7778-5512 <br> 7733-4455</h1>
                
            </div>

        </div>
    </div>
    <div class="bg-white p-8"></div>


    <section class="container mx-auto">
        <h2 class="text-2xl font-bold mb-6">Preguntas Frecuentes</h2>

        <div class="bg-white shadow-md rounded-lg p-4 mb-4">
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer('faq1')">
                <h3 class="text-lg font-semibold">¿Cómo puedo registrarme?</h3>
                <span class="text-gray-500" ><img src="icons/plus.svg"></span>
            </div>
            <div id="faq1" class="faq-answer mt-2 text-gray-700">
                <p>Para registrarte, haz clic en el botón de Inscribirse completa el formulario y recibe un correo de confirmacion con mas instrucciones.</p>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4 mb-4">
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer('faq2')">
                <h3 class="text-lg font-semibold">¿En donde se realizara el Evento?</h3>
                <span class="text-gray-500"><img src="icons/plus.svg"></span>
            </div>
            <div id="faq2" class="faq-answer mt-2 text-gray-700">
                <p>El evento se llevara a cabo en el Campus Central UMG 2 Avenida Zona 1 La Esperanza, Quetzaltenango.Para mas detalles ve a la opcion Evento.</p>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4 mb-4">
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer('faq3')">
                <h3 class="text-lg font-semibold">¿Puede asistir alguien que estudie fuera de la UMG?</h3>
                <span class="text-gray-500"><img src="icons/plus.svg"></span>
            </div>
            <div id="faq3" class="faq-answer mt-2 text-gray-700">
                <p>Si, todo aquel interesado en asistir puede completar el registro para poder particiapar en el evento.</p>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4 mb-4">
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleAnswer('faq4')">
                <h3 class="text-lg font-semibold">¿Cuales son los temas del Simposio?</h3>
                <span class="text-gray-500"><img src="icons/plus.svg"></span>
            </div>
            <div id="faq4" class="faq-answer mt-2 text-gray-700">
                <p>para el simposio habran cuatro temas: Power Bi, Inteligancia Artificial, Aws y Blockchain para mas detalles <br>
                ve a la pagina de inicio.</p>
            </div>
        </div>

    </section>

<footer class="bg-gray-900 text-gray-300 py-8">
    <div class="container mx-auto flex flex-wrap justify-between items-center">
        <div class="flex-1 mb-4">
            <h4 class="text-lg font-semibold mb-2">Simposio 2024</h4>
            <ul>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Evento</a></li>
                <li><a href="{{url('inscribirse')}}" class="block py-2 hover:text-white"><img src="icons/ticket.svg" class="inline-block mr-2"  alt="">Inscribirse</a></li>
                <li><a href="{{url('contacto')}}"class="block py-2 hover:text-white"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li>
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
                <!--<li class="inline-block mx-2"><a href="#" class="text-gray-300 hover:text-white"><img src="icons/yt.svg" alt=""></a></li>-->            
            </ul>
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

<script>
        function toggleAnswer(faqId) {
            const answer = document.getElementById(faqId);
            if (answer.style.display === "none" || answer.style.display === "") {
                answer.style.display = "block";
            } else {
                answer.style.display = "none";
            }
        }
    </script>

</body>
</html>