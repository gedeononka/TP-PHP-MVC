<?php

require_once 'model/productModel.php';
require_once 'model/categoryModel.php';

class ProductController {
    public function listProducts() {
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts(); // Appel à la méthode qui récupère les produits avec leurs catégories
        include 'view/product/list.php'; // Passage des produits à la vue
    }

    public function addProduct() {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAllCategories();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];
            $quantite = $_POST['quantite'];
            $id_categorie = $_POST['id_categorie'];
            
            $productModel = new ProductModel();
            $productModel->addProduct($nom, $description, $prix, $quantite, $id_categorie);
            header('Location: index.php?action=listProducts');
        } else {
            include 'view/product/add.php';
        }
    }

    public function editProduct($id) {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAllCategories();

        $productModel = new ProductModel();
        $product = $productModel->getProductById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];
            $quantite = $_POST['quantite'];
            $id_categorie = $_POST['id_categorie'];
            
            $productModel->updateProduct($id, $nom, $description, $prix, $quantite, $id_categorie);
            header('Location: index.php?action=listProducts');
        } else {
            include 'view/product/edit.php';
        }
    }

    public function deleteProduct($id) {
        $productModel = new ProductModel();
        $productModel->deleteProduct($id);
        header('Location: index.php?action=listProducts');
    }
}
?>