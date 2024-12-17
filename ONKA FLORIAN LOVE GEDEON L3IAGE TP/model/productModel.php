<?php
class ProductModel {
    private $db;

    public function __construct() {
        global $pdo;
        $this->db = $pdo; // Utilisation de la connexion PDO globale
    }

    public function getAllProducts() {
        // Requête pour récupérer les produits et leurs catégories associées
        $stmt = $this->db->prepare('SELECT p.id, p.nom, p.description, p.prix, p.quantite, c.libelle AS categorie_nom
                                    FROM products p
                                    LEFT JOIN categories c ON p.id_categorie = c.id');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $stmt = $this->db->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addProduct($nom, $description, $prix, $quantite, $id_categorie) {
        $stmt = $this->db->prepare('INSERT INTO products (nom, description, prix, quantite, id_categorie) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$nom, $description, $prix, $quantite, $id_categorie]);
    }

    public function updateProduct($id, $nom, $description, $prix, $quantite, $id_categorie) {
        $stmt = $this->db->prepare('UPDATE products SET nom = ?, description = ?, prix = ?, quantite = ?, id_categorie = ? WHERE id = ?');
        $stmt->execute([$nom, $description, $prix, $quantite, $id_categorie, $id]);
    }

    public function deleteProduct($id) {
        $stmt = $this->db->prepare('DELETE FROM products WHERE id = ?');
        $stmt->execute([$id]);
    }
}
?>