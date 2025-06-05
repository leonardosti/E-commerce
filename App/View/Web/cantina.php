<?php
?>
<?php include 'assets/header.php' ?>

    <!-- Breadcrumb -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Home</a></li>
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
                <!-- Prodotti -->
                <?php if (empty($dati['Vini'])): ?>
                    <p>Nessun prodotto in evidenza.</p>
                <?php else: ?>
                    <h2 class="text-center mb-5">Le nostre scelte per te</h2>
                    <?php foreach ($dati['Vini'] as $vino): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card product-card h-100">
                                <div class="product-image">
                                    <a href="">
                                        <img src="<?= $config['url'].'assets/CartellaImmagini/'.htmlspecialchars($vino['immagine']) ?>"
                                             class="card-img-top"
                                             alt="<?= htmlspecialchars($vino['nome']) ?>">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href=""
                                           class="text-decoration-none text-dark">
                                            <?= htmlspecialchars($vino['nome']) ?>
                                            <?= htmlspecialchars($vino['cantina']) ?>
                                            <?= htmlspecialchars($vino['anno']) ?>
                                        </a>
                                    </h5>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="price">
                                            <span class="fs-4">
                                                <?= number_format($vino['prezzo_vendita'], 2, ',', '.') ?>
                                                <span class="fs-6">€</span>
                                            </span>
                                        </div>
                                        <button class="btn btn-outline-burgundy add-to-cart"
                                                data-vino-id="<?= $vino['vino_id'] ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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