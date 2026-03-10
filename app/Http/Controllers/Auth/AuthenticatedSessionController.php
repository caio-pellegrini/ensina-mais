<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Verificar o papel (role) do usuário e redirecionar para a rota apropriada
        $user = Auth::user();

        if ($user->role === UserRole::Aluno) {
            return redirect()->route('home');
        } elseif ($user->role === UserRole::Professor) {
            return redirect()->intended('/professor');
        } elseif ($user->role === UserRole::Admin) {
            return redirect()->intended('/admin');
        }

        // Caso o role não seja identificado, redireciona para o dashboard por padrão
        return redirect()->intended(route('home'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
