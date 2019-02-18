<?php

//if (isset($_POST['mailTest'])) { //Appel AJAX pour le mail.   
//include '../Models/configuration.php';
//include '../Models/database.php';
//
//include '../Models/categoriesMdl.php';
//include '../Models/subCategoriesMdl.php';
//include '../Models/departementsMdl.php';
//include '../Models/citiesMdl.php';
//include '../Models/articlesMdl.php';
//include '../Models/usersMdl.php';
    //instanciation de l'objet $category.
//$category devient une instance de la classe ppro_categories.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$category = new ppro_categories();
$categoryList = $category->listCategory();
if (isset($_POST['idCat'])) { //Appel AJAX pour le mail.
    include_once '../Models/configuration.php';
    include_once '../Models/database.php';
    include_once '../Models/usersMdl.php';
    include_once '../Models/subCategoriesMdl.php';
    $category = new ppro_categories();
//instanciation de l'objet $subCategory.
//$subCategory devient une instance de la classe ppro_subCategories.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$subCategory = new ppro_subCategories();
$subCategory->id_ppro_categories = $_POST['idCat'];
var_dump($_POST['idCat']);
$subCategoryList = $subCategory->listSubCategory();
echo json_encode($subCategoryList);
//    $user = new ppro_users();
//    $user->mail = htmlspecialchars($_POST['mailTest']);
//    echo $user->checkFreeMail();
} else { //Validation du formulaire


    $user = new ppro_users();
//J'initialise mon tableau d'erreur.
    $formError = array();
//On initialise les variables de stockage des informations pour éviter d'avoir des erreurs dans la vue.
    $username = '';
    $mail = '';

//Quand on s'enregistre
    if (isset($_POST['register'])) {
        //On vérifie que le pseudo n'est pas vide.
        if (!empty($_POST['username'])) {
            $username = htmlspecialchars($_POST['username']);
        } else {
            $formError['username'] = 'Veuillez renseigner un pseudo';
        }
        //On vérifie que l'adresse mail est renseigné, qu'il correspond à la confirmation et qu'il a la bonne forme.
        if (!empty($_POST['mail']) && !empty($_POST['mailVerify'])) {
            if ($_POST['mail'] == $_POST['mailVerify']) {
                if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                    $mail = htmlspecialchars($_POST['mail']);
                } else {
                    $formError['mail'] = 'Le courriel n\'est pas valide';
                }
            } else {
                $formError['mail'] = 'Les courriels ne sont pas identiques';
            }
        } else {
            $formError['mail'] = 'Veuillez renseigner un courriel';
            $formError['mailVerify'] = 'Veuillez confirmer le courriel';
        }
        //On vérifie que le mot de passe est renseigné et qu'il est identique à la confirmation. On le hash avant de le mettre en base de données. 
        if (!empty($_POST['password']) && !empty($_POST['passwordVerify'])) {
            if ($_POST['password'] == $_POST['passwordVerify']) {
                $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            } else {
                $formError['password'] = 'Les mots de passe ne sont pas identiques';
            }
        } else {
            $formError['password'] = 'Veuillez renseigner un mot de passe';
            $formError['passwordVerify'] = 'Veuillez confirmer le mot de passe';
        }
        //Si il n'y a pas d'erreur, j'enregistre l'utilisateur
        if (count($formError) == 0) {
            $user->mail = $mail;
            $user->username = $username;
            $user->addUser();
        }
    }
//}



//instanciation de l'objet $department.
//$department devient une instance de la classe ppro_departments.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$department = new ppro_departments();
$departmentList = $department->listDepartments();

//instanciation de l'objet $city.
//$city devient une instance de la classe ppro_cities.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$city = new ppro_cities();
$cityList = $city->listCities();

//instanciation de l'objet $city.
//$city devient une instance de la classe ppro_cities.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$article = new ppro_articles();
$addArticle = $article->addArticle();

//instanciation de l'objet $username.
//$username devient une instance de la classe ppro_users.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$username = new ppro_users();
$addUsername = $username->addUser();


//$page = $category->paging();
//if (!empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $page) {
//    $_GET['page'] = intval($_GET['page']);
//    //intval = retourne une valeur numerique, ce qui evite l'injection dans l'url d'autres valeurs que des entiers
//    $category->id = (($_GET['page'] - 1) * 5);
//    $categoryList = $category->getPatientsForPaging();
//} else {
//    $categoryList = $category->listCategory();
//}











//    $user = new ppro_users();
//    $user->mail = htmlspecialchars($_POST['mailTest']);
//    echo $user->checkFreeMail();
//} else { //Validation du formulaire
//    
//    
//    $user = new ppro_users();
////J'initialise mon tableau d'erreur.
//    $formError = array();
////On initialise les variables de stockage des informations pour éviter d'avoir des erreurs dans la vue.
//    $username = '';
//    $mail = '';
//
////Quand on s'enregistre
//    if (isset($_POST['register'])) {
//        //On vérifie que le pseudo n'est pas vide.
//        if (!empty($_POST['username'])) {
//            $username = htmlspecialchars($_POST['username']);
//        } else {
//            $formError['username'] = 'Veuillez renseigner un pseudo';
//        }
//        //On vérifie que l'adresse mail est renseigné, qu'il correspond à la confirmation et qu'il a la bonne forme.
//        if (!empty($_POST['mail']) && !empty($_POST['mailVerify'])) {
//            if ($_POST['mail'] == $_POST['mailVerify']) {
//                if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
//                    $mail = htmlspecialchars($_POST['mail']);
//                } else {
//                    $formError['mail'] = 'Le courriel n\'est pas valide';
//                }
//            } else {
//                $formError['mail'] = 'Les courriels ne sont pas identiques';
//            }
//        } else {
//            $formError['mail'] = 'Veuillez renseigner un courriel';
//            $formError['mailVerify'] = 'Veuillez confirmer le courriel';
//        }
//        //On vérifie que le mot de passe est renseigné et qu'il est identique à la confirmation. On le hash avant de le mettre en base de données. 
//        if (!empty($_POST['pass']) && !empty($_POST['passwordVerify'])) {
//            if ($_POST['pass'] == $_POST['passwordVerify']) {
//                $user->pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
//            } else {
//                $formError['pass'] = 'Les mots de passe ne sont pas identiques';
//            }
//        } else {
//            $formError['pass'] = 'Veuillez renseigner un mot de passe';
//            $formError['passwordVerify'] = 'Veuillez confirmer le mot de passe';
//        }
//        //Si il n'y a pas d'erreur, j'enregistre l'utilisateur
//        if (count($formError) == 0) {
//            $user->mail = $mail;
//            $user->username = $username;
//            $user->addUser();
//        }
//    }
}