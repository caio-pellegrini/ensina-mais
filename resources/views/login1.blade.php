@include('customcss')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensina+</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="relative bg-gray-100 user-select-none">
    <header id="inicio" class="bg-gray-100 shadow z-10">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{asset('/imagens/Logo ensina claro.png')}}" alt="Logo" class="h-8 pb-1">
                <span class="border-l border-gray-500 pl-2 flex items-center space-x-2">
                    <img src="{{asset('/imagens/logos_sesi_preto_01.webp')}}" alt="SESI" class="inline h-6">
                    <img src="{{asset('/imagens/logo-senai.fw_.png')}}" alt="SENAI" class="inline h-6 bg-black">
                </span>
            </div>
            <!-- <a href="#" class="z-20 mr-5 font-bold text-blue-500 hover:cursor-pointer hover:underline text-bs mb-1">Login</a> -->
        </div>
    </header>
    <section class="bg-sky-800 shadow-md p-1 mb-16 py-1.5 z-20">
        <nav class="flex space-x-28 justify-center">
            <a href="#sobre" class="transition-all text-white font-medium hover:text-sky-500 subpixel-antialiased">Sobre nós</a>
            <a href="#aprova" class="transition-all text-white font-medium hover:text-sky-500 subpixel-antialiased">Mural dos Aprovados</a>
            <a href="#turbina" class="transition-all text-white font-medium hover:text-sky-500 subpixel-antialiased">Nossa Metodologia</a>
            <a href="#aluno" class="transition-all text-white font-medium hover:text-sky-500 subpixel-antialiased">Estude Conosco</a>
        </nav>
    </section>

    <div><img class="absolute z-0 left-0 top-48" src="{{asset('/imagens/Vector (2).png')}}" alt=""></div>

    <!-- Main Content -->
    <main class="container mx-auto mt-8 p-4 flex space-x-8">

        <!-- Login Form -->
        <div><img class="absolute  ml-10 left-1/4 top-24" src="{{asset('/imagens/Vector (1).png')}}" alt=""></div>

        <div class="bg-white shadow-lg rounded-3xl p-8 w-1/3 z-10">
            <h2 class="text-2xl font-semibold mb-7 subpixel-antialiased">Faça seu login</h2>
            <form>
                <label class="block mb-4 ">
                    <span class="font-medium text-gray-700">Email ou CPF</span>
                    <input type="text" class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50" placeholder="Digite seu Email ou CPF">
                </label>
                <label class="block mb-4">
                    <span class="font-medium text-gray-700 ">Senha</span>
                    <input type="password" class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50" placeholder="Digite sua Senha">
                </label>
                <div class="mb-4">
                    <span class="font-medium text-gray-700">Eu sou um(a)</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Aluno">
                            <span class="ml-2">Aluno(a)</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Professor">
                            <span class="ml-2">Professor(a)</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="transition-all duration-75 w-full bg-sky-800 text-white py-2 rounded-lg hover:bg-sky-500 font-medium">Acessar</button>
                <a href="#" class="block text-center mt-4 text-sky-800 hover:underline transition-all duration-75 font-thin">Esqueci minha senha</a>
            </form>
        </div>

        <!-- Promotional Section -->
        <div class="relative bg-white shadow-lg rounded-3xl w-2/3 overflow-hidden z-10">
            <video autoplay muted loop playsinline src="{{asset('videos/Para Gabaritar.mp4')}}"></video>
        </div>
    </main>

    <!-- Section Title -->
    <section class="mt-56 container mx-auto flex flex-col justify-center gap-40 mb-32 bg-white pt-24">
        <div class="flex items-center justify-center">
            <div class="mt-7">
                <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal">A nossa</h2>
                <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal"><span class="text-sky-800 font-bold">educação</span> em</h2>
                <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal">números</h2>
            </div>
            <div><img class="absolute left-0 -mt-20" src="{{asset('/imagens/Vector (4).png')}}" alt=""></div>
            <div><img class="reveal absolute left-36 top-96 pt-20 mt-10" src="{{asset('/imagens/Vector (5).png')}}" alt=""></div>
            <div><img class="reveal absolute left-2/3 ml-56 -mt-10" src="{{asset('/imagens/Vector (3).png')}}" alt=""></div>

            <!-- Statistics Section -->
            <div class="reveal bg-sky-800 text-white rounded-3xl px-1 py-10 ml-32 mt-8 flex items-center justify-around relative">
                <div class="mx-10 flex-1 text-center">
                    <p class="text-5xl font-bold">+12.500</p>
                    <p class="font-medium">do Ensino Médio cadastrados</p>
                </div>
                <div class="mx-10 flex-1 text-center">
                    <p class="text-5xl font-bold">+400</p>
                    <p class="font-medium">questões no</p>
                    <p class="font-medium">repertório</p>
                </div>
                <div class="mx-10 flex-1 text-center">
                    <p class="text-5xl font-bold">+700</p>
                    <p class="font-medium">aprovações no vestibular</p>
                </div>
            </div>
        </div>

        <!-- sobre nós -->
        <h3 class="reveal text-5xl font-bold text-black justify-center items-center flex subpixel-antialiased" id="sobre">Sobre nós <span class="text-sky-800">+</span></h3>
        <div class="reveal container justify-center items-center flex z-10">
            <div class="bg-sky-800 w-full h-12 absolute"></div>
            <div class="flex space-x-20 mx-20">
                <div class="font-medium text-1xl bg-white shadow-lg rounded-3xl p-6 w-1/3 z-10">
                    <ul class="text-lg list-disc pl-4 space-y-2 text-gray-700">
                        <li class="py-2 subpixel-antialiased">Plataforma de estudos focada em vestibulares</li>
                        <li class="py-2 subpixel-antialiased">Criada pela escola para apoio aos alunos</li>
                        <li class="py-2 subpixel-antialiased">Combina conteúdos teóricos, exercícios, videoaulas e simulados</li>
                    </ul>
                </div>
                <div class="font-medium text-1xl bg-white shadow-lg rounded-3xl p-6 w-1/3 z-10">
                    <ul class="text-lg list-disc pl-4 space-y-2 text-gray-700">
                        <li class="py-2 subpixel-antialiased">Consolida conhecimentos e prepara para exames</li>
                        <li class="py-2 subpixel-antialiased">Aumenta as chances de sucesso acadêmico</li>
                        <li class="py-2 subpixel-antialiased">Oferece um ambiente de aprendizado interativo e acessível</li>
                    </ul>
                </div>
                <div class="font-medium text-1xl bg-white shadow-lg rounded-3xl p-6 w-1/3 z-10">
                    <ul class="text-lg list-disc pl-4 space-y-2 text-gray-700">
                        <li class="py-4">Estudo personalizado para cada aluno</li>
                        <li class="py-4">Flexibilidade de tempo e lugar</li>
                        <li class="py-4">Feedback contínuo para melhorar o desempenho</li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 id="aprova" class="reveal text-5xl font-bold text-black justify-center items-center flex">Alunos <span class="text-red-600 p-4">SESI SENAI</span></h3>
        <div class="relative overflow-hidden w-full max-w-5xl mx-auto">
            <div id="carousel" class="reveal flex transition-transform duration-75 ease-in-out">

                <div class="flex-shrink-0 flex min-w-full space-x-8">
                    <span><img src="{{asset('imagens/joao2r.PNG')}}" alt="" class="rounded-full h-80 w-80"></span>
                    <img src="{{asset('imagens/mariar.PNG')}}" alt="" class="rounded-full h-80 w-80">
                    <img src="{{asset('imagens/everton.PNG')}}" alt="" class="rounded-full h-80 w-80">
                </div>
                <div class="flex justify-between">
                <button id="prev" class="absolute left-40 top-1/2 transform -translate-y-1/2 px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium pt-80 mt-36 hover:text-sky-800 transition-all duration-75"><</button>
                <button id="next" class="absolute right-40 top-1/2 transform -translate-y-1/2 px-2.5 pb-1.5 bg-none text-6xl rounded-full font-medium pt-80 text-sky-500 mt-36 hover:text-sky-800 transition-all duration-75">></button>
            </div>
                <div class="flex-shrink-0 flex min-w-full space-x-8">
                    <img src="{{asset('imagens/Pedromendes.PNG')}}" alt="" class="rounded-full h-80 w-80">
                    <img src="{{asset('imagens/arthurcoghi.PNG')}}" alt="" class="rounded-full h-80 w-80">
                    <img src="{{asset('imagens/Marcelaa.PNG')}}" alt="" class="rounded-full h-80 w-80">
                </div>
            </div>

           

            <!-- Controles -->
        </div>
        
    </section>
       <div class="flex justify-between absolute">
            <button id="prev" class="z-40 absolute left-40 top-1/2 transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium pt-80 mt-36 hover:text-sky-800 transition-all duration-75"><</button>
            <button id="next" class="z-40 absolute left-96 top-1/2 transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium pt-80 mt-36 hover:text-sky-800 transition-all duration-75">></button>

        </div>
    <!-- TURBINA -->
    <div id="turbina" class="reveal relative w-full mt-8 pt-1">
        <img src="{{asset('/imagens/turbinanovo.png')}}" class="w-full object-cover" alt="">
        <div class=" pb-5 mr-5 pr-20 absolute inset-0 flex flex-col items-end justify-center text-white">
            <p class="mt-5 ml-5 font-medium text-5xl subpixel-antialiased">Método Ensina</p>
            <div class="mt-2 ml-5">
                <p class="font-thin mt-1 pr-20 mr-14 text-4xl subpixel-antialiased">+ Conteudo</p>
                <p class="font-thin mt-2 pr-20 mr-14 text-4xl subpixel-antialiased">+ Resultados</p>
                <p class="font-thin mt-2 pr-20 mr-14 text-4xl subpixel-antialiased">+ Aprovados</p>
                <div class=""><a target="blank" href="https://www.youtube.com/watch?v=xvFZjo5PgG0"><button h class="transition-all duration-75 text-lg mt-20 font-medium w-auto bg-yellow-500 text-black py-2 px-8 rounded-md  hover:bg-yellow-600 subpixel-antialiased">Saiba Mais</button></a></div>
            </div>
        </div>
    </div>

    <section id="aluno" class="reveal flex justify-center bg-white my-20 p-20">
        <div class="flex flex-col items-start w-1/2 gap-8">
            <h5 class="text-5xl font-bold text-black">Ainda não é nosso aluno?</h5>
            <p class="text-xl text-gray w-3/4">Garanta uma preparação de excelência para o vestibular! Somos referência nacional em
                educação e preparação para vestibular.</p>
            <a href="#" class="transition-all duration-75 bg-sky-800 subpixel-antialiased text-lg text-white font-semibold rounded-md hover:bg-sky-500 p-4">Conheça nossa proposta de ensino!</a>
        </div>
        <img src="{{asset('imagens/jéssica.png')}}" class="">
    </section>

    <footer class="bg-sky-800 text-white py-5">
        <div class="container mx-auto flex justify-between items-center">
            <div class="font-bold flex flex-col ml-10">
                <p class="mb-1 text-sm">SESI - MONTE ALTO</p>
                <p class="text-sm">Rua Paschoale di Madeo, 301 - Jd. Bela Vista</p>
            </div>
            <div class="font-bold flex flex-col mr-80">
                <p class="mb-1 text-sm">SENAI - MONTE ALTO</p>
                <p class="text-sm">R. Quinze de Maio, 523 - Centro</p>
            </div>
            <div class="font-bold flex flex-col mr-10">
                <p class="mb-5 text-sm">Contato: ce227@gmail.com - (16) 3242-1240</p>
                <p class="text-sm">Copyright 2024 &copy; 2024 Todos os direitos reservados. - DVN</p>
            </div>
        </div>
    </footer>
    <a id="scrollToTop" class="fixed right-2 bottom-2 z-40 bg-sky-800 py-1 rounded-full px-1 text-white transition-opacity duration-300 ease-in-out opacity-0 hover:text-sky-500 font-bold text-xl no-underline border border-white" href="#inicio"><svg href="#inicio" class="hover:invert transition-all duration-100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" height="30px" width="30px" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
