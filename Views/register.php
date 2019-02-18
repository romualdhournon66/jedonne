<?php
include 'header.php';
include 'navbar.php';
include '../Models/configuration.php';
include '../Models/database.php';
include '../Models/usersMdl.php';
include '../Controllers/registerCtl.php';
?>
<h1>Inscription sur notre super site</h1>
<form method="POST" action="#" enctype="multipart/form-data">
    <div class="form-group">
        <label for="mail">Courriel</label>
        <input type="mail" name="mail" class="form-control" id="mail"  placeholder="Renseignez votre courriel" />
        <div class="mailMessage"></div>
    </div>
    <div class="form-group">
        <label for="mailVerify">Courriel (confirmation)</label>
        <input type="mail" name="mailVerify" class="form-control" id="mailVerify"  placeholder="Confirmez votre courriel" />
    </div>
    <div class="form-group">
        <label for="username">Pseudo</label>
        <input type="text" name="username" class="form-control" id="username"  placeholder="Renseignez votre pseudo" />
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="pass" name="pass" class="form-control" id="pass"  placeholder="Renseignez votre mot de passe" />
    </div>
    <div class="form-group">
        <label for="passwordVerify">Mot de passe (confirmation)</label>
        <input type="password" name="passwordVerify" class="form-control" id="passwordVerify"  placeholder="Confirmez votre mot de passe" />
    </div>
    <div class="form-group dropzone">
        <label for="avatar">Avatar</label>
        <input type="file" name="file" id="file" />
    </div>
    <button type="submit" name="register" class="btn btn-primary">S'enregistrer</button>
</form>
<script src="assets/js/script.js" type="text/javascript"></script>
<?php
include 'sidebar.php';
include 'footer.php';
?>