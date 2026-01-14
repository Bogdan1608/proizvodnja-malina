<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Moja Malina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #DE8686; /* Pozadina koju si tražio */
        }
        .navbar { 
            background-color: #6076A5 !important; /* Plavi meni */
        }
        .nav-link, .navbar-brand { 
            color: white !important; 
        }
        /* Efekat da se vidi kad pređeš mišem preko linka */
        .nav-link:hover {
            color: #D21F3C !important;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4 shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">MOJA MALINA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/">Naslovna</a>
                    <a class="nav-link" href="/plot">Zasadi</a>
                    <a class="nav-link" href="/harvest">Branje</a>
                    <a class="nav-link" href="/analysis">Analiza</a>
                    <a class="nav-link" href="/transport">Transport</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>