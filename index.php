<?php require_once 'include/header.php' ?>
<main>
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
                    <h5 class="text-responsive">Reservation de biens pour particuliers</h5>
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
                    <h5 class="text-responsive">Reservation de biens pour particuliers</h5>
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
                    <h5 class="text-responsive">Reservation de biens pour particuliers</h5>
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
                    <select data-trigger="" name="price_night">
                    </select>
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
                        Qui sommes nous ? <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span></div>
                    </h3>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapse4" class="collapse show" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                <div class="card-body pt-0">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                        3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                        accusamus labore sustainable VHS.</p>
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
                <div class="card-body pt-0">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                        3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                        accusamus labore sustainable VHS.</p>
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
                        Voyager ! <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span></div>
                    </h3>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
                <div class="card-body pt-0">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                        3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                        accusamus labore sustainable VHS.</p>
                </div>
            </div>
        </div>
        <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->
    <!--/.Carousel Wrapper-->
    <section class="bg-light">
        <div class="row row-cols-1 row-cols-md-2 mx-5 pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
            <div class="col mb-4">
                <div class="card">
                    <img src="../assets/images/maison1.jpg" class="card-img-top" alt="..."> <!--image a integrer propre-->
                    <div class="card-body">
                        <h5 class="card-title">Maison</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="../assets/images/maison3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maison</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="../assets/images/maison2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maison</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'include/footer.php' ?>
</body>
</html>