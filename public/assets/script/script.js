document.addEventListener('DOMContentLoaded', function() {
    // Inizializzazione del carosello
    var mainCarousel = document.getElementById('mainCarousel');
    if (mainCarousel) {
        var carousel = new bootstrap.Carousel(mainCarousel, {
            interval: 5000,
            wrap: true
        });
    }

    // Gestione pulsanti aggiungi al carrello
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            // Animazione pulsante
            this.classList.add('btn-burgundy');
            this.classList.remove('btn-outline-burgundy');

            // Cambio icona temporaneamente
            const icon = this.querySelector('i');
            icon.classList.remove('fa-shopping-cart');
            icon.classList.add('fa-check');

            // Ripristino stato originale dopo 1 secondo
            setTimeout(() => {
                this.classList.remove('btn-burgundy');
                this.classList.add('btn-outline-burgundy');
                icon.classList.remove('fa-check');
                icon.classList.add('fa-shopping-cart');
            }, 1000);
        });
    });

    // Gestione hover sulle categorie del menu
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transition = 'color 0.3s ease';
        });
    });

    // Gestione scroll per navbar sticky
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            if (window.scrollY > 100) {
                navbar.classList.add('fixed-top', 'shadow-sm', 'bg-white');
                document.body.style.paddingTop = navbar.offsetHeight + 'px';
            } else {
                navbar.classList.remove('fixed-top', 'shadow-sm', 'bg-white');
                document.body.style.paddingTop = '0';
            }
        }
    });

    // Animazione per le sezioni al caricamento
    const animateSections = () => {
        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            if (isElementInViewport(section) && !section.classList.contains('animated')) {
                section.classList.add('animated');
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
            }
        });
    };

    // Funzione per verificare se un elemento è nel viewport
    const isElementInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    };

    // Inizializzazione animazioni
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    // Esecuzione animazioni al caricamento e allo scroll
    animateSections();
    window.addEventListener('scroll', animateSections);
});
