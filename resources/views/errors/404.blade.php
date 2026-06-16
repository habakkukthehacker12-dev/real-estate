<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page introuvable</title>

    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #f8fafc, #e2e8f0);
    }

    .error-code {
        font-size: 8rem;
        font-weight: 800;
        color: #0d6efd;
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
                            404
                        </div>

                        <h1 class="fw-bold mt-3">
                            Page introuvable
                        </h1>

                        <p class="text-secondary fs-5 mt-3">
                            La page que vous recherchez n'existe pas ou a été déplacée.
                        </p>

                        <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                            <a href="{{ url('/') }}" class="btn btn-primary btn-lg px-4">
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