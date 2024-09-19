<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$topic->name}}</title>
</head>
<style>
    /* Conteúdo Principal */
    .main-content {
        margin-left: 245px;
        flex: 1;
        padding: 2rem;
        overflow-y: auto;
        transition: margin-left 0.3s ease;
    }

    .main-content.hamburger-active {
        margin-left: 30px;
        /* Move o conteúdo para a esquerda quando o menu é escondido */
    }

    .main-content h1 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    @media screen and (max-width: 770px) {
        .main-content {
            margin-left: 0px;
        }

    }
</style>

<body>
    @include('menuteste')
    <div class="main-content">

        <div class="flex h-10 items-center mb-10">
            <p class="text-3xl text-[{{$corCategoria}}] fontbold translate-y-[-3px] mr-3">|</p>
            <p class="text-3xl text-black font-bold">{{$topic->name}}</p>
        </div>


        <div class="flex flex-col gap-7">
            @foreach ($aulas as $aula)
            <a href="{{$aula->link}}">
                <div class=" flex border-2 border-[{{$corCategoria}}] rounded-lg shadow-md min-w-4xl justify-between p-5 pb-14 hover:-translate-x-2 transition ease">
                    <div class="text-gray-700 flex">
                        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="mr-4" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                            </g>
                        </svg>
                        <!-- Texto e Data -->
                        <div class="">
                            <p class="text-lg font-bold text-gray-800">{{$aula->name}}</p>
                            <p class="text-1xl text-gray-800">{{$aula->duration}}</p>
                        </div>
                    </div>
                    <!-- Relevância -->
                    @if ($aula->is_high_relevance)
                    <div class="flex w-[100px] flex-col gap-2">
                        <p class="self-end">Relevância:</p>
                        <p class="font-bold text-white bg-[#FF0000] rounded-lg p-1 w-14 text-center self-end">Alta</p>
                    </div>
                    @else
                    <div class="flex w-[100px] flex-col gap-2">
                        <p class="self-end">Relevância:</p>
                        <p class="font-bold text-white bg-[#21C61C] rounded-lg p-1 w-14 text-center self-end">Baixa</p>
                    </div>
                    @endif
                    <!-- Fim Aula -->
                </div>
            </a>
            @endforeach
        </div>
    </div>
<<<<<<< HEAD
=======
    <<<<<<< HEAD=======<a href="#">
        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="absolute top-7 mt-1 left-72 hover:pl-1 transition-all " xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
            </g>
        </svg>
        </a>

        <p class="text-3xl text-orange-500 fontbold ml-80 mt-6">|</p>
        <p class="text-3xl text-black font-bold pl-2 mt-7">NOME DA MATÉRIA</p>


        <div class="absolute flex flex-col top-20 left-80 space-y-5">
            <div class="items-center flex justify-between p-4 border-2 border-orange-500  rounded-lg shadow-md min-w-4xl h-40">
                <!-- Ícone e Conteúdo -->
                <div class="space-x-4 flex ">
                    <!-- Ícone -->
                    <div class="text-gray-700 mb-24">
                        <a href="#">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="hover:pb-1 transition-all" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                    <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <!-- Texto e Data -->
                    <div class="pr-96">
                        <p class="text-xl font-bold text-gray-800">Aula 1</p>
                        <p class="text-sm text-gray-500">01/01/2024 - 02:41:15</p>
                    </div>
                </div>
                <!-- Relevância -->
                <div class="text-right">
                    <p class="text-xl font-bold text-black">Relevante</p>
                </div>
            </div>

            <div class="items-center flex justify-between p-4 border-2 border-orange-500 rounded-lg shadow-md min-w-4xl h-40">
                <!-- Ícone e Conteúdo -->
                <div class="space-x-4 flex ">
                    <!-- Ícone -->
                    <div class="text-gray-700 mb-24">
                        <a href="#">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="hover:pb-1 transition-all" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                    <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <!-- Texto e Data -->
                    <div class="pr-96">
                        <p class="text-xl font-bold text-gray-800">Aula 2</p>
                        <p class="text-sm text-gray-500">01/01/2024 - 02:41:15</p>
                    </div>
                </div>
                <!-- Relevância -->
                <div class="text-right">
                    <p class="text-xl font-bold text-black">Não Relevante</p>
                </div>
            </div>

            <div class="items-center flex justify-between p-4 border-2 border-orange-500 rounded-lg shadow-md max-w-4xl h-40">
                <!-- Ícone e Conteúdo -->
                <div class="space-x-4 flex ">
                    <!-- Ícone -->
                    <div class="text-gray-700 mb-24">
                        <a href="#">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="hover:pb-1 transition-all" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                    <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <!-- Texto e Data -->
                    <div class="pr-96">
                        <p class="text-xl font-bold text-gray-800">Aula 3</p>
                        <p class="text-sm text-gray-500">01/01/2024 - 02:41:15</p>
                    </div>
                </div>
                <!-- Relevância -->
                <div class="text-right">
                    <p class="text-xl font-bold text-black">Relevante</p>
                </div>
            </div>

            <div class="items-center flex justify-between p-4 border-2 border-orange-500 rounded-lg shadow-md max-w-4xl h-40">
                <!-- Ícone e Conteúdo -->
                <div class="space-x-4 flex ">
                    <!-- Ícone -->
                    <div class="text-gray-700 mb-24">
                        <a href="#">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="hover:pb-1 transition-all" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                    <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <!-- Texto e Data -->
                    <div class="pr-96">
                        <p class="text-xl font-bold text-gray-800">Aula 4</p>
                        <p class="text-sm text-gray-500">01/01/2024 - 02:41:15</p>
                    </div>
                </div>
                <!-- Relevância -->
                <div class="text-right">
                    <p class="text-xl font-bold text-black">Não Relevante</p>
                </div>
            </div>
        </div>

        >>>>>>> 4a0f38714b2c2a6c6d132fe687d39528ee33a5bc
>>>>>>> 7be0a6a04814be523f25e1ad7774a0b78c717c06
</body>

</html>