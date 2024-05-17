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
                    <li><a href="#"class="link"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                    
                   </ul>
            </div>

            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu"><img src="icons/menu.svg" class="items-center" alt=""></a>

                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-sky-900">
                    <li><a href="#" class="link"><img src="icons/calendar.svg" class="inline-block mr-2" alt="">Eventos</a></li><br>
                    <li><a href="{{url('inscribirse')}}" class="link"><img src="icons/ticket.svg" class="inline-block mr-2" alt="">Incribirse</a></li><br>
                    <li><a href="#"class="link"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li><br>
                    <li><a href="#"class="link"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li><br>
                    <li><a href="#" class="link"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li><br>
                </ul>
            </div>
        </nav>

        <div class="relative">
                <img src="images/campus.jpeg" alt="" class="w-full h-auto">
            <div class="absolute inset-0  font-bold flex justify-between items-center text-gray-50 ">
                <div class="text-left ml-4 mb-4">
                    <!--<h1 class="text-5xl text-yellow-800 text-gradient bg-clip-text bg-gradient-to-r" style="mix-blend-mode: multiply;">Simpsio 2024 <br><br> Simpsio 2024 <br><br> Simpsio 2024 <br><br> Simpsio 2024 <br></h1>-->
                    <h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-yellow-800 text-gradient bg-clip-text bg-gradient-to-r" style="mix-blend-mode: multiply; left: 5%; top: 70%;">Simpsio 2024</h1>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-yellow-800 text-gradient bg-clip-text bg-gradient-to-r" style="mix-blend-mode: multiply; left: 5%; top: 70%;">Simpsio 2024</h1>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-yellow-600 text-gradient bg-clip-text bg-gradient-to-r" style="mix-blend-mode: multiply; left: 5%; top: 70%;">Simpsio 2024</h1>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-8xl text-yellow-400 text-gradient bg-clip-text bg-gradient-to-r" style="mix-blend-mode: multiply; left: 5%; top: 70%;">Simpsio 2024</h1>
                </div>
                <div class="text-right mr-4 mb-4 font-bold">
                   
                <button onclick="window.location.href='{{ url('inscribirse') }}'" class="absolute bottom-0 right-0 mr-4 mb-4 bg-stone-950 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded">¡Inscríbete Ya!</button>

                </div>
            </div>
        </div>
            
</div>

<section class="bg-pattern-characters-red py-28 bg-gray-800">
            <div class="lg:container 2xl:w-3/5 mx-auto md:flex gap-5 md:w-full p-3 ">
                <div class="left bg-contain w-5/6 md:w-1/2 mx-auto">
            
                    <br><br><br>
                    <h2 class="font-black text-white items-center text-6xl py-8">Simposio 2024 Universidad Mariano Galvez</h2>
                    <p class="text-white text-center w-4/5 mx-auto">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, voluptatum voluptate! Excepturi blanditiis magni voluptatum aliquam. Beatae dolorum facere dolor magni odio minima vel, assumenda incidunt obcaecati consequatur similique cumque?
                    </p>

                    <!--CARD -->
                    <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-72 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/video1.mp4" autoplay loop muted></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-10">INTELIGENCIA ARTIFICIAL</h3>
                            <p class="text-xl">es una disciplina y un conjunto de capacidades cognoscitivas e intelectuales expresadas por sistemas informáticos</p>
                        </div>
                        <div class="dots flex justify-between p-4">
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>

                    <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-72 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/video3.mp4" autoplay loop muted></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-10">Blockchain</h3>
                            <p class="text-xl">la implementación de un registro contable (ledger) distribuido que permite soportar y garantizar la seguridad de dinero digital.</p>
                        </div>
                        <div class="dots flex justify-between p-4">
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>

                </div>

                <div class="right w-5/6 md:w-1/2 text-center mx-auto">
                    
                    <!--CARD -->
                    <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-16 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/video2.mp4" autoplay loop muted></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-8">Power Bi</h3>
                            <p class="text-xl">servicio de análisis de datos de Microsoft orientado a proporcionar visualizaciones interactivas y capacidades de inteligencia empresarial</p>
                            
                        </div>

                        <div class="dots flex justify-between p-4">
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>

                    <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-72 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/tema4.mp4" autoplay loop muted></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-10">AWS</h3>
                            <p class="text-xl">AWS es la plataforma en la nube más adoptada y completa en el mundo, que ofrece más de 200 servicios integrales de centros de datos a nivel global.</p>
                            
                        </div>
                        <div class="dots flex justify-between p-4">
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>

                    <br><br><br><br><br>
                    <h2 class="font-black text-white items-center text-6xl py-8">lugar y Fecha</h2>
                    <p class="text-white text-center w-4/5 mx-auto">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate maxime, dolorem nam impedit suscipit labore iste inventore nostrum veniam libero ipsam. Repudiandae fugit earum perferendis possimus veniam cumque minus sequi!
                    </p>

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
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/contact.svg" class="inline-block mr-2" alt="">Contacto</a></li>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/login.svg" class="inline-block mr-2" alt="">Ingresar</a></li>
                <li><a href="#" class="block py-2 hover:text-white"><img src="icons/start.svg" class="inline-block mr-2" alt="">Inicio</a></li>
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
</body>
</html>