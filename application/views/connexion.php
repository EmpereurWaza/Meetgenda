<!DOCTYPE html>
<html>
<head>
  <title>Page de connexion</title>
  <?=link_tag('css/connection.css')?> 
</head>
<body>
  <div class="container">
    <h2>Connexion</h2>
    <?php echo form_open('connexion'); ?>
      <div class="form-group">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
        <?php echo form_error('email'); ?>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <?php echo form_error('password'); ?>
      </div>
      <input type="submit" value="Se connecter">
      <?php echo $this->session->flashdata('login_error'); ?>
    <?php form_close(); ?>
    <p>Vous n'avez pas encore de compte ? <a href="<?=site_url('inscription')?>">Inscrivez-vous</a></p>
  </div>
</body>
</html>