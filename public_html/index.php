<?php
require_once __DIR__ . '/../app/Helpers/helpers.php';
require_once __DIR__ . '/../app/Core/Database.php';
require_once __DIR__ . '/../app/Core/Auth.php';
require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Core/View.php';
require_once __DIR__ . '/../app/Core/Crypto.php';

use App\Core\Router;
use App\Core\View;

$config = require __DIR__ . '/../app/config.php';

date_default_timezone_set($config['app']['timezone']);

session_name($config['session']['name']);
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => $config['session']['secure'],
    'httponly' => $config['session']['httponly'],
    'samesite' => $config['session']['samesite'],
]);
session_start();

$router = new Router();

$router->get('/', function () {
    echo View::render('auth/login');
});

$router->get('/login', function () {
    echo View::render('auth/login');
});

$router->post('/login', function () {
    verify_csrf();
    $email = trim($_POST['email'] ?? '');
    $role = $email === 'admin@example.com' ? 'admin' : 'user';
    $_SESSION['user'] = [
        'name' => 'Demo Kullanıcı',
        'email' => $email,
        'role' => $role,
    ];
    redirect('/dashboard');
});

$router->get('/register', function () {
    echo View::render('auth/register');
});

$router->post('/register', function () {
    verify_csrf();
    redirect('/login');
});

$router->get('/logout', function () {
    App\Core\Auth::logout();
    redirect('/login');
});

$router->get('/dashboard', function () {
    if (!App\Core\Auth::check()) {
        redirect('/login');
    }
    echo View::render('dashboard/index');
});

$router->get('/admin/dashboard', function () {
    if (!App\Core\Auth::check() || (App\Core\Auth::user()['role'] ?? '') !== 'admin') {
        redirect('/login');
    }
    echo View::render('admin/dashboard');
});

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
