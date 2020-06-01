<?php

require_once '../include/db.php';
require_once '../include/functions.php'; ?>

<?php require_once '../include/header.php' ?>
<!-- CARTE -->

<!-- GPS -> ADRESSE  -->
<?php
$query = $pdo->prepare('SELECT * FROM properties WHERE id = :num');

//liasion paramètre deletenum
$query->bindValue(':num', $_GET['numID'], PDO::PARAM_INT);

//exécution
$execute = $query->execute();

$annonce = $query->fetch(PDO::FETCH_ASSOC);
?> <!--
$ville = $annonce['ville'];

$json=file_get_contents("http://nominatim.openstreetmap.org/search?format=json&limit=1&q= $ville");

 $obj = json_decode($json, true);

$latitude = $obj[0]['lat'];
$longitude = $obj[0]['lon'];
?>
-->
<!-- HTML -->

<?php
$fail = 'oui';
if ($annonce['ville'] == "Lyon" ){
    $latitude = 45.750000;
    $longitude = 4.850000;
    $fail = 'non';
}
if ($annonce['ville'] == "Paris" ){
    $latitude = 48.8534;
    $longitude =  2.3488;
    $fail = 'non';
}
if ($annonce['ville'] == "Jassans" ){
    $latitude = 45.98279953;
    $longitude =  4.75868988037;
    $fail = 'non';
}
if ($annonce['ville'] == "Marseille" ){
    $latitude = 43.300000;
    $longitude =  5.400000;
    $fail = 'non';
}
if ($annonce['ville'] == "Tassin" ){
    $latitude = 45.7610;
    $longitude =  4.765;
    $fail = 'non';
}
?>




<!-- carte -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
<style type="text/css">
    #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
        height:400px;
    }
</style>
<!-- Fichiers Javascript -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
<script type="text/javascript">
    // On initialise la latitude et la longitude
    //-----------------------------------

    var lat = <?php echo json_encode($latitude); ?>;
    var lon = <?php echo json_encode($longitude); ?>;

    var macarte = null;

    // Fonction d'initialisation de la carte
    function initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte = L.map('map').setView([lat, lon], 12);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 15
        }).addTo(macarte);
        // Nous ajoutons un marqueur
        var marker = L.marker([lat, lon]).addTo(macarte);
    }
    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
</script>
<!-- CARTE -->
<!-- carte gps -->

