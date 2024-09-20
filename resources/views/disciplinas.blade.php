<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <!-- Link para o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>



    <!-- Conteúdo Principal -->
    <div class="main-content">
        <h1 class="text-3xl">Disciplinas</h1>
        @foreach ($categorias as $categoria)
        <div class="mb-10">
            <h2 class="mb-2.5 gray-700 text-xl">{{ $categoria->name }}</h2>

            @if ($categoria->disciplines->isEmpty())
            <p>Nenhuma disciplina cadastrada</p>
            @endif

            <div class="flex flex-wrap gap-5">
                @foreach ($categoria->disciplines as $disciplina)
                <a href="{{ route('topicos', ['slug' => $disciplina->slug]) }}" class="w-40 h-32 rounded-lg flex flex-col items-center justify-center shadow-md text-center cursor-pointer transition-all duration-300 bg-[{{ $categoria->color }}] hover:-translate-y-1.5 hover:brightness-75">
                    <i class="text-3xl mb-2.5 gray-700 fas fa-calculator"></i>
                    <span class="text-sm gray-700">{{ $disciplina->name }}</span>
                </a>
                @endforeach
            </div>
        </div>
        @endforeach


    </div>

</body>

</html>
