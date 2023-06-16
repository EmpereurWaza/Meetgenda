<!DOCTYPE html>
<html>
<head>
  <title>Page d'inscription</title>
  <?=link_tag('css/inscription.css')?>
</head>
<body>
  <div class="container">
    <h2>Inscription</h2>
    <form>
      <div class="form-group">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="S'inscrire">
    </form>
    <p>Vous avez déjà un compte ? <a href="<?=site_url('connexion')?>">Connectez-vous</a></p>
  </div>
</body>
</html>