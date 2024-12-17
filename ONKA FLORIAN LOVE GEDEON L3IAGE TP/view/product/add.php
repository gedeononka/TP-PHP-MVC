<?php
// view/product/add.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
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

/* Formulaire d'ajout de produit */
.product-form {
    width: 80%;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.product-form label {
    font-size: 16px;
    font-weight: 500;
}

.product-form input, .product-form select, .product-form textarea {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.product-form textarea {
    height: 120px;
}

.product-form button {
    background-color: #3498db;
    color: white;
    padding: 12px 25px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.product-form button:hover {
    background-color: #2980b9;
}

/* Bouton de retour */
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
            <h1>Ajouter un produit</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <form action="index.php?action=addProduct" method="POST" class="product-form">
                <label for="nom">Nom du produit:</label><br>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" required></textarea><br><br>

                <label for="prix">Prix:</label><br>
                <input type="number" id="prix" name="prix" step="0.01" min="0" required><br><br>

                <label for="quantite">Quantité:</label><br>
                <input type="number" id="quantite" name="quantite" min="1" required><br><br>

                <label for="id_categorie">Catégorie:</label><br>
                <select id="id_categorie" name="id_categorie" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['libelle']) ?></option>
                    <?php endforeach; ?>
                </select><br><br>

                <button type="submit" class="button">Ajouter le produit</button>
            </form>
            <br>
            <a href="index.php?action=listProducts" class="button">Retour à la liste des produits</a>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Gestion des produits. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
