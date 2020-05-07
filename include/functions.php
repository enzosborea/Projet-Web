<?php

function debug($variable){ // fonction pour debuger
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($lenght){ // fonction pour générer une chaîne de caractère
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $lenght)), 0, $lenght);

}


function log_only(){
    if (!isset($_SESSION['auth'])){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION['flash']['error'] = "Vous n'avez pas le droit d'accéder à cette page";
        header('Location login.php');
        exit();
    }
}
?>