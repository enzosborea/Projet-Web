<?php require_once '../include/header.php'; ?>
<?php require_once '../include/db.php';

$query = "SELECT * FROM properties ORDER BY price_night";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="shadow p-3 bg-white rounded">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Toutes les annonces</h2>
</div>
<?php foreach ($result as $annonce) {?>
    <div class="card w-75 mt-5 mb-5 ml-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo $annonce['title']?></h5>
            <h6 class="card-title"><?php echo 'Ville : ' .  $annonce['ville'] ?></h6>
            <h6 class="card-title"><?php echo 'Pour ' .  $annonce['person'] . ' personne(s)'?></h6>
            <h6 class="card-title"><?php echo 'Salle(s) de bain(s) : ' .  $annonce['bathroom_count']?></h6>
            <h6 class="card-title"><?php echo 'Nombre de lit(s) : ' .  $annonce['bed_count']?></h6>
            <h6 class="card-title"><?php echo 'Prix à la nuit : ' .  $annonce['price_night'] . ' €'?></h6>
            <p class="card-text"><?php echo $annonce['description']?></p>
            <form action="">
                <a href="page_reservation.php?numID=<?= $annonce['id'] ?>" class="btn btn-primary" type="submit" onclick="<? log_only();?>">Réserver</a>
            </form>
        </div>
    </div>
<?php } ?>
<?php require_once '../include/footer.php' ?>
</body>
</html>
