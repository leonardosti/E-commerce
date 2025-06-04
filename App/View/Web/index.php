<?php
require 'assets/header.php';
?>
    <!-- Carosello principale -->
    <section class="main-carousel">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-content bg-burgundy text-white">
                        <div class="container py-5">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2 class="display-4">-10%</h2>
                                    <h3>SU TUTTA LA CANTINA!</h3>
                                    <h4>Feudi di San Gregorio in sconto</h4>
                                    <p>Tutta la cantina al -10%!</p>
                                    <p>su un ordine minimo di €69</p>
                                    <a href="#" class="btn btn-outline-light mt-3">VAI ALLA CANTINA</a>
                                </div>
                                <div class="col-md-6">
                                    <img src="images/wine-bottle.png" alt="Feudi di San Gregorio" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Altri slide del carosello possono essere aggiunti qui -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Precedente</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Successivo</span>
            </button>
        </div>
    </section>

    <!-- Sezione Prodotti in Evidenza -->
    <section class="featured-products py-5">
        <div class="container">
            <div class="row">
                <?php if (empty($dati['limitVini'])): ?>
                    <p>Nessun prodotto in evidenza.</p>
                <?php else: ?>
                    <?php foreach ($dati['limitVini'] as $vino): ?>
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

    <!-- Sezione promozioni -->
    <section class="promotions py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Le nostre incredibili Offerte fino al 30%</h2>
            <div class="row">
                <!-- Promo 1 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="images/promo1.png" alt="Bianchi in promo" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">BIANCHI <br><span class="display-6">IN PROMO</span></h3>
                            </div>
                        </div>
                        <div class="promo-footer bg-light p-3">
                            <a href="#" class="text-decoration-none text-burgundy">Scopri la Selezione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Promo 2 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="images/promo2.png" alt="Rossi in promo" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">ROSSI <br><span class="display-6">IN PROMO</span></h3>
                            </div>
                        </div>
                        <div class="promo-footer bg-light p-3">
                            <a href="#" class="text-decoration-none text-burgundy">Scopri la Selezione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Promo 3 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="images/promo3.png" alt="Champagne in promo" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">CHAMPAGNE <br><span class="display-6">IN PROMO</span></h3>
                            </div>
                        </div>
                        <div class="promo-footer bg-light p-3">
                            <a href="#" class="text-decoration-none text-burgundy">Scopri la Selezione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Promo 4 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="images/promo4.png" alt="Spumanti in promo" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">SPUMANTI <br><span class="display-6">IN PROMO</span></h3>
                            </div>
                        </div>
                        <div class="promo-footer bg-light p-3">
                            <a href="#" class="text-decoration-none text-burgundy">Scopri la Selezione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sezione No-Low Alcol -->
    <section class="no-low-alcohol py-5">
        <div class="container">
            <h2 class="text-center mb-5">No-Low Alcol: leggerezza senza rinunce</h2>
            <div class="row">
                <!-- Prodotto 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image position-relative">
                            <span class="badge bg-burgundy position-absolute top-0 end-0 m-2">SCONTO</span>
                            <a href="#">
                                <img src="images/noalcohol1.png" class="card-img-top" alt="Aperitivo Americano Analcolico">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Aperitivo Americano Analcolico</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/noalcohol2.png" class="card-img-top" alt="Alcohol Free Sparkling 'Limited Edition'">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Alcohol Free Sparkling 'Limited Edition'</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image position-relative">
                            <span class="badge bg-burgundy position-absolute top-0 end-0 m-2">SCONTO</span>
                            <a href="#">
                                <img src="images/noalcohol3.png" class="card-img-top" alt="Riesling Sparkling Alkoholfrei">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Riesling Sparkling Alkoholfrei</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Presentazione -->
    <section class="about-us py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="mb-4">
                        <?= htmlspecialchars($dati['presentazione']['titolo']) ?>
                    </h2>
                    <?php foreach ($dati['presentazione']['paragrafi'] as $par): ?>
                        <p class="lead"><?= htmlspecialchars($par) ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php
require 'assets/footer.php';
?>