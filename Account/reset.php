<?php
if(isset($_GET['id']) && isset($_GET['token'])) {
    require '../include/db.php';
    require '../include/functions.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE id = ? AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');
    $req->execute([$_GET['id'], $_GET['token']]);
    $user = $req->fetch();
    if($user){
        if (!empty($_POST)){
            if (!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirmation']){
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $pdo->prepare('UPDATE users SET password = ?, reset_at = NULL, reset_token = NULL')->execute([$password]);
                session_start();
                $_SESSION['flash']['success'] = 'Votre mot de passe a bien été modifié';
                $_SESSION['auth'] = $user;
                header('Location: account.php');
                exit();
                }
            }
    } else {
        session_start();
        $_SESSION['flash']['error'] = "Ce token n'est pas valide";
        header('Location: login.php');
        exit();
    }
}
else {
    header('Location: login.php');
    exit;
}
?>

<?php require '../include/header.php' ?>
<div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Réinitialiser mon mot de passe</h2>
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
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="password" id="password" name="password" class="form-control">
                            <label for="password" class="">Mot de passe</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="password" id="password" name="password_confirmation" class="form-control">
                            <label for="password" class="">Confirmation de mot de passe</label>
                        </div>
                    </div>
                </div>

                <div class="text-center text-md-left mt-4">
                    <button class="btn btn-primary" type="submit">Réinitialiser mon mot de passe</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>