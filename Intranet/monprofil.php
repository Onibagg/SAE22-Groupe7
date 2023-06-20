<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<h1 class="display-4 text-center mt-3">Mes informations :</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-4 card me-4 text-center">

            <div class="text-center">
                <img src="../Data/Images/Employés/<?php echo $_SESSION['user']; ?>.jpg" class="img-fluid rounded-circle mt-3" style="max-width: 250px;">
            </div>
            <form id="new-profile" action="monprofil.php" method="post" enctype="multipart/form-data">
                <div class="form-group mt-4">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
        </div>
        <?php
        $user = $_SESSION['user'];
        $data = file_decod('../Data/login-mdp.json');

        if (isset($data[$user])) {
            $prenom = $data[$user]['prenom'];
            $nom = $data[$user]['nom'];
            $mdp = $data[$user]['mdp'];
            $email = $data[$user]['email'];
            $poste = $data[$user]['poste'];

        ?>
            <div class="col-4 card">
                <form>
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text">Prénom</span>
                        <input type="text" class="form-control" id="prenom" placeholder="<?php echo $prenom; ?>" name="prenom" required value="<?php echo $prenom; ?>">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text">Nom</span>
                        <input type="text" class="form-control" id="nom" placeholder="<?php echo $nom; ?>" name="nom" required value="<?php echo $nom; ?>">
                    </div>
                    <div class="input-group mb-3 mt-3 input-group-sm">
                        <span class="input-group-text">User</span>
                        <input type="text" class="form-control" id="user" placeholder="<?php echo $user; ?>" name="user" disabled value="<?php echo $user; ?>">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text">E-mail</span>
                        <input type="text" class="form-control" id="email" placeholder="<?php echo $email; ?>" name="email" required value="<?php echo $email; ?>">
                    </div>
                    <div class="form-floating mb-2 mt-5">
                        <input type="password" class="form-control" id="nouveauMdp" placeholder="Mot de passe" name="nouveauMdp">
                        <label for="nouveauMdp">Nouveau Mot de passe</label>
                    </div>
                    <div class="form-floating mb-3 mt-2">
                        <input type="password" class="form-control" id="confirmationMdp" placeholder="Mot de passe" name="confirmationMdp">
                        <label for="confirmationMdp">Confirmation</label>
                    </div>
                    <div class="mt-5 mb-5 text-center">
                        <button name="new-profile" type="submit" class="btn btn-outline-success">Enregistrer les modifications</button>
                    </div>
                </form>
            </div>


        <?php
        }
        ?>
    </div>
</div>

<?php
//  $nouveauMdp === $confirmationMdp
if (isset($_POST['new-profile'])) {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $targetDir = '../Data/Images/Employés/';
        $targetFile = $targetDir . $_SESSION['user'] . '.jpg';

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        $tmpFile = $_FILES['photo']['tmp_name'];
        $newFile = $targetDir . $_SESSION['user'] . '.jpg';
        move_uploaded_file($tmpFile, $newFile);
    }

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $user = $_SESSION['user'];
    $email = $_POST['email'];
    $nouveauMdp = $_POST['nouveauMdp'];
    $confirmationMdp = $_POST['confirmationMdp'];

    if ($nouveauMdp !== $confirmationMdp) {
        echo "<div class='alert alert-danger mt-3 ms-5 me-5'>Les mots de passe ne correspondent pas.</div>";
        $passwordError = "error";
        exit();
    }

    $data = file_decod('../Data/login-mdp.json');
    if (isset($data[$user])) {
        $data[$user]['prenom'] = $prenom;
        $data[$user]['nom'] = $nom;
        $data[$user]['email'] = $email;

        if (!empty($nouveauMdp)) {
            $data[$user]['mdp'] = $nouveauMdp;
        }

        file_put_contents('../Data/login-mdp.json', json_encode($data));

        echo '<meta http-equiv="refresh" content="0">';
        exit();
    }
}

?>