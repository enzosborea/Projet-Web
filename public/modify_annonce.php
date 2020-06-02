<?php require_once '../include/db.php' ?>
<?php require_once '../include/header.php';

$pdoStat = $pdo->prepare('UPDATE properties SET title = :title, description = :description, person = :person ,bathroom_count = :bathroom_count, bed_count = :bed_count, price_night = :price_night WHERE id = :num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numID'], PDO::PARAM_INT);
$pdoStat->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
$pdoStat->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
$pdoStat->bindValue(':person', $_POST['person'], PDO::PARAM_INT);
$pdoStat->bindValue(':bathroom_count', $_POST['bathroom_count'], PDO::PARAM_INT);
$pdoStat->bindValue(':bed_count', $_POST['bed_count'], PDO::PARAM_INT);
$pdoStat->bindValue(':price_night', $_POST['price_night'], PDO::PARAM_INT);

$execute = $pdoStat->execute();?>

<div class="container">
<h2 class="mt-4 ml-4">Votre annonce a bien été modifiée.<h2>

<div class="mt-4">
    <button class="text-center text-md-left btn btn-primary" onclick="window.location.href = 'http://localhost:8000/public/my_annonce.php';">Retour</button>
</div>
</div>
