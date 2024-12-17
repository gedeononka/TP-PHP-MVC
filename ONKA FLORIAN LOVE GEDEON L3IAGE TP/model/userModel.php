<?php
// userModel.php
require_once 'db.php';

class UserModel {
    public function getAllUsers() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser($nom, $prenom, $email, $mot_de_passe) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $email, $mot_de_passe]);
    }

    public function getUserById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $nom, $prenom, $email) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE users SET nom = ?, prenom = ?, email = ? WHERE id = ?");
        $stmt->execute([$nom, $prenom, $email, $id]);
    }

    public function deleteUser($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
