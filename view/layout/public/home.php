<!DOCTYPE html>
<html lang="fr">
<?php require_once '../head.php' ?>
<body>
<?php require_once '../navbar.php' ?>
<main>
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
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
                <img class="d-block w-100" src="../../../assets/images/firstslide.jpg"
                     alt="Premiere slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h1 class="h1-responsive">Wamingo</h1>
                <p class="text-responsive">Votre site de reservation</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="../../../assets/images/secondslide.jpg"
                     alt="Deuxieme slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h1 class="h1-responsive">Wamingo</h1>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="../../../assets/images/thirdslide.jpg"
                     alt="troisieme slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h1 class="h1-responsive">Wamingo</h1>
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
    <div class="input-daterange input-group" id="datepicker">
    <input type="text" class="input-sm form-control" name="start" />
    <span class="input-group-addon">to</span>
    <input type="text" class="input-sm form-control" name="end" />
    </div>
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
    <div class="row row-cols-1 row-cols-md-2 mx-5 my-3"> <!--marge right/left 5 et marge top/bot à 5 -->
        <div class="col mb-4">
            <div class="card">
                <img src="../../../assets/images/maison1.jpg" class="card-img-top" alt="..."> <!--image a integrer propre-->
                <div class="card-body">
                    <h5 class="card-title">Maison</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="../../../assets/images/maison1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maison</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="../../../assets/images/maison1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maison</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Voir</a> <!-- bouton en formule a faire -->
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="../../../assets/images/maison1.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maison</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>