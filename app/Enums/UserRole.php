<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Professor = 'professor';
    case Aluno = 'aluno';

    public function label(): string
    {
        return match ($this) {
            UserRole::Admin => 'Administrador',
            UserRole::Professor => 'Professor',
            UserRole::Aluno => 'Aluno',
        };
    }

    /**
     * Returns an associative array suitable for Filament Select options.
     *
     * @return array<string, string>
     */
    public static function toSelectOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (UserRole $role) => [$role->value => $role->label()])
            ->toArray();
    }
}
