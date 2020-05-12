<?php require_once '../include/header.php' ?>
<?php require_once '../include/db.php' ?>

<div class="shadow p-3 bg-white rounded">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Les Annonces</h2>
</div>
<section class="bg-light">
    <div class="row row-cols-1 row-cols-md-2 mx-5 pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
        <div class="col mb-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../assets/images/maison1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">titre</h5>
                    <p class="card-text">description</p>
                    <a href="#" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>
</section>
<?php require_once '../include/footer.php' ?>
