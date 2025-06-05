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
                <?php if (empty($dati['ViniScelti'])): ?>
                    <p>Nessun prodotto in evidenza.</p>
                <?php else: ?>
                    <h2 class="text-center mb-5">Le nostre scelte per te</h2>
                    <?php foreach ($dati['ViniScelti'] as $vino): ?>
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

    <!-- Sezione categorie -->
    <section class="promotions py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Le nostre categorie di vini</h2>
            <div class="row">
                <!-- Categoria 1 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="<?= $config['url'].'assets/CartellaImmagini/promo1.png'?>" alt="Bianchi" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">BIANCHI</h3>
                            </div>
                        </div>
                        <div class="promo-footer bg-light p-3">
                            <a href="#" class="text-decoration-none text-burgundy">Scopri la Selezione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Categoria 2 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="<?= $config['url'].'assets/CartellaImmagini/promo2.png'?>" alt="Rossi" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">ROSSI</h3>
                            </div>
                        </div>
                        <div class="promo-footer bg-light p-3">
                            <a href="#" class="text-decoration-none text-burgundy">Scopri la Selezione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Categoria 3 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="<?= $config['url'].'assets/CartellaImmagini/promo3.png'?>" alt="Champagne" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">CHAMPAGNE</h3>
                            </div>
                        </div>
                        <div class="promo-footer bg-light p-3">
                            <a href="#" class="text-decoration-none text-burgundy">Scopri la Selezione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Categoria 4 -->
                <div class="col-md-3 mb-4">
                    <div class="promo-card">
                        <div class="promo-image position-relative">
                            <img src="<?= $config['url'].'assets/CartellaImmagini/promo4.png'?>" alt="Spumanti" class="img-fluid">
                            <div class="promo-overlay">
                                <h3 class="text-white">SPUMANTI</h3>
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
            <h2 class="text-center mb-5">Abbonamenti scelti per te</h2>
            <div class="row">
                <?php if (empty($dati['Abbonamenti'])): ?>
                    <p>Nessun abbonamento in evidenza.</p>
                <?php else: ?>
                    <?php foreach ($dati['Abbonamenti'] as $abbonamento): ?>
                        <div class="col-md-3 mb-4">
                            <div class="card product-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href=""
                                           class="text-decoration-none text-dark">
                                            <h3><?= htmlspecialchars($abbonamento['nome']) ?></h3><br>
                                            <?= htmlspecialchars($abbonamento['descrizione']) ?><br>
                                        </a>
                                    </h5>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="price">
                                            <span class="fs-4">
                                                <?= number_format($abbonamento['prezzo'], 2, ',', '.') ?>
                                                <span class="fs-6">€</span>
                                            </span>
                                        </div>
                                        <button class="btn btn-outline-burgundy add-to-cart"
                                                data-vino-id="<?= $abbonamento['livello_id'] ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-3 mb-4">
                        <div class="promo-card">
                            <div class="promo-image position-relative">
                                <a href="">
                                    <img src="<?= $config['url'] . 'assets/CartellaImmagini/abbonamento.jpg' ?>" alt="Abbonamento" class="img-fluid">
                                    <div class="promo-overlay">
                                        <h3 class="text-white">Scopri di piu'</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="about-us py-5 bg-light">
        <div class="max-w-screen-xl mx-auto pb-8 p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- BOX 1 -->
                <div class="relative rounded border border-gray-200 px-4 text-center pt-20 pb-4 bg-white">
                    <div class="absolute flex bg-white left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 w-[100px] h-[100px] px-2">
                        <img src="https://cdn.shopify.com/s/files/1/0650/4356/2708/files/screen.png?v=1721894221"
                             class="m-auto w-full h-auto" alt="Icona" width="80" height="80">
                    </div>
                    <div class="font-semibold text-secondary-700 mb-2">La tua enoteca online</div>
                    <div class="text-gray-700 text-sm">Qualità, velocità ed efficienza ci permettono di essere il punto di riferimento nella vendita di Vini e Spirits online, sia per i consumatori finali che per i <a href="https://b2b.callmewine.com/" class="text-pink-600 underline">Professionisti del mondo Ho.re.Ca.</a></div>
                </div>
                <!-- BOX 2 -->
                <div class="relative rounded border border-gray-200 px-4 text-center pt-20 pb-4 bg-white">
                    <div class="absolute flex bg-white left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 w-[100px] h-[100px] px-2">
                        <img src="https://cdn.shopify.com/s/files/1/0650/4356/2708/files/glass.png?v=1721894222"
                             class="m-auto w-full h-auto" alt="Icona" width="80" height="80">
                    </div>
                    <div class="font-semibold text-secondary-700 mb-2">Il tuo Personal Sommelier</div>
                    <div class="text-gray-700 text-sm">Il nostro team di esperti Sommelier assaggia personalmente ogni bottiglia che proponiamo, per selezionare i migliori Vini provenienti dall’Italia e dal mondo.</div>
                </div>
                <!-- BOX 3 -->
                <div class="relative rounded border border-gray-200 px-4 text-center pt-20 pb-4 bg-white">
                    <div class="absolute flex bg-white left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 w-[100px] h-[100px] px-2">
                        <img src="https://cdn.shopify.com/s/files/1/0650/4356/2708/files/bottle.png?v=1721894222"
                             class="m-auto w-full h-auto" alt="Icona" width="80" height="80">
                    </div>
                    <div class="font-semibold text-secondary-700 mb-2">La migliore selezione di vini</div>
                    <div class="text-gray-700 text-sm">Nel nostro assortimento di oltre 10.000 prodotti tra Vini, Champagne e Spirits accuratamente selezionati, troverai sempre la bottiglia giusta per ogni occasione!</div>
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