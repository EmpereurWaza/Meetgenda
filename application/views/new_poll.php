<!DOCTYPE html>
<html>
<head>
  <title>Nouveau sondage</title>
  <?=link_tag('css/inscription.css')?>
</head>
<body>
  <div class="container">
    <?php echo form_open('poll'); ?>
      <div class="form-group">
        <label for="text">Titre</label>
        <input type="title" class="form-control" id="title" placeholder="">
      </div>
      <div class="form-group">
        <label for="text">Description</label>
        <input type="summary" class="form-control" id="summary" placeholder="">
      </div>
      <div class="form-group">
        <label for="text">Lieu</label>
        <input type="location" class="form-control" id="location" placeholder="">
      </div>
      <input type="submit" value="Créer le sondage et ajouter des crénaux">
    <?php form_close(); ?>
  </div>
</body>