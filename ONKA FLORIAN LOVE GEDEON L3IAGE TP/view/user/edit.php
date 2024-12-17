<?php
// view/user/edit.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers votre feuille de style CSS -->
</head>
<style>
    /* Mise en page générale */
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
            <h1>Modifier un utilisateur</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <form action="index.php?action=editUser&id=<?= $user['id'] ?>" method="POST" class="form-container">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($user['nom']) ?>" required class="input-field">
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($user['prenom']) ?>" required class="input-field">
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required class="input-field">
                </div>

                <button type="submit" class="submit-btn">Mettre à jour</button>
            </form>
            <br>
            <a href="index.php?action=listUsers" class="back-link">Retour à la liste</a>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Gestion des utilisateurs. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
