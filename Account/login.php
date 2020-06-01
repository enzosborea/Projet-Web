<?php
if(!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {
    require_once '../include/db.php';
    require_once '../include/functions.php';

    $req = $pdo->prepare('SELECT * FROM users WHERE email = :email AND confirmed_at is not NULL');
    $req->execute(['email' => $_POST['email']]);
    $user = $req->fetch(PDO::FETCH_OBJ);
    if ($user && password_verify($_POST['password'], $user->password)) {
        session_start();
        $_SESSION['auth'] = $user;
        header('Location: account.php');
        exit();
    } else {
        $_SESSION['flash']['success'] = 'Identifiant ou mot de passe incorrect';
    }
}
?>

<?php require '../include/header.php' ?>
<div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Se connecter</h2>
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
                            
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="password" id="password" name="password" class="form-control">
                            <label for="password" class="">Mot de passe</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <div class="text-center text-md-left mt-4">
                    <button class="btn btn-primary" type="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>