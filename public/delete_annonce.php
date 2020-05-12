<?php
require_once '../db.php';
$query = $pdo->prepare('DELETE FROM properties WHERE id = :num LIMIT 1');

//liasion paramètre deletenum
$query->bindValue(':num', $_GET['deletenum'], PDO::PARAM_INT);

//exécution
$execute = $query->execute();








