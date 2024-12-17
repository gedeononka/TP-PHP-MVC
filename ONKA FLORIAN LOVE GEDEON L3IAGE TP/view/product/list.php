<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
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

/* Table */
.product-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.product-table th, .product-table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

.product-table th {
    background-color: #2980b9;
    color: white;
}

.product-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.product-table tr:hover {
    background-color: #ecf0f1;
}

/* Liens d'action (Modifier, Supprimer) */
.button {
    background-color: #3498db;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #2980b9;
}

.delete {
    background-color: #e74c3c;
}

.delete:hover {
    background-color: #c0392b;
}

/* Bouton Ajouter un produit et retour */
a.button {
    background-color: #2ecc71;
    margin-top: 20px;
}

a.button:hover {
    background-color: #27ae60;
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: white;
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
}

/* Responsive design */
@media (max-width: 768px) {
    .product-table th, .product-table td {
        font-size: 12px;
    }

    .product-table {
        font-size: 14px;
    }

    .container {
        width: 90%;
    }
}
</style>

<body>
    <header>
        <div class="container">
            <h1>Liste des produits</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= htmlspecialchars($product['nom']) ?></td>
                            <td><?= htmlspecialchars($product['description']) ?></td>
                            <td><?= htmlspecialchars($product['prix']) ?> €</td>
                            <td><?= htmlspecialchars($product['quantite']) ?></td>
                            <td><?= htmlspecialchars($product['categorie_nom']) ?></td>
                            <td>
                                <a href="index.php?action=editProduct&id=<?= $product['id'] ?>" class="button">Modifier</a> | 
                                <a href="index.php?action=deleteProduct&id=<?= $product['id'] ?>" class="button delete">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <a href="index.php?action=addProduct" class="button">Ajouter un produit</a>
            <a href="index.php" class="button">Page d'accueil</a>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Gestion des produits. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>
