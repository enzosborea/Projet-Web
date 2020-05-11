<?php session_start();
require '../include/functions.php'; ?>
<?php require '../include/header.php' ?>
<?php require_once '../include/db.php' ?>
<?php if (!empty($_POST)){

    if ($_POST['password'] != $_POST['password_confirm'] || ($_POST['password']) == null){
         echo ("Les mots de passes ne correspondent pas ou ne sont pas valide");
    }else {
        $user_id = $_SESSION['auth']->id;
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        require_once '../include/db.php';
        $pdo->prepare('UPDATE users SET password = ?')->execute([$password]);
        echo  ("Le mot de passe a bien été modifié");
    }
}

?>

<?php
if (isset($_FILES['myFile'])) {
    // on met le fichier dans une variable pour une meilleure lisibilité
    $file = $_FILES['myFile'];

    // On récupère le nom du fichier
    $filename = $file['name'];

    // On construit le chemin de destination
    $destination = "../assets/image_user/" . $filename;

    // On bouge le fichier temporaire dans la destination
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $user_id = $_SESSION['auth']->id;

        $query = "UPDATE users SET image = :filename WHERE id = :id ";
        $stmt = $pdo->prepare($query);
        return $stmt->execute([
            "filename" => $filename,
            "id" => $user_id
        ]);
    }

}?>

<?php

$user_id = $_SESSION['auth']->id; // variable prenant l'id de la session avec l'utilisateur connecté
$query = "SELECT * FROM users WHERE id = $user_id";
$stmt = $pdo->query($query);
$display_images = $stmt->fetch(PDO::FETCH_ASSOC);
$display_images = $display_images['image']; ?>

<?php
const USER_IMG_DIR = "../assets/image_user/";
$destination_folder = USER_IMG_DIR;
$profilePic = "null"; // initialisation de la variable pour l'insertion
if (isset($_FILES['myFile']) && // est-ce qu'on a bien le fichier ?
    $_FILES['myFile']['error'] == UPLOAD_ERR_OK && // le code d'erreur est-il ok ?
    move_uploaded_file($_FILES['myFile']['tmp_name'], $destination_folder . $_FILES['myFile']['name'])) { // le déplacement du fichier est-il ok ?
    $profilePic = $_FILES['myFile']['name']; // Alors on va pouvoir insérer notre photo de profil
}

?>



<div class="container mt-4">
    <h1>Compte de <?php echo $_SESSION['auth']->first_name; ?></h1>
    <h5 class="mt-4 mb-3">Argent disponible : <?php echo $_SESSION['auth']->sold . ' €'; ?></h5>
    <h5 class="mt-4 mb-3">Adresse-email : <?php echo $_SESSION['auth']->email?></h5>
</div>
<div class="container mt-4">
    <h5 class="mt-4 mb-3">Changer votre mot de passe :</h5>
    <form method="POST" action="">
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe" />
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe" />
        </div>
        <button class="btn btn-primary">Changer de mot de passe</button>
    </form>
</div>
<div class="container mt-4">
    <h5 class="mt-2 mb-3">Modifier votre photo de profil :</h5>
    <img class="mb-3" src="../assets/image_user/<?php echo ($display_images); ?>" alt="" width="200px">
    <form method="POST" enctype="multipart/form-data" class="mb-5">
        <input type="file" name="myFile" />
        <input type="submit" value="Envoyer" />
    </form>
</div>

<?php require_once '../include/footer.php' ?>


