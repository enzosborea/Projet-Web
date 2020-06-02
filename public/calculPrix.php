
<?php require_once '../include/header.php';

$user_id = intval($_POST['numID']);

$title = ($_POST['title']);

$nb_person = intval($_POST['nb_personne']);
$price_night = intval($_POST['price_night']);

$solde = intval($_POST['sold']);
$montant = ($price_night * $nb_person);
$sold = ($solde - $montant) ;

        $query = "UPDATE  users  SET sold = :sold WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
          'sold' => $sold,
          'id' => $user_id
          ]);

        mail($_POST['email'], 'Confirmation de votre réservation', "votre réservation \" $title \" est éffectué ");
?>



<div class="container">
<h2 class="mt-4 ml-4">Votre annonce à bien été réservé.<h2>
        <div class="mt-4">
            <button class="text-center text-md-left btn btn-primary" onclick="window.location.href = 'http://localhost:8000/index.php';">Retour</button>
        </div>
</div>
