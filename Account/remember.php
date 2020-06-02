<?php
if(!empty($_POST) && !empty($_POST['email'])) {
    require_once '../include/db.php';
    require_once '../include/functions.php';

    $req = $pdo->prepare('SELECT * FROM users WHERE email = ? AND confirmed_at is not NULL');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();
    if ($user) {
        session_start();
        $reset_token = str_random(60);
        $pdo->prepare('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]);
        mail($_POST['email'], 'Réinitialisation de votre mot de passe', "Afin de récupérer votre compte merci de cliquer sur ce lien\n\nhttp://localhost:8000/Account/reset.php?id={$user->id}&token=$reset_token");
        $_SESSION['flash']['success'] = 'Les instructions du rappel de mot de passe vous ont été envoyées par emails';
        header('Location: login.php');
        exit();
    } else {
        $_SESSION['flash']['danger'] = 'Aucun compte ne correspond à cet adresse';
    }
}
?>

<?php require '../include/header.php' ?>
<div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Mot de passe oublié ?</h2>
    <div class="row">
        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5">
            <form action="" method="POST">

                <!--Grid row-->
                <div class="row">


                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">

                            <input type="email" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <div class="text-center text-md-left mt-4">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>