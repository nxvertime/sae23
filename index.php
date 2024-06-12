<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <meta name="author" content="MD" />
    <meta name="description" content="Accueil site" />
    <meta name="keywords" content="Accueil" />
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><div class="item"><a href="index.php">Accueil</a></div></li>
            <li><div class="item"><a href="plan_fr.php">Plan</a></div></li>
	    <li><div class="item"><a href="consultation.php">Consultation</a></div></li>
	    <li><div class="item"><a href="CDC.php">Cahier des charges</a></div></li>
            <?php if (isset($_SESSION['role'])): ?>
                <?php if ($_SESSION['role'] == 'administrateur' || $_SESSION['role'] == 'gestionnaire1'): ?>
                    <li><div class="item"><a href="batiment1.php">R&T</a></div></li>
                <?php endif; ?>
                <?php if ($_SESSION['role'] == 'administrateur' || $_SESSION['role'] == 'gestionnaire2'): ?>
                    <li><div class="item"><a href="batiment2.php">GIM</a></div></li>
                <?php endif; ?>
		<?php if ($_SESSION['role'] == 'administrateur'): ?>
                    <li><div class="item"><a href="index2.php">AJout/Supp</a></div></li>
                <?php endif; ?>
                <li><div class="item"><a href="deconnexion.php">Déconnexion</a></div></li>
            <?php else: ?>
                <li><div class="item"><a href="connexion.php">Connexion</a></div></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<section class="display">
    <div class="choix1">
        <h1>Plan de l'IUT :</h1>
        <a href="plan_fr.php"><img src="images/plano.jpg" alt="plan" class="acc"/></a>
    </div>
    <div class="choix2">
        <h1>Choisir entre les bâtiments :</h1><br>
        <a href="batiment1.php" class="a"><h3>Réseaux et Télécommunications</h3></a>
        <a href="batiment2.php" class="a"><h3>Génie Mécanique et Industriel</h3></a>
    </div>
</section>
<footer>
    <p>
        <a href="http://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=http%3A%2F%2Fduprat.atwebpages.com%2Fsae15%2Fbatiment1.php&usermedium=all&vextwarning=&warning=1" style="float: left;"><img src="images/vcss-blue.png" alt="css" /></a>
        <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fdupratmatteo.com%2Feportfolio_fr.php" style="float: left;"><img src="images/html.png" alt="html" style="height: 30px; width: 90px;" /></a>
        <a href="https://www.iut-blagnac.fr/fr/" style="text-decoration: none; color: aqua;">IUT Blagnac</a> | <a href="https://dupratmatteo.com" style="text-decoration: none; color: aqua;">DUPRAT</a> | <a style="text-decoration: none; color: aqua;">DURAND-NAUZE</a> | <a style="text-decoration: none; color: aqua;">BERNA</a> | <a style="text-decoration: none; color: aqua;">MENTASTI</a>
    </p>
</footer>
</body>
</html>
