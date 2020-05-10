<?php

function debug($variable){ // fonction pour debuger
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($lenght){ // fonction pour générer une chaîne de caractère
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $lenght)), 0, $lenght);

}

function avatar(){
$user_id = $_SESSION['auth']->id; // variable prenant l'id de la session avec l'utilisateur connecté

$query = "SELECT * FROM users WHERE id = $user_id";

$stmt = $pdo->query($query);

$display_images = $stmt->fetch(PDO::FETCH_ASSOC);

$display_images = $display_images['image'];
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