<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Accès interdit</title>

    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #fff5f5, #ffe3e3);
    }

    .error-code {
        font-size: 8rem;
        font-weight: 800;
        color: #dc3545;
        line-height: 1;
    }

    .error-card {
        max-width: 700px;
        border: none;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
    }

    .illustration {
        font-size: 5rem;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-lg-8">

                <div class="card error-card">
                    <div class="card-body p-5 text-center">

                        <div class="error-code">
                            403
                        </div>

                        <h1 class="fw-bold mt-3">
                            Accès interdit
                        </h1>

                        <p class="text-secondary fs-5 mt-3">
                            Vous n'avez pas les autorisations nécessaires pour accéder à cette ressource.
                        </p>

                        <div class="alert alert-warning mt-4">
                            Si vous pensez qu'il s'agit d'une erreur, contactez un administrateur.
                        </div>

                        <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                            <a href="{{ url('/') }}" class="btn btn-danger btn-lg px-4">
                                Retour à l'accueil
                            </a>

                            <a href="{{ route('properties.index') }}" class="btn btn-outline-secondary btn-lg px-4">
                                Voir tous les biens
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>