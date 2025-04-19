<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('assets/css/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/fontawesome-free-6.1.2-web/css/all.css') }}">
</head>
<body> 
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Formulaire d'inscription -->
                <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Inscription</h2>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Nom d'utilisateur" required>
                    </div>
                
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Mot de passe" required>
                    </div>
                
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                    </div>
                
                    <input type="submit" value="S'inscrire" class="btn solid">
                
                    <h1>
                        <a href="{{ route('home') }}" class="logo"><- Retour à l'accueil<span class="span">.</span></a>
                    </h1>
                </form>
                
                <!-- Formulaire de connexion -->
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Connexion</h2>
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Mot de passe" required>
                    </div>
                
                    <input type="submit" value="Se connecter" class="btn solid">
                </form>
            </div>
        </div>
        
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Nouveau ici ?</h3>
                    <p>Si vous n'êtes pas encore inscrit, cliquez sur</p>
                    <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
                </div>
                <img src="{{ asset('img/undraw_education_f8ru.svg') }}" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Déjà membre ?</h3>
                    <p>Si vous avez déjà un compte, cliquez sur</p>
                    <button class="btn transparent" id="sign-in-btn">Se connecter</button>
                </div>
                <img src="{{ asset('img/register.svg') }}" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion initiale du paramètre URL
            const urlParams = new URLSearchParams(window.location.search);
            const container = document.querySelector('.container');
            
            if (urlParams.get('form') === 'signup') {
                container.classList.add('sign-up-mode');
            } else if (urlParams.get('form') === 'login') {
                container.classList.remove('sign-up-mode');
            }
        
            // Gestion des boutons de la navbar
            document.querySelectorAll('[data-nav-link]').forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.href.includes('?form=signup')) {
                        container.classList.add('sign-up-mode');
                    } else if (this.href.includes('?form=login')) {
                        container.classList.remove('sign-up-mode');
                    }
                });
            });
        });
        </script>
    </body>
</body>
</html>