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
        <div class="col-4 card">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
                <label for="nom">Nom</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
                <label for="prenom">Prénom</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="user" placeholder="Nom d'utilisateur" name="user">
                <label for="user">Nom d'utilisateur</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-2 mt-5">
                <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
                <label for="mdp">Nouveau Mot de passe</label>
            </div>
            <div class="form-floating mb-3 mt-2">
                <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
                <label for="mdp">Confirmation</label>
            </div>
        </div>
        <div class="col-2">
        </div>
        <div class="mt-5 mb-5 text-center">
            <button name="new-profile" type="submit" class="btn btn-outline-dark">Enregistrer les modifications</button>
            </form>
        </div>




    </div>
</div>

<?php
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
}
?>