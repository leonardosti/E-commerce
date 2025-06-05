<?php
?>
<?php include 'assets/header.php' ?>

    <!-- Breadcrumb -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vini Rossi</li>
            </ol>
        </nav>
    </div>

    <!-- Titolo pagina e descrizione -->
    <section class="page-title py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="mb-3">Vini Rossi</h1>
                    <p class="lead">Scopri la nostra selezione di vini rossi, dai grandi classici italiani alle etichette internazionali più ricercate. Ogni bottiglia è stata accuratamente selezionata dal nostro team di esperti sommelier.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filtri e ordinamento -->
    <section class="filters bg-light py-4">
        <div class="container">
            <div class="row align-items-center">
                <!-- Filtri desktop -->
                <div class="col-md-8 d-none d-md-block">
                    <div class="d-flex flex-wrap">
                        <div class="filter-group me-3 mb-2">
                            <label class="form-label mb-1">Regione</label>
                            <select class="form-select form-select-sm">
                                <option selected>Tutte le regioni</option>
                                <option>Toscana</option>
                                <option>Piemonte</option>
                                <option>Sicilia</option>
                                <option>Veneto</option>
                                <option>Puglia</option>
                            </select>
                        </div>
                        <div class="filter-group me-3 mb-2">
                            <label class="form-label mb-1">Vitigno</label>
                            <select class="form-select form-select-sm">
                                <option selected>Tutti i vitigni</option>
                                <option>Sangiovese</option>
                                <option>Nebbiolo</option>
                                <option>Primitivo</option>
                                <option>Nero d'Avola</option>
                                <option>Montepulciano</option>
                            </select>
                        </div>
                        <div class="filter-group me-3 mb-2">
                            <label class="form-label mb-1">Prezzo</label>
                            <select class="form-select form-select-sm">
                                <option selected>Tutti i prezzi</option>
                                <option>Fino a 15€</option>
                                <option>15€ - 30€</option>
                                <option>30€ - 50€</option>
                                <option>50€ - 100€</option>
                                <option>Oltre 100€</option>
                            </select>
                        </div>
                        <div class="filter-group mb-2">
                            <label class="form-label mb-1">Annata</label>
                            <select class="form-select form-select-sm">
                                <option selected>Tutte le annate</option>
                                <option>2023</option>
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Filtri mobile -->
                <div class="col-12 d-md-none mb-3">
                    <button class="btn btn-outline-burgundy w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas">
                        <i class="fas fa-filter me-2"></i> Filtra prodotti
                    </button>
                </div>

                <!-- Ordinamento -->
                <div class="col-md-4 col-12">
                    <div class="d-flex justify-content-md-end align-items-center">
                        <label class="form-label me-2 mb-0">Ordina per:</label>
                        <select class="form-select form-select-sm" style="max-width: 200px;">
                            <option selected>Rilevanza</option>
                            <option>Prezzo crescente</option>
                            <option>Prezzo decrescente</option>
                            <option>Nome A-Z</option>
                            <option>Nome Z-A</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offcanvas filtri per mobile -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="filterOffcanvas" aria-labelledby="filterOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="filterOffcanvasLabel">Filtra prodotti</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="filter-group mb-3">
                <label class="form-label mb-1">Regione</label>
                <select class="form-select">
                    <option selected>Tutte le regioni</option>
                    <option>Toscana</option>
                    <option>Piemonte</option>
                    <option>Sicilia</option>
                    <option>Veneto</option>
                    <option>Puglia</option>
                </select>
            </div>
            <div class="filter-group mb-3">
                <label class="form-label mb-1">Vitigno</label>
                <select class="form-select">
                    <option selected>Tutti i vitigni</option>
                    <option>Sangiovese</option>
                    <option>Nebbiolo</option>
                    <option>Primitivo</option>
                    <option>Nero d'Avola</option>
                    <option>Montepulciano</option>
                </select>
            </div>
            <div class="filter-group mb-3">
                <label class="form-label mb-1">Prezzo</label>
                <select class="form-select">
                    <option selected>Tutti i prezzi</option>
                    <option>Fino a 15€</option>
                    <option>15€ - 30€</option>
                    <option>30€ - 50€</option>
                    <option>50€ - 100€</option>
                    <option>Oltre 100€</option>
                </select>
            </div>
            <div class="filter-group mb-3">
                <label class="form-label mb-1">Annata</label>
                <select class="form-select">
                    <option selected>Tutte le annate</option>
                    <option>2023</option>
                    <option>2022</option>
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                </select>
            </div>
            <button class="btn btn-burgundy w-100 mt-3">Applica filtri</button>
        </div>
    </div>

    <!-- Griglia prodotti -->
    <section class="products py-4">
        <div class="container">
            <div class="row">
                <!-- Prodotto 1 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product1.png" class="card-img-top" alt="Barolo DOCG">
                            </a>
                            <span class="badge bg-burgundy position-absolute top-0 end-0 m-2">-10%</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Barolo DOCG 2019</a>
                            </h5>
                            <p class="text-muted mb-2">Piemonte - Nebbiolo</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="text-decoration-line-through text-muted me-2">45,00 €</span>
                                    <span class="fs-4">40<span class="fs-6">,50 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 2 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product3.png" class="card-img-top" alt="Brunello di Montalcino">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Brunello di Montalcino DOCG 2018</a>
                            </h5>
                            <p class="text-muted mb-2">Toscana - Sangiovese</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">52<span class="fs-6">,00 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 3 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product1.png" class="card-img-top" alt="Amarone della Valpolicella">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Amarone della Valpolicella DOCG 2020</a>
                            </h5>
                            <p class="text-muted mb-2">Veneto - Corvina, Rondinella</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">48<span class="fs-6">,50 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 4 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product3.png" class="card-img-top" alt="Chianti Classico Riserva">
                            </a>
                            <span class="badge bg-burgundy position-absolute top-0 end-0 m-2">-15%</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Chianti Classico Riserva DOCG 2019</a>
                            </h5>
                            <p class="text-muted mb-2">Toscana - Sangiovese</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="text-decoration-line-through text-muted me-2">32,00 €</span>
                                    <span class="fs-4">27<span class="fs-6">,20 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 5 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product1.png" class="card-img-top" alt="Primitivo di Manduria">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Primitivo di Manduria DOC 2021</a>
                            </h5>
                            <p class="text-muted mb-2">Puglia - Primitivo</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">18<span class="fs-6">,90 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 6 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product3.png" class="card-img-top" alt="Nero d'Avola">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Nero d'Avola DOC 2022</a>
                            </h5>
                            <p class="text-muted mb-2">Sicilia - Nero d'Avola</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">16<span class="fs-6">,50 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 7 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product1.png" class="card-img-top" alt="Montepulciano d'Abruzzo">
                            </a>
                            <span class="badge bg-burgundy position-absolute top-0 end-0 m-2">-20%</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Montepulciano d'Abruzzo DOC 2021</a>
                            </h5>
                            <p class="text-muted mb-2">Abruzzo - Montepulciano</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="text-decoration-line-through text-muted me-2">22,50 €</span>
                                    <span class="fs-4">18<span class="fs-6">,00 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 8 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product3.png" class="card-img-top" alt="Barbera d'Alba">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Barbera d'Alba DOC 2022</a>
                            </h5>
                            <p class="text-muted mb-2">Piemonte - Barbera</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">19<span class="fs-6">,80 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 9 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product1.png" class="card-img-top" alt="Cannonau di Sardegna">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Cannonau di Sardegna DOC 2021</a>
                            </h5>
                            <p class="text-muted mb-2">Sardegna - Cannonau</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">21<span class="fs-6">,50 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paginazione -->
    <section class="pagination-section py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="Navigazione pagine">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

<?php include 'assets/footer.php' ?>