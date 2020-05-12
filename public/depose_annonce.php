<?php  require_once '../include/header.php'?>
<?php
require_once '../include/functions.php';

if(!empty($_POST)) {
    $user = $_SESSION['auth'];
    $errors = array();
    require_once '../include/db.php';

    if (empty($_POST['title'])) {
        $errors['title'] = "Titre obligatoire";
    }

    if (empty($_POST['description'])) {
        $errors['description'] = "Description obligatoire";
    }

    if (empty($_POST['address'])) {
        $errors['address'] = "Adresse obligatoire";
    }

    if (empty($_POST['postal'])) {
        $errors['postal'] = 'Code postal obligatoire';
    }

    if (empty($_POST['ville'])) {
        $errors['ville'] = 'Ville obligatoire';
    }

    if (empty($_POST['bed_count'])) {
        $errors['beb_count'] = 'Nombre de lit(s) obligatoire';
    }

    if (empty($_POST['price_night'])) {
        $errors['price_night'] = 'Prix obligatoire';
    }

    if (empty($_POST['person'])) {
        $errors['person'] = 'Prix obligatoire';
    }


    if (empty($errors)) {
        $req = $pdo->prepare(" INSERT INTO properties SET title = ?, description = ?,address = ?, ville = ?, postal = ?, price_night = ?,bed_count = ?, person = ?, users_id = $user->id");
        $req->execute([$_POST['title'], $_POST['description'], $_POST['address'],$_POST['ville'], $_POST['postal'], $_POST['price_night'], $_POST['bed_count'], $_POST['person']]);
        header('Location: depose_annonce.php');
        $_SESSION['flash']['success'] = "Annonce déposer avec succès";
        exit();
    }
}
?>
<div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Deposer une annonce</h2>
            <div class="row">
                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5 ">
                    <form action="" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="" class="">Titre de l'annonce :</label>
                                    <input type="text" id="" name="title" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="exampleFormControlTextarea1" class="">Description :</label>
                                    <textarea rows="3" <input type="text" name="description" class="form-control"> </textarea>
                                </div>
                            </div>



                            <!--Grid column-->
                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="" class="">Adresse :</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="" class="">Ville :</label>
                                    <input type="text" name="ville" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="" class="">Code Postal :</label>
                                    <input type="number" name="postal" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="">Nombre de lit(s) :</label>
                                    <input type="number" name="bed_count" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="">Prix à la nuit (€) :</label>
                                    <input type="number" name="price_night" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="mb-0">
                                    <label for="">Nombre de personnes(s) :</label>
                                    <input type="number" name="person" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-md-left mb-5 mt-2">
                            <button class="btn btn-primary" type="submit">Déposer</button>
                        </div>
                    </form>
                </div>
            </div>
 </div>
<?php require_once '../include/footer.php' ?>
