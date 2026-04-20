<x-app-layout>
<div>
<div class="rounded-md bg-white dark:bg-neutral-800 p-6 space-y-8">
    <x-question-result
        variant="correct"
        statement="Seja X o subconjunto dos números inteiros dado por {0,1,2,3,4,5}. Quantos pares distintos (A,B) de subconjuntos A e B de X existem tais que AC – B = {0,1}, em que AC denota o complementar de A em X?"
        :options="['16', '14', '10', '12', '18']"
        selectedOption="D"
        correctOption="D"
        percentage="95,7%"
        difficulty="easy"
    />
    <aside class="right-0 top-0 fixed">
        @include('caixafiltros')
    </aside>
    </div>
    </div>
</x-app-layout>