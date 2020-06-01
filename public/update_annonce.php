<?php
require_once '../include/db.php';
require_once '../include/header.php';

$query = $pdo->prepare('SELECT * FROM properties WHERE id = :num');

//liasion paramètre deletenum
$query->bindValue(':num', $_GET['numID'], PDO::PARAM_INT);

//exécution
$execute = $query->execute();

$contact = $query->fetch(PDO::FETCH_ASSOC);?>

<div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-5">Modifier votre annonce</h2>
    <div class="row">
        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5 ">
            <form action="modify_annonce.php" method="POST">
                <input type="hidden" name="numID" value="<?= $contact['id']?> ">

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="mb-0">
                            <label for="title" class="">Titre :</label>
                            <input type="text" class="form-control" value="<?= $contact['title'] ?>" name="title">
                        </div>
                    </div>
                </div>

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="mb-0">
                            <label for="description" class="">Description :</label>
                            <input type="text" class="form-control" value="<?= $contact['description'] ?>" name="description">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="mb-0">
                            <label for="person">Nombre de personnes(s) :</label>
                            <input type="number" value="<?= $contact['person'] ?>" name="person" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="mb-0">
                            <label for="lit">Salle(s) de bain(s) :</label>
                            <input type="number" value="<?= $contact['bathroom_count'] ?>" name="bathroom_count" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="mb-0">
                            <label for="lit">Nombre de lit(s) :</label>
                            <input type="number" value="<?= $contact['bed_count'] ?>" name="bed_count" class="form-control">
                        </div>
                    </div>
                </div>

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="mb-0">
                            <label for="prix">Prix à la nuit (€) :</label>
                            <input type="number" value="<?= $contact['price_night'] ?>" name="price_night" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left mb-5 mt-2">
                    <button class="btn btn-green" type="submit">Déposer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../include/footer.php' ?>
</body>
</html>





