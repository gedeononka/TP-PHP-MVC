<?php
// view/category/list.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des catégories</title>
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
.category-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.category-table th, .category-table td {
    padding: 12px;
    text-align: left;
}

.category-table th {
    background-color: #2980b9;
    color: white;
}

.category-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.category-table tr:hover {
    background-color: #ecf0f1;
}

/* Boutons */
.button {
    background-color: #3498db;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #2980b9;
}

/* Bouton "Supprimer" */
.delete {
    background-color: #e74c3c;
}

.delete:hover {
    background-color: #c0392b;
}

/* Liens */
a {
    text-decoration: none;
    margin: 10px;
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
            <h1>Liste des catégories</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <table class="category-table">
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= htmlspecialchars($category['libelle']) ?></td>
                        <td>
                            <a href="index.php?action=editCategory&id=<?= $category['id'] ?>" class="button">Modifier</a> | 
                            <a href="index.php?action=deleteCategory&id=<?= $category['id'] ?>" class="button delete">Supprimer</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <a href="index.php?action=addCategory" class="button">Ajouter une catégorie</a>
            <a href="index.php" class="button">Page d'accueil</a>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Gestion des catégories. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
