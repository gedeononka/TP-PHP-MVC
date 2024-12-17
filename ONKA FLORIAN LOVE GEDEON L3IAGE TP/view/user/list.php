<?php
// view/user/list.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers votre feuille de style CSS -->
</head>
<style>/* Mise en page générale */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f7fa;
    color: #333;
    line-height: 1.6;
}

header {
    background-color: #3498db;
    color: white;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

header .container {
    width: 80%;
    margin: 0 auto;
}

h1 {
    font-size: 32px;
}

/* Style pour la table */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

table th, table td {
    padding: 12px;
    text-align: left;
}

table th {
    background-color: #2980b9;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #ecf0f1;
}

/* Liens pour les actions dans le tableau */
.action-link {
    text-decoration: none;
    color: #3498db;
    font-weight: 500;
    padding: 5px 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.action-link.modify {
    background-color: #3498db;
    color: white;
}

.action-link.modify:hover {
    background-color: #2980b9;
}

.action-link.delete {
    background-color: #e74c3c;
    color: white;
}

.action-link.delete:hover {
    background-color: #c0392b;
}

/* Boutons */
button, .button {
    background-color: #3498db;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

button:hover, .button:hover {
    background-color: #2980b9;
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: white;
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
}
</style>
<body>
    <header>
        <div class="container">
            <h1>Liste des utilisateurs</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['nom']) ?></td>
                        <td><?= htmlspecialchars($user['prenom']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td>
                            <a href="index.php?action=editUser&id=<?= $user['id'] ?>" class="action-link modify">Modifier</a> | 
                            <a href="index.php?action=deleteUser&id=<?= $user['id'] ?>" class="action-link delete">Supprimer</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <div class="links">
                <a href="index.php?action=addUser" class="button">Ajouter un utilisateur</a>
                <a href="index.php" class="button">Retour à l'accueil</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Gestion des utilisateurs. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
