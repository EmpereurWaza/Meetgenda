<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title> Meetgenda </title>
    <link rel="stylesheet" href="acceuil.css" />
</head>
<body>
    

    <header>
            <ul>
                <li><a class="menu__item" href="#">Accueil</a></li>
                <li><a class="menu__item" href="#">Présentation</a></li>
                <li><a class="menu__item" href="#">Projet</a></li>
                <li><a class="menu__item" href="#">Documents</a></li>
                <li><a class="menu__item" href="inscription.php">Inscription</a></li>
                <li><a class="menu__item" href="connection.php">Connection</a></li>
                
            </ul>
            <div class="boutton"> 
                <a href="<?= site_url('Connection') ?>">Log in </a>
            </div> 
    </header>
    
    </body>
</html>