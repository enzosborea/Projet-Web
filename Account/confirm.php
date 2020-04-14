<?php

$user_id = $_GET['id'];
$token = $_GET['token'];

require '../include/db.php';

$req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$req->execute([$user_id]);
$user = $req->fetch();
session_start();

if ($user && $user->confirmation_token == $token ) {

    $req = $pdo->prepare('UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ?')->execute([$user_id]);
    $_SESSION['flash']['success'] = 'Votre compte a bien été validé, vous êtes maitenant connecté pour revenir à l\'accueil cliquer<a href="../index.php"> ici</a>';;
    $_SESSION['auth'] = $user;
    header('Location: login.php');


} else {
    $_SESSION['flash']['danger'] = "Erreur : Token invalide";
    header('Location: login.php');
}
