<!DOCTYPE html>
<head>
    <?= link_tag('css/header.css'); ?>
</head>
<body>
    <ul>
        <li><h1><a href="<?= base_url()?>">Meetgenda</a></h1></li>
        <li><a href="#">Présentation</a></li>
        <li><a href="#">Projet</a></li>
        <li><a href="#">Documents</a></li>
        <li style="float:right"><a href="<?= site_url('connexion') ?>">Se connecter</a></li>
    </ul>
</body>