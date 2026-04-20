<?php

declare(strict_types=1);

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\User;

class TeacherPanelPolicy
{
    public function __construct()
    {
        //
    }

    public function access(User $user): bool
    {
        return in_array($user->role, [UserRole::Professor, UserRole::Admin]);
    }
}
