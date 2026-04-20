<?php

declare(strict_types=1);

namespace App\Filament\TeacherPanel\Widgets;

use App\Enums\UserRole;
use App\Models\QuestionForum;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CardDashBoardCount extends BaseWidget
{
    protected function getStats(): array
    {
        $totalStudents = User::where('role', UserRole::Aluno)->count();
        $totalQuestionForum = QuestionForum::count();

        return [
            Stat::make('Total de alunos', $totalStudents)
                ->description('estudando na plataforma')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([4, 5, 15, 1, 22, 2, 16])
                ->color('success'),
            Stat::make('Perguntas realizadas pelos estudantes', $totalQuestionForum)
                ->description('pelo fórum')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([1, 3, 4, 2, 5, 3, 6])
                ->color('success'),
        ];
    }
}
