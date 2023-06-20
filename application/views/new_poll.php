<!DOCTYPE html>
<html>
<head>
  <title>Nouveau sondage</title>
  <?=link_tag('css/inscription.css')?>
</head>
<body>
  <h1>Nouveau sondage</h1>
  <div class="container">
  <form method="post" action="<?=site_url('poll/submit')?>">
      <div class="form-group">
        <label for="text">Titre</label>
        <input type="title" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="text">Description</label>
        <input type="summary" id="summary" name="summary">
      </div>
      <div class="form-group">
        <label for="text">Lieu</label>
        <input type="location" id="location" name="location">
      </div>
      <div class="form-group">
        <label for="date">Début (ne peut pas être antérieur à la date actuelle)</label>
        <input type="date" id="start_date" name="start_date">
      </div>
      <div class="form-group">
        <label for="date">Fin (ne peut pas être antérieur à la date de début)</label>
        <input type="date" id="end_date" name="end_date">
      </div>   
      <input type="submit" value="Créer le sondage et ajouter des crénaux">
</form>
  </div>
</body>