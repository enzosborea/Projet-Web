<?php
require_once '../include/functions.php';
session_start();
if(!empty($_POST)) {

    $errors = array();
    require_once '../include/db.php';

    if (empty($_POST['first_name']) || !preg_match('/^[a-zA-Z-]+/', $_POST['first_name'])) {
        $errors['firstname'] = "Prénom manquant";
    }

    if (empty($_POST['last_name']) || !preg_match('/^[a-zA-Z-]+/', $_POST['last_name'])) {
        $errors['lastname'] = "Nom manquant";
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $req->execute([$_POST['email']]);
        $email = $req->fetch();
        if ($email) {
            $errors['email'] = 'Email déjà enregistré';
        }
    }

    if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
        $errors['password'] = "Mot de passe manquant";
    }

    if (empty($errors)) {
        $req = $pdo->prepare("INSERT INTO users SET first_name = ?, last_name = ?,email = ?, password = ?, confirmation_token = ?, sold = 3000");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['first_name'], $_POST['last_name'], $_POST['email'], $password, $token]);
        $user_id = $pdo->lastInsertId();
        mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost:8000/Account/confirm.php?id=$user_id&token=$token");
        $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
        header('Location: login.php');
        exit();
    }
}
?>

<?php require '../include/header.php' ?>


 <div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Inscription</h2>
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
                <div class="col-md-12 mb-md-0 mb-5">
                    <form action="" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Prénom</label>
                                    <input type="text" id="" name="first_name" class="form-control">

                                </div>
                            </div>
                            <!--Grid column-->

                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Nom</label>
                                    <input type="text" id="" name="last_name" class="form-control">
                                </div>
                            </div>

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Votre email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="">Mot de passe</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="">Confirmez votre mot de passe</label>
                                    <input type="password" i name="password_confirm" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-md-left mt-4">
                            <button class="btn btn-primary" type="submit">M'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
 </div>