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

    <!-- Sezione prodotti in evidenza -->
    <section class="featured-products py-5">
        <div class="container">
            <div class="row">
                <!-- Prodotto 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product1.png" class="card-img-top" alt="Chardonnay 'Marna' Girlan 2023">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Chardonnay 'Marna' Girlan 2023</a>
                            </h5>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">16<span class="fs-6">,00 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product2.png" class="card-img-top" alt="Juliénas Domaine de Boischampt 2023">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Juliénas Domaine de Boischampt 2023</a>
                            </h5>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">16<span class="fs-6">,20 €</span></span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product3.png" class="card-img-top" alt="Cabernet Franc Castelvecchio 2022">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Cabernet Franc Castelvecchio 2022</a>
                            </h5>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-4">18<span class="fs-6">,00 €</span></span>
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

    <!-- Sezione Presentazione -->
    <section class="about-us py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="mb-4">Callmewine, la tua enoteca online, il tuo personale sommelier</h2>
                    <p class="lead">
                        L'idea di creare Callmewine, un'enoteca specializzata nella <strong>vendita di vino online</strong>, è nata dalla passione per il vino e per il mondo che lo circonda: il fascino delle cantine e delle loro tradizioni, l'impegno e la pazienza nascosti in ogni bottiglia, la bellezza delle colline coperte di vigne, i loro verdi estivi e i loro rossi e gialli autunnali, il profumo intenso di mosto che si sprigiona nelle giornate di ottobre, i paesaggi nebbiosi e coperti di bruma, l'allegria di certe serate con gli amici... Del vino ci affascina tutto, ma proprio tutto.
                    </p>
                    <p>
                        Assaggio dopo assaggio, lavoriamo ogni giorno per migliorare la nostra offerta di vini rossi, vini bianchi, champagne e distillati: siamo convinti che <strong>selezionare sia più importante che proporre tutto</strong> indistintamente.
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php
require 'assets/footer.php';
?>