<g id="XMLID_13_">
	<path id="XMLID_14_" d="M175.605,104.393c-2.814-2.813-6.628-4.393-10.607-4.393c-3.979,0-7.794,1.581-10.607,4.394l-79.998,80   c-5.857,5.858-5.857,15.355,0.001,21.213c5.857,5.857,15.355,5.858,21.213-0.001l69.392-69.393l69.395,69.394   C237.322,208.536,241.161,210,245,210s7.678-1.464,10.606-4.394c5.858-5.858,5.858-15.355,0-21.213L175.605,104.393z"/>
	<path id="XMLID_15_" d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300   c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"/>
</g>
</svg></a>
</body>

<script>
    const scrollToTopButton = document.getElementById('scrollToTop');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 100) {
            scrollToTopButton.classList.remove('opacity-0');
            scrollToTopButton.classList.add('opacity-100');
        } else {
            scrollToTopButton.classList.remove('opacity-100');
            scrollToTopButton.classList.add('opacity-0');
        }
    });

    const clickImg = document.getElementById('Click');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 100) {
            scrollToTopButton.classList.remove('opacity-0');
            scrollToTopButton.classList.add('opacity-100');
        } else {
            scrollToTopButton.classList.remove('opacity-100');
            scrollToTopButton.classList.add('opacity-0');
        }
    });

    const carousel = document.getElementById('carousel');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    let currentIndex = 0;

    function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentIndex < carousel.children.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });

    //scroll
    const menuLinks = document.querySelectorAll('a[href^="#"]')

    function getDistanceFromTheTop(element) {
        const id = element.getAttribute("href");
        return document.querySelector(id).offsetTop;
    }

    function scrollToSection(event) {
        event.preventDefault();
        const distanceFromTheTop = getDistanceFromTheTop(event.target) - 90;
        smoothScrollTo(0, distanceFromTheTop, 600);
    }

    menuLinks.forEach((link) => {
        link.addEventListener("click", scrollToSection);
    });

    function smoothScrollTo(endX, endY, duration) {
        const startX = window.scrollX || window.pageXOffset;
        const startY = window.scrollY || window.pageYOffset;
        const distanceX = endX - startX;
        const distanceY = endY - startY;
        const startTime = new Date().getTime();

        duration = typeof duration !== "undefined" ? duration : 400;

        const easeInOutQuart = (time, from, distance, duration) => {
            if ((time /= duration / 2) < 1)
                return (distance / 2) * time * time * time * time + from;
            return (-distance / 2) * ((time -= 2) * time * time * time - 2) + from;
        };

        const timer = setInterval(() => {
            const time = new Date().getTime() - startTime;
            const newX = easeInOutQuart(time, startX, distanceX, duration);
            const newY = easeInOutQuart(time, startY, distanceY, duration);
            if (time >= duration) {
                clearInterval(timer);
            }
            window.scroll(newX, newY);
        }, 1000 / 60);
    }

    //efeito
    ScrollReveal().reveal('.reveal', {
        distance: '30px', // Distância que o elemento se move (de baixo para cima)
        origin: 'bottom', // Direção de onde o elemento vem (neste caso, de baixo)
        opacity: 0, // O elemento começa transparente
        duration: 800, // Duração da animação (em milissegundos)
        easing: 'ease-in-out', // Tipo de suavização da animação
        reset: false // A animação ocorre apenas uma vez ao rolar para baixo
    });


    ScrollReveal().reveal('.item', {
        delay: 250
    });
    ScrollReveal().reveal('.item', {
        duration: 500
    });
    ScrollReveal().reveal('.item', {
        delay: 375,
        reset: true
    });

    // Is the same as...

    ScrollReveal().reveal('.item', {
        delay: 375,
        duration: 500,
        reset: true
    });
</script>

</html>