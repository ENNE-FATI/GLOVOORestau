<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Méthode pour se connecter
    public function login(Request $request)
{
    // Validation des données saisies
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Vérification si l'utilisateur existe avec l'email
    $user = User::where('email', $request->email)->first();

    // Si l'utilisateur existe et que le mot de passe est correct
    if ($user && Hash::check($request->password, $user->password)) {
        // Connexion de l'utilisateur
        Auth::login($user);

        // Redirection vers la page du tableau de bord
        return redirect()->route('dashboard');
    }

    // Si l'utilisateur n'existe pas ou que le mot de passe est incorrect
    return redirect()->back()->withErrors(['email' => 'Cet utilisateur n\'existe pas. Créez d\'abord un compte.']);
}

    // Afficher le formulaire d'inscription (synapse)
    public function showSynapseForm(Request $request)
    {
        // Récupérer l'email de la session
        $email = session('email');
        
        // Vérification si l'email est présent dans la session
        if (!$email) {
            return redirect()->route('home')->withErrors(['email' => 'Email non trouvé dans la session']);
        }

        // Retourner la vue avec l'email pour l'affichage dans le formulaire
        return view('auth.synapse', compact('email'));
    }

    // Traiter le formulaire d'inscription (création du compte)
    public function handleSynapseForm(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Créer l'utilisateur dans la base de données
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Authentifier automatiquement l'utilisateur
        Auth::login($user);

        // Rediriger vers la page d'accueil ou tableau de bord après l'inscription
        return redirect()->route('welcome');
    }

    // Méthode pour afficher la page d'accueil (Welcome)
    public function welcome()
    {
        return view('welcome'); // Assurez-vous que la vue 'welcome.blade.php' existe
    }

    public function signin(Request $request)
{
    // Récupérer les informations de connexion
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Si l'utilisateur existe, rediriger vers la page d'accueil
        return redirect()->route('welcome');
    }

    // Vérifier si l'email existe dans la base de données
    $user = User::where('email', $request->email)->first();
    
    // Si l'utilisateur existe mais le mot de passe est incorrect
    if ($user) {
        return back()->withErrors(['password' => 'Mot de passe incorrect.']);
    }

    // Si l'utilisateur n'existe pas, afficher une alerte et guider vers la page de création de compte
    return redirect()->route('synapse.form')->with('alert', 'Vous n\'avez pas de compte. Veuillez vous inscrire pour en créer un.');
}

}
