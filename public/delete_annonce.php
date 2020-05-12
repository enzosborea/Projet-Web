<?php
require_once '../include/db.php';
require_once '../include/header.php';
$query = $pdo->prepare('DELETE FROM properties WHERE id = :num LIMIT 1');

//liasion paramètre deletenum
$query->bindValue(':num', $_GET['numID'], PDO::PARAM_INT);

//exécution
$execute = $query->execute();?>

<h1 class="mt-4 ml-4">Votre annonce à bien été supprimé.<h1>








