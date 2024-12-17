<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de gestion des produits</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers une feuille de style CSS externe -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> <!-- Police Google Fonts -->
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
    padding: 0;
    margin: 0;
}

/* En-tête */
header {
    background-color: #3498db;
    color: white;
    padding: 40px 0;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre douce */
    border-bottom: 5px solid #2980b9; /* Bordure plus définie */
}

header .container {
    width: 85%;
    margin: 0 auto;
}

.site-title {
    font-size: 48px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.tagline {
    font-size: 20px;
    font-weight: 400;
    margin-top: 10px;
}

/* Section principale */
main {
    padding: 60px 0;
    background-color: #ecf0f1; /* Fond doux pour la section principale */
}

main .container {
    width: 80%;
    margin: 0 auto;
    text-align: center;
}

.intro {
    margin-bottom: 50px;
}

.intro h2 {
    font-size: 40px;
    font-weight: 600;
    color: #2c3e50;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); /* Ombre douce sur le titre */
}

.intro p {
    font-size: 18px;
    color: #7f8c8d;
    margin-top: 10px;
}

/* Liens et boutons */
.links ul {
    list-style: none;
    padding: 0;
}

.links li {
    margin-bottom: 25px;
}

.button {
    background-color: #3498db;
    color: white;
    padding: 18px 35px;
    text-decoration: none;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 500;
    transition: all 0.3s ease; /* Transitions plus fluides */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre subtile autour des boutons */
}

.button:hover {
    background-color: #2980b9;
    transform: translateY(-5px); /* Effet de déplacement léger */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Ombre plus forte au survol */
}

.button:active {
    transform: translateY(2px); /* Effet de pression du bouton */
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: white;
    padding: 30px 0;
    text-align: center;
    box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1); /* Ombre douce pour le footer */
}

footer p {
    font-size: 14px;
    letter-spacing: 1px;
}


</style>
<body>
    <header>
        <div class="container">
            <h1 class="site-title">Gestion des Produits</h1>
            <p class="tagline">Simplifiez la gestion de vos produits, utilisateurs et catégories.</p>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="intro">
                <h2>Bienvenue dans le système de gestion des produits</h2>
                <p>Utilisez les liens ci-dessous pour gérer les utilisateurs, catégories et produits de votre site.</p>
            </div>

            <div class="links">
                <ul>
                    <li><a href="index.php?action=listUsers" class="button">Gérer les utilisateurs</a></li>
                    <li><a href="index.php?action=listCategories" class="button">Gérer les catégories</a></li>
                    <li><a href="index.php?action=listProducts" class="button">Gérer les produits</a></li>
                </ul>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Système de gestion des produits. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>
