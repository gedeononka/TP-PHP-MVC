<?php
// userController.php
require_once 'model/userModel.php';

class UserController {
    public function listUsers() {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        include 'view/user/list.php';
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
            
            $userModel = new UserModel();
            $userModel->addUser($nom, $prenom, $email, $mot_de_passe);
            header('Location: index.php?action=listUsers');
        } else {
            include 'view/user/add.php';
        }
    }

    public function editUser($id) {
        $userModel = new UserModel();
        $user = $userModel->getUserById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $userModel->updateUser($id, $nom, $prenom, $email);
            header('Location: index.php?action=listUsers');
        } else {
            include 'view/user/edit.php';
        }
    }

    public function deleteUser($id) {
        $userModel = new UserModel();
        $userModel->deleteUser($id);
        header('Location: index.php?action=listUsers');
    }
}
?>
