<!DOCTYPE html>
<head>
    <title>Sondages créés</title>
    <?=link_tag('css/list_poll.css')?>
</head>
<body>
	<?php echo "Le sondage arrive" ?>
    <br>
    <table>
        <thead>
            <h1>Sondages créés par <?php echo $this->session->userdata('Identifiant') ?></h1>
            <tr>
                <th>Nom du sondage</th>
                <th>Lieu</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Lien</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $event) ?>
            <tr>
                <td><?php print_r($event) ?></td>
            </tr> 
        </tbody>
    </table>
</body>