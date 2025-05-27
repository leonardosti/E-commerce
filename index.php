<?php
$config = require 'config.php';
$method = $_SERVER['REQUEST_METHOD'];
$url = strtolower($_SERVER['REQUEST_URI']);
$url = trim(str_replace($config['prjName'], '', $url), '/');

$db = require 'Database/db_connection.php';
require_once 'Router/Router.php';
use Router\Router;
$router = new Router();

// ————————————————————————————————————————————————————————————————————————
// 1) HomeController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  '',                  'HomeController', 'index');
$router->addRoute('GET',  'home/index',        'HomeController', 'index');
$router->addRoute('GET',  'home/presentation1','HomeController', 'presentation1');

// ————————————————————————————————————————————————————————————————————————
// 2) UtenteController
// ————————————————————————————————————————————————————————————————————————
$router->addRoute('GET',  'utente/login',      'UtenteController', 'showLoginForm');
$router->addRoute('POST', 'utente/login',      'UtenteController', 'login');
$router->addRoute('GET',  'utente/register',   'UtenteController', 'showRegisterForm');
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
// 4) AbbonamentoController
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


// match delle rotte
$route = $router->matchRoute($url, $method);
if (!$route) {
    http_response_code(404);
    echo "Pagina non trovata";
    exit;
}

// autoload della classe controller
$controllerClass = 'App\Controller\\'.$route['controller'];
$action = $route['action'];
require $controllerClass.'.php';
$controllerClass = new $controllerClass($db);
$controllerClass->$action();