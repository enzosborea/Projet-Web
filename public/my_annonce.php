<?php require_once '../include/header.php'; ?>
<?php require_once '../include/db.php';
$user_id = $_SESSION['auth']->id;

$query = "SELECT * FROM properties WHERE users_id = $user_id";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="shadow p-3 bg-white rounded">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Mes biens</h2>
</div>
<section class="bg-light">
    <?php foreach ($result as $annonce) {?>
    <div class="row row-cols-1 row-cols-md-2 mx-5 pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
        <div class="col mb-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../assets/images/maison1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $annonce['title']?></h5>
                    <h6 class="card-title"><?php echo 'Pour ' .  $annonce['person'] . ' personne(s)'?></h6>
                    <h6 class="card-title"><?php echo 'Prix à la nuit : ' .  $annonce['price_night'] . ' €'?></h6>
                    <p class="card-text"><?php echo $annonce['description']?></p>
                    <a href="#" class="btn btn-primary" type="submit">Editer</a>
                </div>
            </div>
        </div>
        <?php } ?>
</section>