<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Glovo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dashboard-container {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .user-card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .user-card:hover {
            transform: translateY(-5px);
        }
        .logout-btn {
            transition: all 0.3s;
        }
        .welcome-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border-radius: 0 0 20px 20px;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <header class="welcome-header py-4 mb-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="display-5 fw-bold">
                            <i class="fas fa-user-circle me-2"></i>
                            Bienvenue, {{ Auth::user()->name }} !
                        </h1>
                        <p class="mb-0">Dernière connexion : {{ Auth::user()->last_login_at?->format('d/m/Y H:i') ?? 'Première connexion' }}</p>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light logout-btn">
                            <i class="fas fa-sign-out-alt me-1"></i> Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container">
            <div class="row g-4">
                <!-- User Info Card -->
                <div class="col-md-6">
                    <div class="card user-card h-100">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title mb-0">
                                <i class="fas fa-id-card me-2"></i>Vos informations
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-envelope me-2 text-primary"></i> Email</span>
                                    <span class="fw-bold">{{ Auth::user()->email }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-calendar-alt me-2 text-primary"></i> Date d'inscription</span>
                                    <span class="fw-bold">{{ Auth::user()->created_at->format('d/m/Y') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-user-shield me-2 text-primary"></i> Statut</span>
                                    <span class="badge bg-success">Compte vérifié</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="col-md-6">
                    <div class="card user-card h-100">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title mb-0">
                                <i class="fas fa-bolt me-2"></i>Actions rapides
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-3">
                                <a href="{{ route('restaurant') }}" class="btn btn-outline-primary btn-lg">
                                    <i class="fas fa-utensils me-2"></i>Voir les restaurants
                                </a>
                                <a href="#" class="btn btn-outline-success btn-lg">
                                    <i class="fas fa-history me-2"></i>Historique des commandes
                                </a>
                                <a href="#" class="btn btn-outline-warning btn-lg">
                                    <i class="fas fa-cog me-2"></i>Paramètres du compte
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="row mt-4 g-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i>Vos statistiques</h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <div class="p-3 border rounded bg-light">
                                        <h2 class="text-primary">12</h2>
                                        <p class="mb-0">Commandes</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 border rounded bg-light">
                                        <h2 class="text-success">4.8</h2>
                                        <p class="mb-0">Note moyenne</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 border rounded bg-light">
                                        <h2 class="text-warning">3</h2>
                                        <p class="mb-0">Favoris</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 border rounded bg-light">
                                        <h2 class="text-danger">1</h2>
                                        <p class="mb-0">Réclamations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-5 py-3 bg-dark text-white">
            <div class="container text-center">
                <p class="mb-0">© 2023 GlovoRestau - Tous droits réservés</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Animation pour les cartes
        document.querySelectorAll('.user-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.boxShadow = '0 10px 15px rgba(0, 0, 0, 0.1)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
            });
        });
    </script>
</body>
</html>