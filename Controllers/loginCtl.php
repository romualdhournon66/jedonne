<?php

$user = new ppro_users();
$formError = array();
$mail = '';
$pass = '';

if (isset($_POST['login'])) {
    if (!empty($_POST['mail'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $mail = htmlspecialchars($_POST['mail']);
        } else {
            $formError['mail'] = 'Le courriel n\'est pas valide';
        }
    } else {
        $formError['mail'] = 'Veuillez renseigner un courriel';
    }
    if (!empty($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        $formError['pass'] = 'Veuillez renseigner un mot de passe';
    }

    if (count($formError) == 0){
        $user->mail = $mail;
        $hash = $user->getHashFromUser();
        if(is_object($hash)){
            $isConnect = password_verify($pass, $hash->pass);
            //l'utilisateur est connecté
            if($isConnect){
                $userInfo = $user->getUserInfo();
                $_SESSION['mail'] = $user->mail;
                $_SESSION['username'] = $userInfo->username;
                $_SESSION['$id_ppro_roles'] = $userInfo->$id_ppro_roles;
                $_SESSION['isConnect'] = true;
                header('Location:index.php');
                exit();
            }
        }
    }
}

