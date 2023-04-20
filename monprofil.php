<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<p class="display-4 mt-5 text-center">Mes Informations :</p>
<img src="..\Images\Employés\<?php echo $_SESSION['user']; ?>.jpg" style="width:250px;" class="rounded">
<form id="new-pdp" action="monprofil.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="photo">Changer de photo de profil :</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
    </div>
    <button type="submit" name="new-pdp" class="btn btn-outline-dark">Envoyer</button>
</form>

<?php
if (isset($_POST['new-pdp'])) {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $targetDir = '../Images/Employés/';
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