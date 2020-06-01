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


    if (empty($_POST['description']) || !preg_match('/^[a-zA-Z-0-9]+/', $_POST['description'])) {
        $errors['description'] = "Description manquante ou caractère inapproprié";
    }

    if (empty($_POST['address']) || !preg_match('/^[a-zA-Z-0-9]+/', $_POST['address'])) {
        $errors['address'] = "Adresse manquante ou caractère inapproprié";
    }

    if (empty($_POST['postal']) || !preg_match('/^[0-9]+/', $_POST['postal'])) {
        $errors['postal'] = 'Code postal manquant ou caractère inapproprié';
    }

    if (empty($_POST['ville']) || !preg_match('/^[a-zA-Z]+/', $_POST['ville'])) {
        $errors['ville'] = 'Ville manquante ou caractère inapproprié';
    }

    if (empty($_POST['bathroom_count']) || !preg_match('/^[0-9]+/', $_POST['bathroom_count'])) {
        $errors['bathroom_count'] = 'Nombre de salle de bain obligatoire';
    }

    if (empty($_POST['bed_count']) || !preg_match('/^[0-9]+/', $_POST['bed_count'])) {
        $errors['beb_count'] = 'Nombre de lit(s) obligatoire';
    }

    if (empty($_POST['price_night']) || !preg_match('/^[0-9]+/', $_POST['price_night'])) {
        $errors['price_night'] = 'Prix manquant obligatoire';
    }

    if (empty($_POST['person']) || !preg_match('/^[0-9]+/', $_POST['person'])) {
        $errors['person'] = 'Nombre de personne obligatoire';
    }
    

    if (empty($errors)) {
        $req = $pdo->prepare(" INSERT INTO properties SET title = ?, description = ?,address = ?, ville = ?, postal = ?, price_night = ?,bathroom_count = ?, bed_count = ?, person = ?, image_annonce1 = ?, users_id = $user->id");
        $req->execute([$_POST['title'], $_POST['description'], $_POST['address'],$_POST['ville'], $_POST['postal'], $_POST['price_night'], $_POST['bathroom_count'],$_POST['bed_count'], $_POST['person'], $_POST['image_annonce1']]);
        exit();
    }
}
?>


<div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Deposer une annonce</h2>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <p>Vous n'avez pas rempli le formulaire correctement</p>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
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
                                    <input type="text" name="description" class="form-control" >
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
                                    <label for="">Salle(s) de bain(s) :</label>
                                    <input type="number" name="bathroom_count" class="form-control">
                                </div>
                            </div>
                        </div>

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
                            <input type="file" name="image_annonce1" />                        
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
