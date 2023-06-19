<?php
include("file_usage.php");
if (isset($_POST['demande'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['poste']) && !empty($_POST['mdp'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $poste = $_POST['poste'];
        $mdp = $_POST['mdp'];

        $users = file_decod('../Data/demande-compte.json');

        $users[$user] = [
            'prenom' => $prenom,
            'nom' => $nom,
            'user' => $user,
            'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
            'email' => $email,
            'poste' => $poste
        ];

        $src = "../Images/Employés/blank-profile-picture.jpg";
        $dst = "../Images/Employés/" . $user . ".jpg";
        copy($src, $dst);

        file_encod('../Data/demande-compte.json', $users);
?>

        <div class="alert alert-success" role="alert">
            La demande de création de compte a été enregistrée avec succès.
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger" role="alert">
            Tous les champs sont obligatoires
        </div>
<?php
    }
} else {
    echo '<br><br>';
}
?>