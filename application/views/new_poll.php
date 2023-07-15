<!DOCTYPE html>
<html>
<head>
  <title>Nouveau sondage</title>
  <?=link_tag('css/new_poll.css')?>
</head>
<body>
  <h1>Nouveau sondage</h1>
  <div class="container">
  <form method="post" action="<?=site_url('poll/submit')?>">
      <div class="form-group">
        <label for="text">Titre</label>
        <input type="title" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="text">Description</label>
        <input type="summary" id="summary" name="summary" required>
      </div>
      <div class="form-group">
        <label for="text">Lieu</label>
        <input type="location" id="location" name="location" required>
      </div>
      <div class="form-group">
        <label for="date">Date de début (ne peut pas être antérieure à la date actuelle)</label>
        <input type="date" id="start_date" name="start_date" min="<?php echo date('Y-m-d'); ?>" required>
      </div>
      <div class="form-group">
        <label for="date">Date de fin (ne peut pas être antérieur à la date de début)</label>
        <input type="date" id="end_date" name="end_date" min="<?php echo date('Y-m-d'); ?>" required>
      </div>   
      <input type="submit" value="Créer le sondage et ajouter des crénaux">
</form>
  </div>
</body>