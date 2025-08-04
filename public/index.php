<?php
const BASE_PATH = __DIR__ . '/../';
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/config/db.php';


// Rutas y controladores asociados
const DEFAULT_PAGE = 'home';
const DEFAULT_ROUTE = ['page' => DEFAULT_PAGE, 'controller' => \App\Controllers\HomeController::class];
const ROUTES = [
    ''          => DEFAULT_ROUTE,
    'home.php'  => DEFAULT_ROUTE,
    'index.php' => DEFAULT_ROUTE,
    // Auth
    'auth/login.php'  => ['controller' => \App\Controllers\Auth\LoginController::class],
    'auth/logout.php' => ['controller' => \App\Controllers\Auth\LogoutController::class],
    // Departments
    'departments/home.php'    => ['page' => 'departments',  'controller' => \App\Controllers\Departments\HomeDepartmentController::class],
    'departments/create.php'  => ['page' => 'departments',  'controller' => \App\Controllers\Departments\CreateDepartmentController::class],
    'departments/details.php' => ['page' => 'departments',  'controller' => \App\Controllers\Departments\DetailsDepartmentController::class],
    'departments/edit.php'    => ['page' => 'departments',  'controller' => \App\Controllers\Departments\EditDepartmentController::class],
    'departments/delete.php'  => ['page' => 'departments',  'controller' => \App\Controllers\Departments\DeleteDepartmentController::class],
];

// Crear pdo
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );
} catch (PDOException $e) {
    die("Error de BD: " . $e->getMessage());
}

// Manejar rutas
$router = new App\Core\Router();
$router->dispatch();
