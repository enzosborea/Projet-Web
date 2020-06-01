<?php require_once '../include/db.php' ?>
<?php require_once '../include/header.php';

$pdoStat = $pdo->prepare('UPDATE users SET sold = :sold,WHERE id = :num ');
$montant = 0;
$montant = ($annonce['price_night'] * ($nb_personne));
$total = $user['sold'] ;

$user['sold'] = $total - $montant;

$execute = $pdoStat->execute();
?>
<h2 class="mt-4 ml-4">Votre réservation à bien été effectué.<h2>
<?php
