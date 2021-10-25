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
    <!-- Menú con la categorías de la carta para poder filtrar -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CARTA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Añadimos la clase cwp-categorias-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 cwp-categorias">
                        <!-- A cada item le añadimos el atributo data-filter="" y la clase activo al que queramos que esté activo. Y le aplicamos el role="button" -->
                        <li data-filter="sugerencias" class="nav-item p-2 m-2 cwp-categoria-activa" role="button">Sugerencias</li>
                        <li data-filter="tapas" class="nav-item p-2 m-2" role="button">Tapas</li>
                        <li data-filter="raciones" class="nav-item p-2 m-2"" role="button">Raciones</li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Grid Masonry con los platos de la carta. Va a contener todos los items de la carta. Tendrá la clase cwp-container-->
    <div class="row row-cols-1 row-cols-lg-2 mt-3 g-2 cwp-container" data-masonry="{percentPosition: true }">
        <!-- Cada elemento de la carta tendrá la clase cwp-item y el atributo para filtrar data-filter="" con el valor por el que queramos filtrar-->
        <div class="col" role="button" data-f="sugerencias">
            <!-- Añadimos una máscara encima de cada contenedor de plato -->
            <div class="cwp-mask"></div>
            <div class="card shadow-sm p-0">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="img/platos/Barbarrosa%20(2)_1620x1080.jpg" class="img-fluid rounded-start cwp-fill" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title">Orejas de pollo al ajillo</h6>
                            <p class="card-text text-secondary m-1">Acompañadas de patatas caseras y pimientos.</p>
                            <h6 class="card-text">18,50 €</h6>
                            <ul class="list-inline m-0 alergenos">
                                <li class="list-inline-item"><img src="img/alergenos/altramuces.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/apio.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/pescado.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/gluten.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" role="button" data-f="sugerencias">
            <!-- Añadimos una máscara encima de cada contenedor de plato -->
            <div class="cwp-mask"></div>
            <div class="card shadow-sm p-0">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="img/platos/Barbarossa%2006%2012%20(4)_1398x1080.jpg" class="img-fluid rounded-start cwp-fill" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title">Orejas de pollo al ajillo</h6>
                            <p class="card-text text-secondary m-1">Acompañadas de patatas caseras y pimientos.</p>
                            <h6 class="card-text">18,50 €</h6>
                            <ul class="list-inline m-0 alergenos">
                                <li class="list-inline-item"><img src="img/alergenos/altramuces.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/apio.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/pescado.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/gluten.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" role="button" data-f="tapas">
            <!-- Añadimos una máscara encima de cada contenedor de plato -->
            <div class="cwp-mask"></div>
            <div class="card shadow-sm p-0">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="img/platos/Barbarrosa%20(3)_1462x1080.jpg" class="img-fluid rounded-start cwp-fill" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title">Orejas de pollo al ajillo</h6>
                            <p class="card-text text-secondary m-1">Acompañadas de patatas caseras y pimientos.</p>
                            <h6 class="card-text">18,50 €</h6>
                            <ul class="list-inline m-0 alergenos">
                                <li class="list-inline-item"><img src="img/alergenos/altramuces.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/apio.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/pescado.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/gluten.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" role="button" data-f="tapas">
            <!-- Añadimos una máscara encima de cada contenedor de plato -->
            <div class="cwp-mask"></div>
            <div class="card shadow-sm p-0">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="img/platos/Barbarrosa%20(5)_1620x1080.jpg" class="img-fluid rounded-start cwp-fill" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title">Orejas de pollo al ajillo</h6>
                            <p class="card-text text-secondary m-1">Acompañadas de patatas caseras y pimientos.</p>
                            <h6 class="card-text">18,50 €</h6>
                            <ul class="list-inline m-0 alergenos">
                                <li class="list-inline-item"><img src="img/alergenos/altramuces.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/apio.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/pescado.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/gluten.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" role="button" data-f="raciones">
            <!-- Añadimos una máscara encima de cada contenedor de plato -->
            <div class="cwp-mask"></div>
            <div class="card shadow-sm p-0">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="img/platos/Barbarrosa%20(11)_835x1080.jpg" class="img-fluid rounded-start cwp-fill" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title">Orejas de pollo al ajillo</h6>
                            <p class="card-text text-secondary m-1">Acompañadas de patatas caseras y pimientos.</p>
                            <h6 class="card-text">18,50 €</h6>
                            <ul class="list-inline m-0 alergenos">
                                <li class="list-inline-item"><img src="img/alergenos/altramuces.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/apio.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/pescado.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/gluten.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" role="button" data-f="raciones">
            <!-- Añadimos una máscara encima de cada contenedor de plato -->
            <div class="cwp-mask"></div>
            <div class="card shadow-sm p-0">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="img/platos/Barbarrosa%20(18)_835x1080.jpg" class="img-fluid rounded-start cwp-fill" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h6 class="card-title">Orejas de pollo al ajillo</h6>
                            <p class="card-text text-secondary m-1">Acompañadas de patatas caseras y pimientos.</p>
                            <h6 class="card-text">18,50 €</h6>
                            <ul class="list-inline m-0 alergenos">
                                <li class="list-inline-item"><img src="img/alergenos/altramuces.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/apio.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/pescado.png" alt=""></li>
                                <li class="list-inline-item"><img src="img/alergenos/gluten.png" alt=""></li>
                            </ul>
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