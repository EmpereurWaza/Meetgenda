<!DOCTYPE html>
<head>
    <?= link_tag('css/header.css'); ?>
</head>
<header>
    <nav>
        <h1><a href="<?= site_url('welcome')?>">Meetgenda</a></h1>
        <a href="#">Présentation</a>
        <a href="#">Projet</a>
        <a href="#">Documents</a>
        <a href="<?= site_url('connexion') ?>">Se connecter</a>
    </nav>
</header>