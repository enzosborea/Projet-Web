<?php require_once '../include/header.php' ?>
<?php require_once '../include/db.php' ?>

<div class="shadow p-3 bg-white rounded">
    <h2 class="h1-responsive font-weight-bold text-left my-4">Résultats de la recherche :</h2>
</div>
<?php
$destination = strtolower($_GET['destination'] ?? "");
$price_night = strtolower($_GET['price_night'] ?? "");
$person = strtolower($_GET['person'] ?? "");

$query = "SELECT * FROM properties WHERE id ";
    if ($price_night != "" ) {
        $query = $query . " AND price_night LIKE :price_night";}
    if ($destination != "" ) {
        $query = $query . " AND ville LIKE :destination";}
    if ($person != "" ) {
        $query = $query . " AND person LIKE :person";}
        $query = $query . " ORDER BY price_night";
    $stmt = $pdo->prepare($query);
    if ($price_night != '') {
        $stmt->bindValue('price_night', "%$price_night%");}
    if ($destination != '') {
        $stmt->bindValue('destination', "%$destination%");}
    if ($person != '') {
        $stmt->bindValue('person', "%$person%");}
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if (empty($result)) { ?>
            <div class="alert alert-danger col-12" role="alert">
            Aucun résultat n'a été trouvé !
            </div>
        <?php } 
?>


<section class="bg-light">
    <div class="row row-cols-1 row-cols-md-2 mx-5 pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
    <?php foreach ($result as $result_annonce) {?>

    <div class="col mb-4">
            <div class="card" style="min-width: 500px;max-width: 572px">
                <img class="card-img-top" src="../assets/images/maison1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result_annonce['title']?></h5>
                    <h6 class="card-title"><?php echo 'Ville : ' .  $result_annonce['ville'] ?></h6>
                    <h6 class="card-title"><?php echo 'Pour ' .  $result_annonce['person'] . ' personne(s)'?></h6>
                    <h6 class="card-title"><?php echo 'Prix à la nuit : ' .  $result_annonce['price_night'] . ' €'?></h6>
                    <p class="card-text"><?php echo $result_annonce['description']?></p>
                    <?php if (isset($_SESSION['auth'])): ?>
                        <a href="page_reservation.php?numID=<?= $result_annonce['id'] ?>" class="btn btn-primary" type="submit">Voir</a>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['auth'])): ?>
                        <a href="../Account/register.php" class="btn btn-grey" type="submit">Se connectez</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php } ?>
</section>

</body>
</html>
