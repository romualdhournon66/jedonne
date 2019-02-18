<?php
include 'header.php';
include 'navbar.php';
include '../Controllers/registerCtl.php';
?>
<h1>Connexion sur notre super site</h1>
<form method="POST" action="#" enctype="multipart/form-data">
    <div class="form-group">
        <label for="mail">Courriel</label>
        <input type="mail" name="mail" class="form-control" id="mail"  placeholder="Renseignez votre courriel" />
        <div class="mailMessage"></div>
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="pass" name="pass" class="form-control" id="pass"  placeholder="Renseignez votre mot de passe" />
    </div>
    <button type="submit" name="register" class="btn btn-primary">S'enregistrer</button>
</form>
<?php
include 'sidebar.php';
include 'footer.php';
?>