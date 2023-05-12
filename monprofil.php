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
                <img src="../Images/Employés/<?php echo $_SESSION['user']; ?>.jpg" class="img-fluid rounded-circle mt-3" style="max-width: 250px;">
            </div>
            <form id="new-profile" action="monprofil.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>
        </div>
        <?php
        $user = $_SESSION['user'];
        $data = file_decod('Data/login-mdp.json');

        if (isset($data[$user])) {
            $prenom = $data[$user]['prenom'];
            $nom = $data[$user]['nom'];
            $mdp = $data[$user]['mdp'];
            $email = $data[$user]['email'];
            $groupe = $data[$user]['groupe'];
            $poste = $data[$user]['poste'];

        ?>
            <div class="col-4 card">
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Prénom</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="prenom" placeholder="<?php echo $prenom; ?>" name="prenom">
                        <label for="prenom"><?php echo $prenom; ?></label>
                    </div>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Prénom</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nom" placeholder="<?php echo $nom; ?>" name="nom">
                        <label for="nom"><?php echo $nom; ?></label>
                    </div>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">User</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="user" placeholder="<?php echo $user; ?>" name="user" disabled>
                        <label for="user"><?php echo $user; ?></label>
                    </div>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">E-mail</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="<?php echo $email; ?>" name="email">
                        <label for="email"><?php echo $email; ?></label>
                    </div>
                </div>
                <div class="form-floating mb-2 mt-5">
                    <input type="password" class="form-control" id="nouveauMdp" placeholder="Mot de passe" name="nouveauMdp">
                    <label for="nouveauMdp">Nouveau Mot de passe</label>
                </div>
                <div class="form-floating mb-3 mt-2">
                    <input type="password" class="form-control" id="confirmationMdp" placeholder="Mot de passe" name="confirmationMdp">
                    <label for="confirmationMdp">Confirmation</label>
                </div>
            </div>
            <div class="col-2">
            </div>
            <div class="mt-5 mb-5 text-center">
                <button name="new-profile" type="submit" class="btn btn-outline-success">Enregistrer les modifications</button>
                </form>
            </div>
            <script>
                // Récupérer les éléments de formulaire
                var prenomInput = document.getElementById('prenom');
                var nomInput = document.getElementById('nom');
                var emailInput = document.getElementById('email');

                // Ajouter des écouteurs d'événements pour chaque champ
                prenomInput.addEventListener('click', function() {
                    prenomInput.value = "<?php echo $prenom; ?>";
                });

                nomInput.addEventListener('click', function() {
                    nomInput.value = "<?php echo $nom; ?>";
                });

                emailInput.addEventListener('click', function() {
                    emailInput.value = "<?php echo $email; ?>";
                });
            </script>

        <?php
        }
        ?>
    </div>
</div>

<?php
//  $nouveauMdp === $confirmationMdp
if (isset($_POST['new-profile'])) {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $targetDir = 'Images/Employés/';
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

    $data = json_decode(file_get_contents('Data/login-mdp.json'), true);
    if (isset($data[$user])) {
        $data[$user]['prenom'] = $prenom;
        $data[$user]['nom'] = $nom;
        $data[$user]['email'] = $email;

        if (!empty($nouveauMdp)) {
            $data[$user]['mdp'] = $nouveauMdp;
        }

        file_put_contents('Data/login-mdp.json', json_encode($data));

        header("Location: monprofil.php");
        exit();
    }
}

?>