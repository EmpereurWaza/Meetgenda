<!DOCTYPE html>
<head>
    <?= link_tag('css/header.css'); ?>
</head>
<body>
    <ul>
        <li><a href="<?= base_url()?>"><img class="logo" src="<?= base_url() ?>img/meetgenda.jpg"></a></li>
        <li><a href="#">Présentation</a></li>
        <?php if ($this->session->userdata('Identifiant')) { ?>
            <li style="float:right"><a href="<?= site_url('connexion/fin')?>">Se déconnecter</a></li>
            <li><a href="<?= site_url('poll')?>">Sondages</a></li>
            <?php  } else { ?>
            <li style="float:right"><a href="<?= site_url('connexion')?>">Se connecter</a></li>
        <?php } ?>     
        
    </ul>
</body>