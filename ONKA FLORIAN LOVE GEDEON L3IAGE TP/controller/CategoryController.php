<?php
// categoryController.php
require_once 'model/categoryModel.php';

class CategoryController {
    public function listCategories() {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAllCategories();
        include 'view/category/list.php';
    }

    public function addCategory() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            
            $categoryModel = new CategoryModel();
            $categoryModel->addCategory($libelle);
            header('Location: index.php?action=listCategories');
        } else {
            include 'view/category/add.php';
        }
    }

    public function editCategory($id) {
        $categoryModel = new CategoryModel();
        $category = $categoryModel->getCategoryById($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $libelle = $_POST['libelle'];
            $categoryModel->updateCategory($id, $libelle);
            header('Location: index.php?action=listCategories');
        } else {
            include 'view/category/edit.php';
        }
    }

    public function deleteCategory($id) {
        $categoryModel = new CategoryModel();
        $categoryModel->deleteCategory($id);
        header('Location: index.php?action=listCategories');
    }
}
?>
