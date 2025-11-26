@props([
    'variant' => 'correct', // 'correct' (green) or 'incorrect' (red)
    'statement' => '',
    'options' => [],
    'percentages' => ['A' => '0,6%', 'B' => '1,3%', 'C' => '0,7%', 'D' => '95,7%', 'E' => '1,7%'],
    'selectedOption' => null,
    'correctOption' => 'D',
    'percentage' => '95,7%',
    'difficulty' => 'easy', // 'easy', 'medium', 'hard'
])

@php
    // Define colors based on variant
    $colors = $variant === 'correct' ? [
        'background' => 'bg-[#bdd9d2]',
        'primary' => 'bg-[#04a582]',
        'primaryHover' => 'hover:bg-[#27af91]',
        'text' => 'text-[#04a582]',
        'accent' => 'text-green-500',
        'button' => 'bg-[#04a582]',
        'selectedBg' => 'bg-[#04a58269]',
    ] : [
        'background' => 'bg-[#efb9bc]',
        'primary' => 'bg-[#ff0415]',
        'primaryHover' => 'hover:bg-[#ff3e3e]',
        'text' => 'text-[#ff0415]',
        'accent' => 'text-red-500',
        'button' => 'bg-sky-800',
        'selectedBg' => '',
    ];
@endphp

<div class="h-1/2 bg-white dark:bg-neutral-800 p-8 rounded-lg shadow-lg transition duration-300">
    <div class="flex-1 flex flex-col">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Questão</h1>
        <p class="text-lg text-gray-600 dark:text-white mb-6">{{ $statement }}</p>
        <ul class="space-y-3 mb-6">
            @foreach ($options as $index => $option)
                @php
                    $letter = chr(65 + $index);
                    $isSelected = $selectedOption === $letter;
                    $isCorrect = $correctOption === $letter;
                @endphp
                <li>
                    <label class="flex items-center {{ $isSelected && $variant === 'correct' ? $colors['selectedBg'] . ' rounded-lg' : '' }}">
                        <input type="radio" name="options" class="mr-2" {{ $isSelected ? 'checked' : '' }}>
                        <span class="text-gray-700 dark:text-white">({{ $letter }}) {{ $option }}</span>
                    </label>
                    @if ($loop->last)
                        <div class="flex justify-center">
                            <button class="w-28 {{ $colors['button'] }} text-white py-2 font-bold rounded-lg transition duration-300 {{ $variant === 'correct' ? $colors['primaryHover'] : 'hover:bg-blue-600' }}">Responder</button>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Resolution and Statistics -->
    <div class="{{ $colors['background'] }} border-2 p-8 rounded-3xl space-y-6 mt-4">
        <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
            <!-- Left Column -->
            <div class="flex flex-col items-center space-y-4">
                <h1 class="font-semibold">Resolução</h1>
                <button class="{{ $colors['primary'] }} text-white py-2 px-6 rounded-lg {{ $colors['primaryHover'] }}">
                    Ver Resolução
                </button>
                <button class="{{ $colors['primary'] }} text-white py-2 px-6 rounded-lg {{ $colors['primaryHover'] }}">
                    Ver Resolução
                </button>
            </div>

            <!-- Middle Column -->
            <div class="text-center">
                <p class="font-semibold">Percentual de Acertos</p>
                <div class="relative pt-4 w-full">
                    <div class="w-full h-1 bg-gray-300 rounded">
                        <div class="w-11/12 h-1 {{ $colors['primary'] }} rounded"></div>
                    </div>
                    <p class="mt-2 font-semibold {{ $colors['text'] }} text-right">{{ $percentage }}</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="flex flex-col items-center space-y-4">
                <h1 class="font-semibold">Dificuldade</h1>
                <button class="{{ $difficulty === 'easy' ? $colors['primary'] . ' text-white' : 'bg-gray-300 text-gray-500' }} py-1 px-4 rounded-full">Fácil</button>
                <button class="{{ $difficulty === 'medium' ? $colors['primary'] . ' text-white' : 'bg-gray-300 text-gray-500' }} py-1 px-4 rounded-full">Médio</button>
                <button class="{{ $difficulty === 'hard' ? $colors['primary'] . ' text-white' : 'bg-gray-300 text-gray-500' }} py-1 px-4 rounded-full">Difícil</button>
            </div>
        </div>

        <!-- Most Marked Alternatives -->
        <div class="text-center py-4 rounded-xl">
            <p class="font-semibold text-lg">Alternativas mais Marcadas</p>
            <div class="grid grid-cols-5 mt-2 text-sm gap-1">
                @foreach ($percentages as $letter => $pct)
                    <div>
                        <p class="font-bold">{{ $letter }}</p>
                        <p class="{{ $colors['accent'] }} text-xs">{{ $pct }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
