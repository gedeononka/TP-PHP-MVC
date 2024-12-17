<?php
// index.php
require_once 'controller/userController.php';
require_once 'controller/productController.php';
require_once 'controller/categoryController.php';

// Action par défaut est 'home'
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// Si l'action est 'home', afficher la page d'accueil
if ($action === 'home') {
    // Charge la page d'accueil
    require_once 'view/home.php';

// Sinon, gérer les autres actions
} elseif ($action === 'listUsers') {
    $controller = new UserController();
    $controller->listUsers();
} elseif ($action === 'addUser') {
    $controller = new UserController();
    $controller->addUser();
} elseif ($action === 'editUser') {
    $controller = new UserController();
    $controller->editUser($_GET['id']);
} elseif ($action === 'deleteUser') {
    $controller = new UserController();
    $controller->deleteUser($_GET['id']);
} elseif ($action === 'listCategories') {
    $controller = new CategoryController();
    $controller->listCategories();
} elseif ($action === 'addCategory') {
    $controller = new CategoryController();
    $controller->addCategory();
} elseif ($action === 'editCategory') {
    $controller = new CategoryController();
    $controller->editCategory($_GET['id']);
} elseif ($action === 'deleteCategory') {
    $controller = new CategoryController();
    $controller->deleteCategory($_GET['id']);
} elseif ($action === 'listProducts') {
    $controller = new ProductController();
    $controller->listProducts();
} elseif ($action === 'addProduct') {
    $controller = new ProductController();
    $controller->addProduct();
} elseif ($action === 'editProduct') {
    $controller = new ProductController();
    $controller->editProduct($_GET['id']);
} elseif ($action === 'deleteProduct') {
    $controller = new ProductController();
    $controller->deleteProduct($_GET['id']);
}
?>
