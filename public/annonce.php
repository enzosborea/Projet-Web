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
<div class="row row-cols-1 row-cols-md-2 mx-5 pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
<?php foreach ($result as $annonce) {?>
    <div class="col mb-4">
            <div class="card" style="min-width: 500px;max-width: 572px">
            <img class="card-img-top mb-4" src="../assets/images/maison1.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?php echo $annonce['title']?></h5>
            <h6 class="card-title"><?php echo 'Ville : ' .  $annonce['ville'] ?></h6>
            <h6 class="card-title"><?php echo 'Pour ' .  $annonce['person'] . ' personne(s)'?></h6>
            <h6 class="card-title"><?php echo 'Salle(s) de bain(s) : ' .  $annonce['bathroom_count']?></h6>
            <h6 class="card-title"><?php echo 'Nombre de lit(s) : ' .  $annonce['bed_count']?></h6>
            <h6 class="card-title"><?php echo 'Prix à la nuit : ' .  $annonce['price_night'] . ' €'?></h6>
            <p class="card-text"><?php echo $annonce['description']?></p>
            <form action="">
                <?php if (isset($_SESSION['auth'])): ?>
                    <a href="/public/page_reservation.php?numID=<?= $annonce['id'] ?>" class="btn btn-primary" type="submit">Réserver</a>
                <?php endif; ?>
                <?php if (!isset($_SESSION['auth'])): ?>
                    <a href="../Account/register.php" class="btn btn-grey" type="submit">Connectez-vous</a>
                <?php endif; ?>
            </form>
        </div>
            </div>
    </div>
<?php } ?>
</div>
<?php require_once '../include/footer.php' ?>
</body>
</html>
