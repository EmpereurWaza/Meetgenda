<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title> Meetgenda </title>   
    <?= link_tag('css/style.css'); ?>
</head>
<body>  
    <body background="<?= base_url() ?>img/bureau.jpg">

    <div class="box1">
        <p class="Titre1">
             Votre allié  <br> de l'organisation ! 
        </p>
        <p class="Titre2">
            Commencez dès maintenant ! 
       </p>
       <a href="<?= site_url('connexion')?>"><img src="<?= base_url() ?>img/commencez.png"></a>
    </div>
        
        <div class="text1"> 
            Avec Meetgenda, vous pouvez créer <br> des évènements en proposant plusieurs disponibilités <br> pour laisser à chacun des participants 
            se mettre <br> d'accord sur une ou plusieurs dates.  
            
            </div>      
    </body>
</html>