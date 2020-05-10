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

    if (empty($_POST['price_night'])) {
        $errors['price_night'] = "Mot de passe manquant";
    }

    if (empty($_POST['bed_count'])) {
        $errors['bed_count'] = "Mot de passe manquant";
    }

    if (empty($errors)) {
        $req = $pdo->prepare(" INSERT INTO properties SET title = ?, description = ?,address = ?, price_night = ?,bed_count = ?, users_id = $user->id");
        $req->execute([$_POST['title'], $_POST['description'], $_POST['address'], $_POST['price_night'], $_POST['bed_count']]);
        header('Location: depose_annonce.php');
        exit();
    }
}
?>
<div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Deposer une annonce</h2>
            <div class="row">
                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">
                    <form action="" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Titre de l'annonce</label>
                                    <input type="text" id="" name="title" class="form-control">

                                </div>
                            </div>
                            <!--Grid column-->

                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Description</label>
                                    <input type="text" id="" name="description" class="form-control">
                                </div>
                            </div>

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Adresse</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="">Prix à la nuit</label>
                                    <input type="text" name="price_night" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="">Nombre de lit</label>
                                    <input type="text" name="bed_count" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-md-left mt-4">
                            <button class="btn btn-primary" type="submit">Déposer</button>
                        </div>
                    </form>
                </div>
            </div>
 </div>