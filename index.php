<?php require_once 'include/header.php' ?>
<div>
    <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="assets/images/firstslide.jpg"
                         alt="Premiere slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h1 class="h1-responsive">Wamingo</h1>
                    <h5 class="text-responsive">Réservation de bien pour particuliers</h5>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="assets/images/secondslide.jpg"
                         alt="Deuxieme slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h1 class="h1-responsive">Wamingo</h1>
                    <h5 class="text-responsive">Réservation de bien pour particuliers</h5>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="assets/images/thirdslide.jpg"
                         alt="troisieme slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h1 class="h1-responsive">Wamingo</h1>
                    <h5 class="text-responsive">Réservation de bien pour particuliers</h5>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
        <!--/.Controls-->
    </div>
    <!-- A FAIRE -->
    <div class="s002 bg-light ">
        <form method="get" action="public/annonce_result_search.php">
            <div class="inner-form">
                <div class="input-field first-wrap">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                        </svg>
                    </div>
                    <input id="search" type="text" name="destination" placeholder="Lieux" />
                </div>
                <div class="input-field second-wrap">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                        </svg>
                    </div>
                    <input class="datepicker" id="depart" type="text" placeholder="29 Aug 2018" />
                </div>
                <div class="input-field third-wrap">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                        </svg>
                    </div>
                    <input class="datepicker" id="return" type="text" placeholder="30 Aug 2018" />
                </div>
                <div class="input-field fouth-wrap">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                    <input id="price_night" type="text" name="price_night" placeholder="Prix" />
                </div>
                <div class="input-field fouth-wrap">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                    <input id="person" type="text" name="person" placeholder="Personne(s)" max="5"/>
                </div>
                <div class="input-field fifth-wrap">
                    <button class="btn-search" type="submit">RECHERCHE</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../assets/js/extention/choices.js"></script>
    <script src="../assets/js/extention/flatpickr.js"></script>
    <script>
        flatpickr(".datepicker",
            {});

    </script>
    <script>
        const choices = new Choices('[data-trigger]',
            {
                searchEnabled: false,
                itemSelectText: '',
            });

    </script>
    <!-- A FAIRE -->
    <!--Accordion wrapper-->
    <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx194" role="tablist"
         aria-multiselectable="true">

        <ul class="list-unstyled d-flex justify-content-center pt-5 blue-text">
            <li><i class="fas fa-anchor mr-3 fa-2x" aria-hidden="true"></i></li>
            <li><i class="far fa-life-ring mr-3 fa-2x" aria-hidden="true"></i></li>
            <li><i class="far fa-star fa-2x" aria-hidden="true"></i></li>
        </ul>

        <h2 class="text-center text-uppercase blue-text py-4 px-3">Wamingo, Vous souhaites la bienvenue</h2>

        <hr class="mb-0">

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="heading4">
                <a data-toggle="collapse" data-parent="#accordionEx194" href="#collapse4" aria-expanded="true"
                   aria-controls="collapse4">
                    <h3 class="mb-0 blue-text">
                        Devenir hôte ? <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span></div>
                    </h3>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapse4" class="collapse show" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                <div class="card-body pt-2">
                    <p> Wamingo vous permet, de manière simple, de mettre votre espace disponible en location, qu'il s'agisse d'une chambre ou d'un logement entier.
                        Vous avez un contrôle total sur vos disponibilités, vos prix. Si vous disposez d'une chambre supplémentaire, d'un logement entier ou d'expertise en hébergement,
                        vous pouvez gagner de l'argent en les partageant avec des voyageurs du monde entier.
                        Vous pouvez héberger des voyageurs dans votre logement, organiser des expériences ou faire les deux. Vous décidez à quel moment vous souhaitez héberger des voyageurs..
                    </p>
                </div>
            </div>
        </div>

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="heading5">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse5" aria-expanded="false"
                   aria-controls="collapse5">
                    <h3 class="mb-0 blue-text">
                        Réservation ? <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span></div>
                    </h3>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx194">
                <div class="card-body pt-2">
                    <p>
                        Lorsque vous réservez un logement sur Wamingo, vous prenez des dispositions pour séjourner au domicile de quelqu'un. Chaque hôte a son propre style d'hospitalité,
                        à commencer par la façon dont il aime faire connaissance avec ses voyageurs. Certains hôtes veulent valider les demandes de réservation,
                        là où d'autres se sentent à l'aise en vous laissant faire une réservation instantanée de leur logement sans que vous ayez à attendre leur approbation.
                    </p>
                </div>
            </div>
        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="heading6">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse6" aria-expanded="false"
                   aria-controls="collapse6">
                    <h3 class="mb-0 blue-text">
                        Wamingo ! <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span></div>
                    </h3>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
                <div class="card-body pt-2">
                    <p>
                        Wamingo crée des liens entre les personnes grâce à la possibilité de réserver des logements et des activités partout dans le monde.
                        Les hôtes constituent le moteur de la communauté et fournissent aux voyageurs l'occasion unique de voyager comme s'ils étaient chez eux.</p>
                </div>
            </div>
        </div>
        <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->
    <!--/.Carousel Wrapper-->
    <?php $query = "SELECT * FROM properties ORDER BY price_night LIMIT 3 ";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <section class="bg-light">
        <div class="row row-cols-1 row-cols-md-2 mx-5 pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
            <?php foreach ($result as $result_annonce) {?>
                <div class="col mb-4">
                    <div class="card" >
                        <img class="card-img-top" src="../assets/images/maison1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result_annonce['title']?></h5>
                            <h6 class="card-title"><?php echo 'Ville : ' .  $result_annonce['ville'] ?></h6>
                            <h6 class="card-title"><?php echo 'Pour ' .  $result_annonce['person'] . ' personne(s)'?></h6>
                            <h6 class="card-title"><?php echo 'Prix à la nuit : ' .  $result_annonce['price_night'] . ' €'?></h6>
                            <p class="card-text"><?php echo $result_annonce['description']?></p>
                            <?php if (isset($_SESSION['auth'])): ?>
                            <a href="/public/page_reservation.php?numID=<?= $result_annonce['id'] ?>" class="btn btn-primary" type="submit">Réserver</a>
                            <?php endif; ?>
                            <?php if (!isset($_SESSION['auth'])): ?>
                            <a href="Account/login.php" class="btn btn-grey" type="submit">Connectez-vous</a>
                            <?php endif; ?>
                    </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>
<?php require_once 'include/footer.php' ?>
</body>
</html>