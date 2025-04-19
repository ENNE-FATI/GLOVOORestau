<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Traitement de l'inscription
    public function register(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
    ]);

    try {
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        event(new \Illuminate\Auth\Events\Registered($user)); // Ajout de l'event
        Auth::login($user);

        return redirect()->route('dashboard')
               ->with('success', 'Inscription réussie ! Bienvenue '.$user->name);

    } catch (\Exception $e) {
        return back()->with('error', 'Erreur lors de inscription: '.$e->getMessage());
    }
}

    // Traitement de la connexion
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ]);
    }
    // Dans AuthController.php
public function showAuthPage(Request $request)
{
    $form = $request->query('form', 'login'); // 'login' par défaut
    return view('auth', ['defaultForm' => $form]);
}

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}