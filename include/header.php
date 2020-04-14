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
                    <li class="nav-item"><a href="../public/contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">A propos</a></li>
                    <?php if (isset($_SESSION['auth'])): ?>
                    <li class="nav-item"><a href="#" class="nav-link">Déposer une annonce</a></li>
                    <?php endif; ?>
                </ul>
                <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                    <?php if (isset($_SESSION['auth'])):?>
                        <li class="nav-item"><a href="../Account/logout.php" class="nav-link">Se déconnecter</a></li>
                        <li class="nav-item"><a href="../Account/account.php" class="nav-link">Mon compte</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a href="../Account/register.php" class="nav-link">S'inscrire</a></li>
                        <li class="nav-item"><a href="../Account/login.php" class="nav-link">Se connecter</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>


