<?php
include("fonctions.php");
setup();
?>

<head>
    <style type="text/css">
        body {
            background: rgb(0, 212, 255);
            background: linear-gradient(123deg, rgba(0, 212, 255, 1) 0%, rgba(9, 9, 121, 1) 78%, rgba(2, 0, 36, 1) 100%);
        }

        .anim {
            position: relative;
            left: -100%;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: hidden;
        }
    </style>

</head>

<body class="">
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 px-0">
                <a href="page-accueil.php" class="ms-5">
                    <img id="accueil" src="Images\accueil.png" class="anim" style="width: 30%;"></img>
                </a>
            </div>
            <div class="col-md-4 px-0 text-center">
                <br><br><br>
                <img id="logo" src="Images\PrivateVPN_logo.png" class="anim" style="width: 60%;">
                <img id="text" src="Images\Screen_475-removebg.png" class="mt-1 anim" style="width: 85%;">
            </div>
            <div class="col-md-1 px-0">
            </div>
            <div class="col-md-4">
                <div class="card shadow" id="card">
                    <div class="card-body">
                        <p class="display-4">Créer un compte</p>
                        <hr class="mt-3 mb-5 me-5">
                        <form id="demande" action="new-account.php" method="POST">
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
                            <div class="form-floating mb-3 mt-3">
                                <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
                                <label for="mdp">Mot de passe</label>
                            </div>
                            <button name="demande" type="submit" class="mt-5 btn btn-outline-dark">Créer le compte</button>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-2 px-0">
            </div>
        </div>
    </div>

    <script src="JS\L-Sliiddeeeee.js"></script>
    <script src="JS\R-Sliiddeeeee.js"></script>

    <?php
    if (isset($_POST['demande'])) {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['user'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $user = $_POST['user'];
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            $users = file_decod('Data\demande-compte.json');

            $users[$user] = [
                'prenom' => $prenom,
                'nom' => $nom,
                'user' => $user,
                'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
                'email' => $email,
            ];

            $src = "Images\Employés\blank-profile-picture.jpg";
            $dst = "Images\Employés\\" . $user . ".jpg";
            copy($src, $dst);

            file_put_contents('Data\demande-compte.json', json_encode($users));
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>