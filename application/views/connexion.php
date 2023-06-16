<!DOCTYPE html>
<html>
<head>
  <title>Page de connexion</title>
  <?=link_tag('css/connexion.css')?> 
</head>
<body>
  <div class="container">
    <h2>Connexion</h2>
    <form method="post">
      <div class="form-group">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="Se connecter">
    </form>
    <p>Vous n'avez pas encore de compte ? <a href="<?=site_url('inscription')?>">Inscrivez-vous</a></p>
  </div>
</body>
</html>