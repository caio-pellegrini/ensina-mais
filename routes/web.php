<?php


use App\Models\TextTheme;
use App\Models\TextTitle;
use App\Models\Vestibular;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TextTitleController;

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // HOME
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // PAINEL AULAS
    Route::get('/disciplinas', [DisciplineController::class, 'index'])->name('disciplinas');
    Route::get('/disciplinas/{discipline:slug}', [TopicController::class, 'index'])->name('topicos');
    Route::get('/disciplinas/{discipline:slug}/{topic:slug}', [LessonController::class, 'index'])->name('aulas');
    Route::get('/disciplinas/{discipline:slug}/{topic:slug}/{lesson:slug}', [LessonController::class, 'show'])->name('conteudo');

    Route::get('/questoes', [QuestionController::class, 'index'])->name('questao.index');
    Route::post('/questoes/{question}/check', [QuestionController::class, 'checkAnswer'])->name('questions.check');
    Route::get('/questaow', function () {
        return view('questaow');
    });
    Route::get('/questaor', function () {
        return view('questaor');
    });

    Route::get('/filtro', function () {
        return view('components.question-filter');
    });

    Route::get('/redacao', [TextTitleController::class, 'index'])->name('redacao');

    Route::get('/redacao2', function () {
        return view('redacao2');
    })->name('redacao2');

    Route::get('/calendario', function () {
        return view('calendario');
    })->name('calendario');

    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/simulados', function () {
        return view('simulados');
    })->name('simulados');

    Route::get('/simuconcluido', function () {
        return view('simuconcluido');
    });

    Route::get('/area-aluno', function () {
        return view('area-aluno');
    })->name('area-aluno');

    // FORUM
    // Rotas para perguntas
    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index'); // Para exibir o fórum
    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store'); // Para armazenar a pergunta

    // Rotas para respostas
    Route::post('/answers/{questionId}', [ForumController::class, 'storeAnswer'])->name('answers.store');

    // Rotas para pegar os tópicos relacionados a uma disciplina
    Route::get('/topics/{disciplineId}', [ForumController::class, 'getTopicsByDiscipline']);
    Route::get('/topics-by-discipline/{discipline}', [ForumController::class, 'getTopicsByDiscipline']);
});

require __DIR__ . '/auth.php';
