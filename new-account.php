<?php
include("fonctions.php");
setup();
?>
<style>
    body {
        background: rgb(0, 212, 255);
        background: linear-gradient(123deg, rgba(0, 212, 255, 1) 0%, rgba(9, 9, 121, 1) 78%, rgba(2, 0, 36, 1) 100%);
    }
</style>

<body>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 px-0">
            </div>
            <div class="col-md-4 px-0 text-center">
                <img src="Images\PrivateVPN_logo.png" style="width: 60%;">
                <img src="Images\PrivateVPN_text.png" class="mt-0">
            </div>
            <div class="col-md-1 px-0">
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="display-4">Créer un compte</p>
                        <hr class="mt-3 mb-5 me-5">
                        <form id="demande" action="new-account.php" method="POST">
                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" class="form-control" id="nom" name="nom">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom :</label>
                                <input type="text" class="form-control" id="prenom" name="prenom">
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse email :</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="user">Nom d'utilisateur :</label>
                                <input type="text" class="form-control" id="user" name="user">
                            </div>
                            <div class="form-group">
                                <label for="mdp">Mot de passe :</label>
                                <input type="password" class="form-control" id="mdp" name="mdp">
                            </div>
                            <button name="demande" type="submit" class="mt-5 btn btn-outline-dark">Créer le compte</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 px-0">
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['demande'])) {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['user'])) {
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
    ?>
</body>