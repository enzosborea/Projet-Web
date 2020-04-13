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
                    <li class="nav-item"><a href="#" class="nav-link">Devenir hôte</a></li>
                    <li class="nav-item"><a href="../public/contact.php" class="nav-link">Nous contacter</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">A propos</a></li>
                </ul>
                <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                    <?php if (isset($_SESSION['auth'])):?>
                        <li><a href="../Account/logout.php">Se déconnecter</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a href="../Account/register.php" class="nav-link">S'inscrire</a></li>
                        <li class="nav-item"><a href="../Account/login.php" class="nav-link">Se connecter</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <?php if (isset($_SESSION['flash'])): ?>

        <?php foreach ($_SESSION['flash'] as $type => $message): ?>
            <div class="alert alert-<?= $type; ?> mt-3">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>

        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    </div>
</header>


