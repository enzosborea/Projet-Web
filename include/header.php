<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<?php require_once 'db.php'?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="wamingo">
    <meta name="description" content="Site de réservation en ligne de biens pour particuliers" />
    <!-- Meta -->

    <!-- title -->
    <title>Wamingo | Réservation en ligne</title>
    <!-- title -->

    <!-- CSS & BOOSTRAP-->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" hreflang="" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" hreflang="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" hreflang="" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <!-- CSS/BOOSTRAP-->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <!-- Jquery -->

    <!-- JS/BOOSTRAP -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <!-- JS/BOOSTRAP -->
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
        <div class="container">
            <a href="../index.php"><img class="img-fluid" src="../../../assets/images/wamingo.png" alt="logo du site" width="60px"></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                &#9776;
            </button>
            <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="../public/annonce.php" class="nav-link">Annonce</a></li>
                    <?php if (isset($_SESSION['auth'])): ?>
                    <li class="nav-item"><a href="../public/my_annonce.php" class="nav-link">Mes biens</a></li>
                    <li class="nav-item"><a href="../public/depose_annonce.php" class="nav-link">Déposer une annonce</a></li>
                    <?php endif; ?>
                </ul>
                <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                    <?php if (isset($_SESSION['auth'])):?>
                        <li class="nav-item"><a href="../Account/logout.php" class="nav-link">Se déconnecter</a></li>
                        <li class="nav-item"><a href="../Account/account.php" class="nav-link">Mon compte</a></li>
                        <li class="nav-item avatar">
                            <a class="nav-link p-0" href="../Account/account.php">
                                <img src="../assets/image_user/<?php
                                $user_id = $_SESSION['auth']->id; // variable prenant l'id de la session avec l'utilisateur connecté
                                $query = "SELECT * FROM users WHERE id = $user_id"; // prends tout de la table users où l'utilisateur connecté corresponds à l'id
                                $stmt = $pdo->query($query);
                                $display_images = $stmt->fetch(PDO::FETCH_ASSOC);
                                $display_images = $display_images['image']; // la variable display_image prends le champs image de la bdd pour l'utilisateur
                                if ($display_images != null){ // affiche l'avatar de l'utilisateur si le champ image de celui si n'est pas vide
                                    echo ($display_images);
                                } else {
                                    echo ('default-avatar.jpg');
                                }// sinon rien ?>" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item"><a href="../Account/register.php" class="nav-link">S'inscrire</a></li>
                        <li class="nav-item"><a href="../Account/login.php" class="nav-link">Se connecter</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <?php if(isset($_SESSION['flash'])): ?>
        <?php foreach ($_SESSION['flash'] as $type => $message): ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
</div>