<!-- carte gps -->



    <div class="container">
        <div class="row row-cols-1 row-cols pt-4"> <!--marge right/left 5 et marge top/bot à 5 -->
            <div class="col mb-6">
                <h2>
                    <strong><?php echo $annonce['title']?></strong>
                </h2>
                <h4>
                    &ensp;<?php echo 'Prix à la nuit  : ' .  $annonce['price_night'] . ' €'?>
                </h4>
                <br>
                <div>
                    <p>
                        <?php echo 'Nombre de lit : ' . $annonce['bed_count']?>
                    </p>
                    <p>
                        <?php echo 'Nombre de Salle de bain : ' . $annonce['bathroom_count']?>
                    </p>
                    <p>
                        <?php echo 'Adresse : ' . $annonce['address']?> <br>
                        <?php echo 'Code Postal : ' . $annonce['postal']?> <br>
                        <?php echo 'Ville : ' . $annonce['ville']?>
                    </p>
                    <p>

                        <?php
                        if ($fail == "oui"){
                            echo " la ville n'est pas reconnu sur la carte";
                        }


                        ?>
                    </p>
                    <div id="map">
                        <!-- affcihe la carte -->

                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <style>
                    #carousel-example-2
                    {
                        margin: 2em;
                    }

                    #test
                    {
                        padding: 2em
                    }
                </style>
                <!--Carousel-->
                <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view">
                                <img class="d-block w-100" src="/assets/images/maison1.jpg"
                                     alt="Premiere slide">
                                <div class="mask rgba-black-light"></div>
                            </div>
                            <div class="carousel-caption">
                                <h1 class="h1-responsive"><?php echo $annonce['title']?></h1>
                                <h5 class="text-responsive">Photo n°1</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="/assets/images/maison2.jpg"
                                     alt="Deuxieme slide">
                                <div class="mask rgba-black-light"></div>
                            </div>
                            <div class="carousel-caption">
                                <h1 class="h1-responsive"><?php echo $annonce['title']?></h1>
                                <h5 class="text-responsive">Photo n°2</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="/assets/images/maison3.jpg"
                                     alt="troisieme slide">
                                <div class="mask rgba-black-light"></div>
                            </div>
                            <div class="carousel-caption">
                                <h1 class="h1-responsive"><?php echo $annonce['title']?></h1>
                                <h5 class="text-responsive">Photo n°3</h5>

                            </div>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <!--/.Carousel-->
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
                    <!-- Revervation -->
                    <form action="calculPrix.php" method="POST">

                        <div class="card-body">
                            <h3 class="card-title" style="margin-left:20px">Reserver cette location !</h3>
                            <p>De :</p>
                            <div class="form-group row" style="margin-right:20px;margin-left:20px">
                                <label for="date_enter" class="col-2 col-form-label"></label>
                                <div class="col-10">
                                    <input class="form-control" type="date" nid="date_enter" value="2020-06-03">

                                </div>
                            </div>
                            <p> A : </p>
                            <div class="form-group row" style="margin-right:20px;margin-left:20px">
                                <label for="date_exit" class="col-2 col-form-label"></label>
                                <div class="col-10">
                                    <input class="form-control" type="date" id="date_exit" value="2020-06-04">
                                </div>
                            </div>
                            <!-- Argent-->
                            <center>
                                <?php
                                //prix de la nuit
                                echo 'Prix par personne : ' . $annonce['price_night'];   echo ' €';?>
                                <?php
                                // probleme de id !!

                                $id = $_SESSION['auth']->id;
                                ?>
                                <br>
                                <?php
                                // inserrer $user_id mais bug jsp
                                $query = $pdo->prepare("SELECT * FROM users WHERE id = $id");

                                //liasion paramètre deletenum

                                //exécution
                                $execute = $query->execute();

                                $user = $query->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <br>
                                <?php
                                echo 'Votre Solde : ' . $user['sold'];   echo ' €';
                                // sold --> pour calcul
                                $sold = $user['sold'] ;
                                // price_night --> pour calcul
                                $price_night = $annonce['price_night'];
                                ?>

                                <div class="mb-0"  style="margin-right:40px;margin-left:40px">
                                    <input type="hidden" name="numID" value="<?= $user['id']?> ">
                                    <input type="hidden" name="price_night" value="<?= $annonce['price_night']?> ">
                                    <input type="hidden" name="sold" value="<?= $user['sold']?> ">
                                    <label for="">Nombre de personnes(s) :</label>
                                    <input type="number" name="nb_personne" class="form-control" max="<?php echo  $annonce['person']?>" min="1" value="1">
                                </div>

                                <br>
                                <?php
                                // Calcul du coût de revient



                                // si assez d'argent sur le compte !! probleme de id
                                if (!empty($_POST['date_enter'])) {
                                    ?>
                                    <div class="alert alert-danger">
                                        <p>Vous n'avez pas rempli le formulaire correctement</p>
                                    </div>
                                    <?php
                                }
                                if (empty($_POST['date_exit'])) {
                                    $errors['date_enter'] = "Date obligatoire";
                                }
                                // pour l'argent
                                if ($sold > $price_night){

                                ?>
                                <div>
                                    <button class="btn btn-blue" type="submit">Réserver</button>
                            </center>
                        </div>
                        <?php
                        }
                        else {
                            echo 'Vous n\'avez pas assez d\'argent sur votre compte ';
                            ?><?php
                        }

                        ?>

                        <!-- /Argent -->

                </div>
                </form>
            </div>
            <!-- /reservation -->






        </div>
        <div class="container" style="margin-top:20px;margin-bottom: 20px;">
            <h2 style="margin-bottom: 20px;">Description</h2>
            <section>
                &ensp;&ensp;  <?php echo $annonce['description']?>
            </section>
        </div>
    </div>
    </div>


    </div><!-- Footer -->
    <footer class="page-footer font-small bg-dark">

        <!-- Footer Links -->
        <div class="container">

            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">A propos</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Devenir hôte</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Awards</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Aide</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="../public/contact.php">Contact</a>
                    </h6>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">

            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

                <!-- Grid column -->
                <div class="col-md-8 col-12 mt-3">
                    <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                </div>
                <!-- Grid column -->
            </div>
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <a href="../index.php"><img class="img-fluid" src="../../../assets/images/wamingo.png" alt="logo du site" width="55px"></a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->