<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
    <link rel="stylesheet" href="styles/style.css">
    <meta name="description" content="Cahier des charges">
    <meta name="keywords" content="cahier des charges">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><div class="item"><a href="index.php">Accueil</a></div></li>
            <li><div class="item"><a href="plan_fr.php">Plan</a></div></li>
            <li><div class="item"><a href="consultation.php">Consultation</a></div></li>
	    <li><div class="item"><a href="CDC.php">Cahier des charges</a></div></li>
            <?php session_start(); if (isset($_SESSION['role'])): ?>
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
<h1>Cahier des charges</h1>
<content></content>
<h2>Diagramme de GANTT</h2>
<img src="images/gantt.png" alt="gantt" height="50%" width="50%">
<h2>Utilisation de google drive</h2>
<img src="images/drive.png" alt="drive" height="50%" width="50%">
<h2>Synthèse personnelle</h2>
<h3>Raphael</h3>
<p>Durant cette SAé j’ai pu prendre part au développement du site web afin d’organiser les pages web et les différentes ressources nécessaires à la SAé. 
L’implémentation du PHP afin de communiquer avec la base de données sur phpmyadmin a été la partie la plus difficile. En effet, il fallait réussir à lier la base de données avec les différentes pages dynamique du site web.
</p>
<h3>Guilhem</h3>
<p>Pour cette SAé j’ai pu travailler sur le lien avec le serveur MQTT afin de récupérer et de traiter les données émises par les capteurs des différentes salles. Par la suite, j'ai pu implémenter les différentes composantes nécessaires : Grafana, Nodred et influxDB.
L’implémentation du site web dynamique à était la tâche la plus dure pendant cette SAé.
</p>
<h3>Mattéo</h3>
<p>Pour cette SAé, j’ai pu travailler sur le site web afin de réaliser le code HTML/CSS nécessaire pour cette SAé. Il m’a fallu donc créer de nouvelles pages WEB pour les besoins du cahier des charges. Le CSS a aussi dû être peaufiné afin d’avoir un résultat exactement comme nous le voulions.
</p>
<h3>Nolann</h3>
<p>Pendant cette Saé j’ai pu me concentrer sur la conception de la base de données SQL, sa planification et son organisation. Par la suite, j'ai pu développer la page d’ajout et de suppression de salles et de bâtiments qui a été incorporée au site web.</p>

<h2>Problème rencontrés/Solutions :</h2>
<p>Les adresses IP des conteneurs influxDB ont posé problème, en effet les adresses IP des conteneurs dépendent de l’ordre de leur lancement, en effet si un conteneur n’est pas lancé dans le même ordre que la dernière fois par exemple son ip ne sera pas la même
Afin de corriger ce problème, on a tout simplement lancé dans le même ordre les conteneurs afin de conserver l’organisation IP intacte.
<br>
L’intégration du Grafana à poser problème, en effet par défaut il ne permet pas d’être implémenté sur une autre page.
Il a été possible de régler ce problème en modifiant le fichier de configuration de Grafana afin de rendre possible l’implémentation sur la page web.
<br>
Pendant la phase d’implémentation du site web nous nous sommes rendu compte que les mots de passe des gestionnaires ainsi que celui de l’administrateur ne marchaient pas. 
Afin de résoudre ce problème, il fallait hasher les mots de passe, en ce sens nous avons pu développer un script php permettant de hacher les mot de passe automatiquement et de les renvoyer dans la base de données SQL.
</p>

<h2>Conclusion sur degré de satisfaction du cahier des charges :</h2>
<p>Cette SAé 23 a représenté un vrai défi, que ce soit sur le plan technique et personnel. En effet, il a fallu organiser de manière précise l’équipe afin de produire un travail fonctionnel et concret.
Le cahier des charges représente une vraie charge de travail diversifié. Cela nous a permis d’apprendre beaucoup de choses et de diversifier nos compétences dans de nombreux domaines, notamment en développement et en travail collaboratif. 
</p>
<footer>
    <p>
        <a href="http://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=http%3A%2F%2Fduprat.atwebpages.com%2Fsae15%2Fconsultation.php&usermedium=all&vextwarning=&warning=1" style="float: left;"><img src="images/vcss-blue.png" alt="css" /></a>
        <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fdupratmatteo.com%2Feportfolio_fr.html" style="float: left;"><img src="images/html.png" alt="html" style="height: 30px; width: 90px;" /></a>
        <a href="https://www.iut-blagnac.fr/fr/" style="text-decoration: none; color: aqua;">IUT Blagnac</a> | <a href="https://dupratmatteo.com" style="text-decoration: none; color: aqua;">DUPRAT</a> | <a style="text-decoration: none; color: aqua;">DURAND-NAUZE</a> | <a style="text-decoration: none; color: aqua;">BERNA</a> | <a style="text-decoration: none; color: aqua;">MENTASTI</a>
    </p>
</footer>
</body>
</html>
