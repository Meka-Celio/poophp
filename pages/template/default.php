<?php
use app\App; App::getTitle() 
?>

<!doctype html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo App::getTitle() ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">">
    </head>
    <body class="d-flex flex-column h-100">
    
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand">Demo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=single">Single</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>

        <!-- Begin page content -->
        <main class="flex-shrink-0">
            <div class="container">
                <div class="mt-5">
                    <?= $content ?>
                </div>
            </div>
        </main>

    </body>
</html>
