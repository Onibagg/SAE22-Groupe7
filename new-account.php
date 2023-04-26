<?php
include("fonctions.php");
setup();
?>
<br>
<br>
<h1>Créer un compte</h1>
<form id="demande" action="new-account.php" method="POST">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="user">Nom d'utilisateur :</label>
        <input type="text" id="user" name="user">
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp">
    </div>
    <button name="demande" type="submit">Créer le compte</button>
</form>
</body>
<?php
if (isset($_POST['demande'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp'])&& !empty($_POST['user'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $demande = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mdp' => $mdp
        );

        $json_demande = json_encode($demande);

        $file = 'Data\demande-compte.json';
        file_put_contents($file, $json_demande . "\n", FILE_APPEND | LOCK_EX);
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
}
