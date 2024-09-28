<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle show login form
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle user login
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->regenerateToken();

        $request->authenticate();

        $request->session()->regenerate();

        if ($request->user()->status === 'inactive') {
            Auth::guard('web')->logout();
            $request->session()->regenerateToken();
            flash()->warning('account has been banned from website please connect with support!');

            return redirect('/');
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Handle user logout
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
