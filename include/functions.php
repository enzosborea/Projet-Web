<?php

function debug($variable){ // fonction pour debuger
    echo '<pre>' . print_r($variable, true) . '</pre>';
}
?>
<?php
function str_random($lenght){ // fonction pour générer une chaîne de caractère
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $lenght)), 0, $lenght);

}?>
<?php
    function log_only(){ // function pour bloquer l'accès à une page un utilisateur si il ne c'est pas connecter
    if (!isset($_SESSION['auth'])){
        header('Location: ../../Account/login.php');
    }
}?>
