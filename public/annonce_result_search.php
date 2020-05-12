<?php require_once '../include/header.php' ?>
<?php require_once '../include/db.php' ?>
<?php
$destination = strtolower($_GET['destination'] ?? "");

$query = "SELECT * FROM properties WHERE id";
    if ($price != "" ) {
        $query = $query . " AND price_night LIKE :price_night";}
    if ($destination != "" ) {
        $query = $query . " AND ville LIKE :destination";}
    $stmt = $pdo->prepare($query);
    if ($price != '') {
        $stmt->bindValue('prix', "%$price%");}
    if ($destination != '') {
        $stmt->bindValue('destination', "%$destination%");}
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="shadow p-3 bg-white rounded">
    <h2 class="h1-responsive font-weight-bold text-left my-4">Résultats de la recherche :</h2>
</div>
<section class="bg-light">
    <?php foreach ($result as $result_annonce) {?>
    <div class="row row-cols-1 row-cols-md-2 mx-5 pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
        <div class="col mb-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../assets/images/maison1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result_annonce['title']?></h5>
                    <h6 class="card-title"><?php echo 'Pour ' .  $result_annonce['person'] . ' personne(s)'?></h6>
                    <h6 class="card-title"><?php echo 'Prix à la nuit : ' .  $result_annonce['price_night'] . ' €'?></h6>
                    <p class="card-text"><?php echo $result_annonce['description']?></p>
                    <a href="#" class="btn btn-primary" type="submit">Voir</a>
                </div>
            </div>
        </div>
        <?php } ?>
</section>
<?php require_once '../include/footer.php';
