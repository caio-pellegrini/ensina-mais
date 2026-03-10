<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use App\Enums\UserRole;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CardDashBoardCount extends BaseWidget
{
    protected function getStats(): array
    {
        $totalUsers = User::count();
        $totalTeachers = User::where('role', UserRole::Professor)->count();
        $totalStudents = User::where('role', UserRole::Aluno)->count();

        return [
            Stat::make('Total de usuários', $totalUsers)
                ->description('cadastrados na plataforma')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Professores', $totalTeachers),
            Stat::make('Alunos', $totalStudents)
                ->description('estudando na plataforma')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([4, 5, 15, 1, 22, 2, 16])
                ->color('success'),
            
        ];
    }
}