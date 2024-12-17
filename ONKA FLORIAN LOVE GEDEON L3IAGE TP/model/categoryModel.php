<?php
// categoryModel.php
require_once 'db.php';

class CategoryModel {
    public function getAllCategories() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCategory($libelle) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO categories (libelle) VALUES (?)");
        $stmt->execute([$libelle]);
    }

    public function getCategoryById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateCategory($id, $libelle) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE categories SET libelle = ? WHERE id = ?");
        $stmt->execute([$libelle, $id]);
    }

    public function deleteCategory($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
