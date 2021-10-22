<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="helpers/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carta_wp.css">

	<title>carta_wp</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CARTA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li data-filter="filtro" class="nav-item btn btn-info activo">
                            <a class="nav-link active" aria-current="page" href="#">Categoría 1</a>
                        </li>
                        <li data-filter="filtro" class="nav-item btn btn-info">
                            <a class="nav-link" href="#">Categoría 2</a>
                        </li>
                        <li data-filter="filtro" class="nav-item btn btn-info">
                            <a class="nav-link" href="#">Categoría 3</a>
                        </li>
                        <li data-filter="filtro" class="nav-item btn btn-info">
                            <a class="nav-link" href="#">Categoría 4</a>
                        </li>
                        <li data-filter="filtro" class="nav-item btn btn-info">
                            <a class="nav-link" href="#">Categoría 5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Grid Masonry con los platos de la carta. -->
    <div class="row row-cols-1 row-cols-lg-2 g-2 mt-3" data-masonry='{"percentPosition": true }'>

        <div class="card mb-3 shadow-sm">
                <div class="row g-0">
                    <div class="col-4 overflow-hidden">
                        <img src="img/platos/Barbarrosa%20(2)_1620x1080.jpg" class="img-fluid rounded-start rellenar" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="card mb-3 shadow-sm">
            <div class="row g-0">
                <div class="col-4 overflow-hidden">
                    <img src="img/platos/Barbarrosa%20(2)_1620x1080.jpg" class="img-fluid rounded-start rellenar" alt="...">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 shadow-sm">
            <div class="row g-0">
                <div class="col-4 overflow-hidden">
                    <img src="img/platos/Barbarrosa%20(2)_1620x1080.jpg" class="img-fluid rounded-start rellenar" alt="...">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>





    </div>
</div>

<!-- JQuery -->
<script src="helpers/jquery/jquery-3.6.0.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="helpers/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Masonry Grid -->
<script src="helpers/masonry/masonry.pkgd.min.js"></script>
<!-- Funciones personalizadas -->
<script src="js/carta_wp.js"></script>

</body>
</html>

<?php // Silence is golden