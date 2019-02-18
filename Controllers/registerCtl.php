<?php

if (isset($_POST['mailTest'])) { //Appel AJAX pour le mail.   
include '../Models/configuration.php';
include '../Models/database.php';
include '../Models/usersMdl.php';

    $user = new ppro_users();
    $user->mail = htmlspecialchars($_POST['mailTest']);
    echo $user->checkFreeMail();
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
        if (!empty($_POST['pass']) && !empty($_POST['passwordVerify'])) {
            if ($_POST['pass'] == $_POST['passwordVerify']) {
                $user->pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
            } else {
                $formError['pass'] = 'Les mots de passe ne sont pas identiques';
            }
        } else {
            $formError['pass'] = 'Veuillez renseigner un mot de passe';
            $formError['passwordVerify'] = 'Veuillez confirmer le mot de passe';
        }
        //Si il n'y a pas d'erreur, j'enregistre l'utilisateur
        if (count($formError) == 0) {
            $user->mail = $mail;
            $user->username = $username;
            $user->addUser();
        }
    }
}