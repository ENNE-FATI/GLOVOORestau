<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Afficher le formulaire d'inscription
    public function showSignupForm()
    {
        return view('signup');
    }

    // Enregistrer un nouvel utilisateur
    public function register(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Connexion automatique après l'inscription
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Account created and logged in!');
    }

    // Afficher le formulaire de connexion
    public function showSigninForm()
    {
        return view('signin');
    }

    // Connexion d'un utilisateur existant
    public function login(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tentative de connexion
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home')->with('success', 'Welcome back!');
        }

        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }
}
