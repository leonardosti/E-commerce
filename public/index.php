<?php
// Autoloader
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }

});

// Configurazione database
$db = require __DIR__ . '/../Database/db_connection.php';

$router = new Router\Router();

// ————————————————————————————————————————————————————————————————————————
// 1) HomeController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  '',                  'HomeController', 'index');
$router->addRoute('GET',  'home/index',        'HomeController', 'index');
$router->addRoute('GET',  'home/presentation1','HomeController', 'presentation1');

// ————————————————————————————————————————————————————————————————————————
// 2) UtenteController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'utente/login',      'UtenteController', 'login');
$router->addRoute('POST', 'utente/login',      'UtenteController', 'login');
$router->addRoute('GET',  'utente/register',   'UtenteController', 'register');
$router->addRoute('POST', 'utente/register',   'UtenteController', 'register');
$router->addRoute('GET',  'utente/profile',    'UtenteController', 'profile');
$router->addRoute('GET',  'utente/logout',     'UtenteController', 'logout');

// ————————————————————————————————————————————————————————————————————————
// 3) VinoController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'vino/index',        'VinoController', 'index');
$router->addRoute('GET',  'vino/show',    'VinoController', 'show');
$router->addRoute('GET',  'vino/create',       'VinoController', 'create');
$router->addRoute('POST', 'vino/create',       'VinoController', 'store');
$router->addRoute('GET',  'vino/edit',    'VinoController', 'edit');
$router->addRoute('POST', 'vino/edit',    'VinoController', 'update');
$router->addRoute('GET',  'vino/delete',  'VinoController', 'delete');

// ————————————————————————————————————————————————————————————————————————
// 4) AbbonamentoApiController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'abbonamento/index',       'AbbonamentoController', 'index');
$router->addRoute('GET',  'abbonamento/subscribe',    'AbbonamentoController', 'showSubscribeForm');
$router->addRoute('POST', 'abbonamento/subscribe',    'AbbonamentoController', 'subscribe');
$router->addRoute('GET',  'abbonamento/cancel',  'AbbonamentoController', 'cancel');

// ————————————————————————————————————————————————————————————————————————
// 5) BundleController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'bundle/index',        'BundleController', 'index');
$router->addRoute('GET',  'bundle/show',    'BundleController', 'show');
$router->addRoute('GET',  'bundle/create',       'BundleController', 'create');
$router->addRoute('POST', 'bundle/create',       'BundleController', 'store');
$router->addRoute('GET',  'bundle/delete/{id}',  'BundleController', 'delete');

// ————————————————————————————————————————————————————————————————————————
// 6) MagazzinoController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'magazzino/index',         'MagazzinoController', 'index');
$router->addRoute('GET',  'magazzino/rossi',         'MagazzinoController', 'filter');
$router->addRoute('GET',  'magazzino/spumanti',         'MagazzinoController', 'filter');
$router->addRoute('GET',  'magazzino/champagne',         'MagazzinoController', 'filter');
$router->addRoute('GET',  'magazzino/bianchi',         'MagazzinoController', 'filter');
$router->addRoute('POST', 'magazzino/update',  'MagazzinoController', 'update');

// ————————————————————————————————————————————————————————————————————————
// 7) RecensioneController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'recensione/create','RecensioneController', 'create');
$router->addRoute('POST', 'recensione/create',       'RecensioneController', 'store');
$router->addRoute('GET',  'recensione/index', 'RecensioneController', 'index');

// ————————————————————————————————————————————————————————————————————————
// 8) QuestionarioController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'questionario/index',    'QuestionarioController', 'index');
$router->addRoute('POST', 'questionario/submit',   'QuestionarioController', 'submit');

// ————————————————————————————————————————————————————————————————————————
// 9) CarrelloController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'carrello/index',        'CarrelloController', 'index');
$router->addRoute('POST', 'carrello/add',   'CarrelloController', 'add');
$router->addRoute('POST', 'carrello/remove','CarrelloController', 'remove');
$router->addRoute('GET',  'carrello/checkout',     'CarrelloController', 'checkout');
$router->addRoute('POST', 'carrello/confirm',      'CarrelloController', 'confirm');

// Elaborazione della richiesta
$method = $_SERVER['REQUEST_METHOD'];
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

// Match della rotta
$route = $router->matchRoute($url, $method);

if (!$route) {
    http_response_code(404);
    die("Pagina non trovata");
}

// API e WEB Controller
if (str_contains($route['controller'], 'ApiController')) {
    $controllerClass = 'App\Controller\API\\' . $route['controller'];
} else {
    $controllerClass = 'App\Controller\Web\\' . $route['controller'];
}
$action = $route['action'];

if (!class_exists($controllerClass)) {
    die("Controller $controllerClass non trovato!");
}

$controller = new $controllerClass($db);

call_user_func_array([$controller, $action], $route['params']);