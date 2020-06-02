<?php
require_once '../include/db.php';
require_once '../include/header.php';
$query = $pdo->prepare('DELETE FROM properties WHERE id = :num LIMIT 1');

//liasion paramètre deletenum
$query->bindValue(':num', $_GET['numID'], PDO::PARAM_INT);

//exécution
$execute = $query->execute();?>

<div class="container">
    <h2 class="mt-4 ml-4">Votre annonce a bien été supprimée.<h2>

        <div class="mt-4">
            <button class="text-center text-md-left btn btn-primary" onclick="window.location.href = 'http://localhost:8000/public/my_annonce.php';">Retour</button>
        </div>
</div>







