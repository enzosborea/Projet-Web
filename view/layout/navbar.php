<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="home.php">Wamingo</a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                &#9776;
            </button>
            <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Devenir hôte</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Déposer une annonce</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">A propos</a></li>
                </ul>
                <ul class="nav navbar-nav flex-row justify-content-between ml-auto">

                    <li class="dropdown order-1">
                        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-primary dropdown-toggle">Connexion<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-left dropdown-menu-lg-right mt-2">
                            <li class="px-3 py-2">
                                <form class="form" role="form">
                                    <div class="form-group">
                                        <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <input id="passwordInput" placeholder="Mot de passe" class="form-control form-control-sm" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                    </div>
                                    <div class="form-group text-center">
                                        <a href="#" data-toggle="modal" data-target="#modalPassword">Pas encore inscrit(e) ?</a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
