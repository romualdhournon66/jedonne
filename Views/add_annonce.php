<?php
include 'header.php';
include 'navbar.php';
include '../Models/configuration.php';
include '../Models/database.php';
include '../Models/categoriesMdl.php';
include '../Models/subCategoriesMdl.php';
include '../Models/departmentsMdl.php';
include '../Models/citiesMdl.php';
include '../Models/articlesMdl.php';
include '../Models/usersMdl.php';
include '../Controllers/add_annonceCtl.php';
//include '../Controllers/registerCtl.php';
?>
<h1>Liste des dernières annonces mises en ligne sur la plateforme</h1>
<?//= showError('checkAppointments') ?>
<!-- FORMULAIRE -->
<form method="POST" action="add_annonce.php">
    <div class="row">         
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label class="label" for="category">Cat&eacute;gorie *</label>
                    <select class="form-control"  name="category" id="category" class="select">
                        <option value="0">&laquo;Choisissez une cat&eacute;gorie&raquo;</option>
                        <?php foreach ($categoryList as $category) { ?>
                            <option value="<?= $category->id ?>"><?= $category->category ?></option>
                        <?php } ?>
                    </select>
                    <span class="label-error full " data-for="category"></span>
                </div>

                <div class="col-md-6">
                    <label class="label" for="sub_category">Sous-Cat&eacute;gorie *</label>
                    <select class="form-control" name="sub_category" id="sub_category" class="select">
                        <option value="0">&laquo;Choisissez une sous-cat&eacute;gorie&raquo;</option>
                        <?php foreach ($subCategoryList as $subCategory) { ?>
                            <option value="<?= $subCategory->id_ppro_categories ?>"><?= $subCategory->subCategory ?></option>
                        <?php } ?>
                    </select>
                    <span class="label-error full " data-for="sub_category"></span>
                </div>        
            </div><!-- /ROW -->
            <div class="row">
                <div class="col-md-6">
                    <label class="label" for="department">Département *</label>
                    <select class="form-control" name="department" id="department" class="select">
                        <option value="0">&laquo;Séléctionnez votre département</option>

                        <?php foreach ($departmentList as $department) {
                            ?>
                            <option value="<?= $department->department ?>"><?= $department->$department ?></option>
                        <?php } ?>
                    </select>
                    <span class="label-error full " data-for="department"></span>
                </div>

                <div class="col-md-6">
                    <label class="label" for="ville">Code postal/Ville *</label>
                    <select class="form-control" name="ville" id="ville" class="select">
                        <option value="0">&laquo;Séléctionnez votre ville</option>
                        <?php foreach ($cityList as $city) { ?>
                            <option value="<?= $city->id ?>"><?= $city->city ?></option>
                        <?php } ?>
                    </select>
                    <span class="label-error full " data-for="ville"></span>
                </div>
            </div>





            <div class="form-group">
                <label for="title">Titre de votre annonce :</label>
                <input class="form-control" type="text" name="title" id="title" required />
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea class="form-control" name="description" id="description" rows="10" cols="50">
          Décrivez ce que vous donnez</textarea>
            </div>
            <div class="form-group">
                <fieldset><legend>
                        Postez jusque 3 photos
                    </legend>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="picture1" id="picture1" lang="fr">
                        <label class="custom-file-label" for="customFileLang">Sélectionner l'image 1 :</label>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="picture2" id="picture2" lang="fr">
                        <label class="custom-file-label" for="customFileLang">Sélectionner l'image 2 :</label>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="picture3" id="picture3" lang="fr">
                        <label class="custom-file-label" for="customFileLang">Sélectionner l'image 3 :</label>
                    </div>
                </fieldset>
            </div>
            <div class="form-group">
                <label for="username">Choisissez un pseudo utilisateur</label>
                <input class="form-control" type="text" name="username" maxlength="5" id="username" required />
            </div>
            <div class="form-group">
                <label for="email">Votre mail de contact</label>
                <input class="form-control" type="email" name="email" id="email" required />
            </div>
            <div class="form-group">
                <label for="password">Choisissez un mot de pass :</label>
                <input class="form-control" type="password" name="password" id="password" required />
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmez votre mot de pass :</label>
                <input class="form-control" type="password" name="confirm_password" id="confirm_password" required />
            </div>
            <input class="btn btn-block-lg btn-primary" type="submit" name="valider" id="valider" value="valider" />
            </p>
            </form>
        </div>
    </div>
    <script>
        $(function () {
            $('#category').blur(function () {
//                //Mon appel AJAX
//                //$.post prend en paramètre la page PHP qui va effectuer le traitement, la variable que l'on communique au PHP, et la fonction de traitement avec la réponse de PHP.
//                $.ajax({
//                        url:'controllers/add_annonceCtl.php',
//                        type:'POST',
//                        dataType:'JSON',
//                        data:{idCat: $(this).val()}
//                        success:function (data) {
////            dans data se trouve ce que le PHP a envoyé via son echo
//                    $('#category').hide();
//                });
//            }
$('#category').hide();
            });
        });
    </script>
    <?php
    include 'sidebar.php';
    include 'footer.php';
    ?>