<?php
// view/category/add.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une catégorie</title>
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

/* Style pour le formulaire */
.form-container {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 20px auto;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

.input-field {
    width: 100%;
    padding: 12px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 5px;
}

.input-field:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
}

/* Style pour le bouton */
.submit-btn {
    background-color: #3498db;
    color: white;
    padding: 12px 20px;
    border-radius: 5px;
    border: none;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #2980b9;
}

/* Style pour le lien de retour */
.back-link {
    text-decoration: none;
    color: #3498db;
    font-size: 16px;
    transition: color 0.3s ease;
}

.back-link:hover {
    color: #2980b9;
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
            <h1>Ajouter une catégorie</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <form action="index.php?action=addCategory" method="POST" class="form-container">
                <div class="form-group">
                    <label for="libelle">Libellé :</label>
                    <input type="text" id="libelle" name="libelle" required class="input-field">
                </div>

                <button type="submit" class="submit-btn">Ajouter</button>
            </form>
            <br>
            <a href="index.php?action=listCategories" class="back-link">Retour à la liste</a>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Gestion des catégories. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
