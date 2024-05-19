<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function reg(): View
    {
        return view('reg', ['title' => 'Регистрация']);
    }
    public function regSuccess(Request $request): RedirectResponse|View
    {
        $user = User::query()->where('email', $request->email)->first();

        if ($user) {
            $message = 'Такой пользователь уже существует';

            return view('regFail', ['title' => 'Регистрация не удалась', 'message' => $message]);
        }

        try {
            User::query()->create($request->all());
        } catch (Exception $e) {
            return view('regFail', ['title' => 'Регистрация не удалась']);
        }

        $message = 'Регистрация прошла успешно';
        session()->flash('message', $message);

        return redirect()->route('login');
    }

    public function login(): View
    {
        $message = session()->get('message');

        return view('login', ['title' => 'Вход на сайт', 'message' => $message]);
    }

    public function loginSuccess(Request $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // Авторизация прошла успешно
            return redirect()->intended();
        } else {
            // Ошибка авторизации
            return redirect()->back()->with('error', 'Неверный логин или пароль');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
