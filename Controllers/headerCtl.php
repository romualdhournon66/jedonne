<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'deconnexion') {
        session_destroy();
        header('Location:index.php');
        exit();
    }
}

include '../lang/' . (isset($_GET['lang']) ? $_GET['lang'] : 'FR_FR') . '.php';
