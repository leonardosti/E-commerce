<?php
?>
<?php include 'assets/header.php' ?>

    <!-- Breadcrumb -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrello</li>
            </ol>
        </nav>
    </div>

    <!-- Titolo pagina -->
    <section class="page-title py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-3">Il tuo carrello</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenuto carrello -->
    <section class="cart-content py-4">
        <div class="container">
            <div class="row">
                <!-- Prodotti nel carrello -->
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Prodotti nel carrello (3)</h5>
                        </div>
                        <div class="card-body p-0">
                            <!-- Tabella prodotti desktop -->
                            <div class="table-responsive d-none d-md-block">
                                <table class="table table-borderless align-middle mb-0">
                                    <thead class="bg-light">
                                    <tr>
                                        <th scope="col" class="ps-4">Prodotto</th>
                                        <th scope="col" class="text-center">Prezzo</th>
                                        <th scope="col" class="text-center">Quantità</th>
                                        <th scope="col" class="text-end pe-4">Totale</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Prodotto 1 -->
                                    <tr>
                                        <td class="ps-4">
                                            <div class="d-flex align-items-center">
                                                <div class="cart-product-img me-3">
                                                    <img src="images/product1.png" alt="Barolo DOCG" class="img-fluid" style="max-width: 80px;">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Barolo DOCG 2019</h6>
                                                    <p class="text-muted small mb-0">Piemonte - Nebbiolo</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">40,50 €</td>
                                        <td class="text-center">
                                            <div class="quantity-control d-flex justify-content-center">
                                                <button class="btn btn-sm btn-outline-secondary quantity-btn">-</button>
                                                <input type="number" class="form-control form-control-sm text-center mx-2" value="1" min="1" style="max-width: 60px;">
                                                <button class="btn btn-sm btn-outline-secondary quantity-btn">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end pe-4">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span class="me-3">40,50 €</span>
                                                <button class="btn btn-sm text-danger remove-item" title="Rimuovi">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Prodotto 2 -->
                                    <tr>
                                        <td class="ps-4">
                                            <div class="d-flex align-items-center">
                                                <div class="cart-product-img me-3">
                                                    <img src="images/product3.png" alt="Brunello di Montalcino" class="img-fluid" style="max-width: 80px;">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Brunello di Montalcino DOCG 2018</h6>
                                                    <p class="text-muted small mb-0">Toscana - Sangiovese</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">52,00 €</td>
                                        <td class="text-center">
                                            <div class="quantity-control d-flex justify-content-center">
                                                <button class="btn btn-sm btn-outline-secondary quantity-btn">-</button>
                                                <input type="number" class="form-control form-control-sm text-center mx-2" value="1" min="1" style="max-width: 60px;">
                                                <button class="btn btn-sm btn-outline-secondary quantity-btn">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end pe-4">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span class="me-3">52,00 €</span>
                                                <button class="btn btn-sm text-danger remove-item" title="Rimuovi">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Prodotto 3 -->
                                    <tr>
                                        <td class="ps-4">
                                            <div class="d-flex align-items-center">
                                                <div class="cart-product-img me-3">
                                                    <img src="images/product1.png" alt="Primitivo di Manduria" class="img-fluid" style="max-width: 80px;">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Primitivo di Manduria DOC 2021</h6>
                                                    <p class="text-muted small mb-0">Puglia - Primitivo</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">18,90 €</td>
                                        <td class="text-center">
                                            <div class="quantity-control d-flex justify-content-center">
                                                <button class="btn btn-sm btn-outline-secondary quantity-btn">-</button>
                                                <input type="number" class="form-control form-control-sm text-center mx-2" value="2" min="1" style="max-width: 60px;">
                                                <button class="btn btn-sm btn-outline-secondary quantity-btn">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end pe-4">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span class="me-3">37,80 €</span>
                                                <button class="btn btn-sm text-danger remove-item" title="Rimuovi">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Lista prodotti mobile -->
                            <div class="d-md-none">
                                <!-- Prodotto 1 -->
                                <div class="cart-item-mobile p-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <img src="images/product1.png" alt="Barolo DOCG" class="img-fluid">
                                        </div>
                                        <div class="col-9">
                                            <h6 class="mb-1">Barolo DOCG 2019</h6>
                                            <p class="text-muted small mb-2">Piemonte - Nebbiolo</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="fw-bold">40,50 €</span>
                                                <div class="quantity-control d-flex">
                                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">-</button>
                                                    <input type="number" class="form-control form-control-sm text-center mx-1" value="1" min="1" style="max-width: 40px;">
                                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">+</button>
                                                </div>
                                            </div>
                                            <div class="text-end mt-2">
                                                <button class="btn btn-sm text-danger remove-item">
                                                    <i class="fas fa-trash-alt"></i> Rimuovi
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Prodotto 2 -->
                                <div class="cart-item-mobile p-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <img src="images/product3.png" alt="Brunello di Montalcino" class="img-fluid">
                                        </div>
                                        <div class="col-9">
                                            <h6 class="mb-1">Brunello di Montalcino DOCG 2018</h6>
                                            <p class="text-muted small mb-2">Toscana - Sangiovese</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="fw-bold">52,00 €</span>
                                                <div class="quantity-control d-flex">
                                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">-</button>
                                                    <input type="number" class="form-control form-control-sm text-center mx-1" value="1" min="1" style="max-width: 40px;">
                                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">+</button>
                                                </div>
                                            </div>
                                            <div class="text-end mt-2">
                                                <button class="btn btn-sm text-danger remove-item">
                                                    <i class="fas fa-trash-alt"></i> Rimuovi
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Prodotto 3 -->
                                <div class="cart-item-mobile p-3">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <img src="images/product1.png" alt="Primitivo di Manduria" class="img-fluid">
                                        </div>
                                        <div class="col-9">
                                            <h6 class="mb-1">Primitivo di Manduria DOC 2021</h6>
                                            <p class="text-muted small mb-2">Puglia - Primitivo</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="fw-bold">18,90 € x 2</span>
                                                <div class="quantity-control d-flex">
                                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">-</button>
                                                    <input type="number" class="form-control form-control-sm text-center mx-1" value="2" min="1" style="max-width: 40px;">
                                                    <button class="btn btn-sm btn-outline-secondary quantity-btn">+</button>
                                                </div>
                                            </div>
                                            <div class="text-end mt-2">
                                                <button class="btn btn-sm text-danger remove-item">
                                                    <i class="fas fa-trash-alt"></i> Rimuovi
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                            <a href="products.html" class="btn btn-outline-burgundy">
                                <i class="fas fa-arrow-left me-2"></i> Continua lo shopping
                            </a>
                            <button class="btn btn-outline-secondary">
                                <i class="fas fa-sync-alt me-2"></i> Aggiorna carrello
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Riepilogo carrello -->
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Riepilogo ordine</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotale</span>
                                <span>130,30 €</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Spedizione</span>
                                <span class="text-success">Gratuita</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="fw-bold">Totale</span>
                                <span class="fw-bold fs-5">130,30 €</span>
                            </div>
                            <button class="btn btn-burgundy w-100 mb-3">
                                Procedi al checkout
                            </button>
                            <div class="payment-methods text-center">
                                <p class="text-muted small mb-2">Metodi di pagamento accettati</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fab fa-cc-visa mx-1 fs-4"></i>
                                    <i class="fab fa-cc-mastercard mx-1 fs-4"></i>
                                    <i class="fab fa-cc-amex mx-1 fs-4"></i>
                                    <i class="fab fa-cc-paypal mx-1 fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Codice promozionale -->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-3">Hai un codice promozionale?</h6>
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Inserisci il codice">
                                <button class="btn btn-outline-burgundy" type="button">Applica</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prodotti consigliati -->
    <section class="recommended-products py-5 bg-light">
        <div class="container">
            <h3 class="mb-4">Ti potrebbe interessare anche</h3>
            <div class="row">
                <!-- Prodotto consigliato 1 -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product3.png" class="card-img-top" alt="Chianti Classico">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark">Chianti Classico DOCG 2020</a>
                            </h5>
                            <p class="text-muted mb-2">Toscana - Sangiovese</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    <span class="fs-5">24,50 €</span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto consigliato 2 -->
                <div class="col-md-3 col-6 mb-4">
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
                                    <span class="fs-5">48,50 €</span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto consigliato 3 -->
                <div class="col-md-3 col-6 mb-4">
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
                                    <span class="fs-5">19,80 €</span>
                                </div>
                                <button class="btn btn-outline-burgundy add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prodotto consigliato 4 -->
                <div class="col-md-3 col-6 mb-4">
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
                                    <span class="fs-5">21,50 €</span>
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

<?php include 'assets/footer.php' ?>