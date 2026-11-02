<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Tips - WanderMore</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- I tuoi Fogli di Stile CSS -->
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">
            <span class="badge bg-warning text-dark px-3 py-2">
                WANDERMORE GUIDE
            </span>

            <h1 class="display-4 fw-bold mt-3">
                Travel Tips
            </h1>

            <p class="text-muted">
                Consigli pratici per viaggiare meglio, spendere meno e vivere esperienze indimenticabili.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="bi bi-airplane-fill display-4 text-primary"></i>
                        <h5 class="mt-3">Voli Low Cost</h5>
                        <p class="text-muted">
                            Come trovare i voli migliori senza spendere una fortuna.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="bi bi-backpack-fill display-4 text-success"></i>
                        <h5 class="mt-3">Bagaglio Perfetto</h5>
                        <p class="text-muted">
                            Cosa portare davvero e cosa lasciare a casa.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="bi bi-geo-alt-fill display-4 text-danger"></i>
                        <h5 class="mt-3">Muoversi Facile</h5>
                        <p class="text-muted">
                            Trasporti, mappe e app indispensabili.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="bi bi-shield-check display-4 text-warning"></i>
                        <h5 class="mt-3">Viaggiare Sicuri</h5>
                        <p class="text-muted">
                            Assicurazioni, documenti e consigli utili.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<?php include 'footer.php'; ?>
<!-- Script JavaScript (Bootstrap, jQuery e header.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="header.js"></script>

</body>
</html>