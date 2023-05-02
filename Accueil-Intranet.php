<?php
include("fonctions.php");
setup();
intranet_navbar();

if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $usersData = file_decod('Data\login-mdp.json');
    $userData = $usersData[$user];
    $prenom = $userData['prenom'];
    $nom = $userData['nom'];

    echo "<p class='text-center mt-3 display-4' >Bienvenue " . $prenom . " " . $nom . "</p>";
} else {
    echo "<h1>Erreur : utilisateur non reconnu</h1>";
}

?>

<head>
    <script src="JS\heure.js"></script>
    <style>
        html,
        body {
            overflow-x: hidden;
        }
    </style>
</head>


<body>
    </script>
    <div class="row">
        <div class="col-sm-4">
<<<<<<< Updated upstream
            <p class="display-6">À venir:</p>
            <hr class="me-3">
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="mt-1 btn btn-outline-dark">
                        <p class="mb-0">Team Building :</p>
                        <span class="spinner-grow spinner-grow-sm"></span>
                        <br>
                        <?php
                        echo countdown("2023-06-29 12:15:00");
                        ?>
                    </button>
=======
            <div class="card mt-5 me-4">
                <div class="card-body">
                    <p class="display-6">À venir:</p>
                    <hr class="me-3">
                    <div class="row">
                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark">
                                <p class="mb-0">Team Building</p>
                                <span class="spinner-grow spinner-grow-sm"></span>
                                <br>
                                <?php
                                echo countdown("2023-06-29 12:15:00");
                                ?>
                            </button>
                        </div>
                        <div class="col text-center">
                            <button type="button" class="mt-5 btn btn-outline-dark">
                                <p class="mb-0">Nouvelle Offre</p>
                                <span class="spinner-grow spinner-grow-sm"></span>
                                <br>
                                <?php
                                echo countdown("2023-05-11 00:00:00");
                                ?>
                            </button>

                        </div>
                        <div class="col">
                            <button type="button" class="mt-3 btn btn-outline-dark">
                                <p class="mb-0">SKO</p>
                                <span class="spinner-grow spinner-grow-sm"></span>
                                <br>
                                <?php
                                echo countdown("2023-07-27 18:33:00");
                                ?>
                            </button>
                        </div>

                    </div>
>>>>>>> Stashed changes
                </div>
                <div class="col text-center">
                    <button type="button" class="mt-5 btn btn-outline-dark">
                        <p class="mb-0">Nouvelle Offre :</p>
                        <span class="spinner-grow spinner-grow-sm"></span>
                        <br>
                        <?php
                        echo countdown("2023-05-11 00:00:00");
                        ?>
                    </button>

                </div>
                <div class="col">
                    <button type="button" class="mt-3 btn btn-outline-dark">
                        <p class="mb-0">SKO :</p>
                        <span class="spinner-grow spinner-grow-sm"></span>
                        <br>
                        <?php
                        echo countdown("2023-04-29 18:33:00");
                        ?>
                    </button>
                </div>

            </div>
        </div>

        <div class="col-sm-4">
            <div class="mt-5 text-center display-5">
                <span id="heure"></span>
            </div>
            <?php
            $jour = date('d');
            $mois = date('F');
            $annee = date('Y');
            ?>
            <div class="text-center display-6">
                <?php
                echo $jour . ' ' . $mois . ' ' .  $annee;
                ?>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card mt-5 me-4">
                <div class="card-body">
                    <p class="display-6">Nouveau Utilisateurs:</p>
                    <?php
<<<<<<< Updated upstream
                    function afficher($utilisateurs)
                    {
                        echo '<form method="post">';
                        echo '<div class="table-responsive">';
                        echo '<table class="table table-hover">';
                        echo "<tr><th>Prénom</th><th>Nom</th><th></th></tr>";
                        foreach ($utilisateurs as $nom => $infos) {
                            echo '<tr>';
                            echo '<td><input type="text" name="prenom[' . $nom . ']" value="' . $infos['prenom'] . '" class="form-control"></td>';
                            echo '<td><input type="text" name="nom[' . $nom . ']" value="' . $infos['nom'] . '" class="form-control"></td>';
                            echo '<td class="text-center"><input type="submit" name="accepter[' . $nom . ']" value="Accepter" class="btn btn-success"></td>';
                            echo '<td class="text-center"><input type="submit" name="refuser[' . $nom . ']" value="Refuser" class="btn btn-danger"></td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        echo '</div>';
                        echo '</form>';
                    }

                    function gestion_new_users()
                    {
                        $demande_compte = 'Data\demande-compte.json';
                        $login_mdp = 'Data\login-mdp.json';

                        $users = file_get_contents($demande_compte);
                        $users = json_decode($users, true);

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (isset($_POST['accepter'])) {
                                foreach ($_POST['accepter'] as $nom => $valeur) {
                                    $user_accepte = $users[$nom]; //récuparation des infos
                                    $nouvel_utilisateur = array( //création d'un array avec les infos 
                                        'prenom' => $user_accepte['prenom'],
                                        'nom' => $user_accepte['nom'],
                                        'user' => $user_accepte['user'],
                                        'mdp' => $user_accepte['mdp'],
                                        'email' => $user_accepte['email'],
                                        'groupe' => '',
                                    );
                                    $login_mdp_contenu = file_get_contents($login_mdp); //récupère le fichier des vrai users
                                    $login_mdp_contenu = json_decode($login_mdp_contenu, true); //converti en tableau
                                    $login_mdp_contenu[$user_accepte['user']] = $nouvel_utilisateur; //ajout du new
                                    file_put_contents($login_mdp, json_encode($login_mdp_contenu)); //màj du fichier des vrai users
                                    unset($users[$nom]); //suppréssion du new du fichier des demandes
                                }
                                file_put_contents($demande_compte, json_encode($users));
                            } elseif (isset($_POST['refuser'])) {
                                foreach ($_POST['refuser'] as $nom => $valeur) {
                                    unset($users[$nom]); //vire le new des demande
                                    $photo_path = "Images\Employés\\" . $nom . ".jpg";
                                    if (file_exists($photo_path)) {
                                        unlink($photo_path);//suppr la photo si il en a une
                                    }
                                }
                                file_put_contents($demande_compte, json_encode($users)); //màj du fichier des demandes
                            }
                        }

                        afficher($users);
                    }

                    echo gestion_new_users();
=======
                    $user = $_SESSION['user'];
                    $data = file_get_contents('Data\groupes.json');
                    $groupes = json_decode($data, true);

                    $isIT = false;
                    $isDirection = false;
                    $isCommerciaux = false;
                    $isFinances = false;
                    $isProduction = false;
                    $isRH = false;

                    foreach ($groupes['IT']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isIT = true;
                            break;
                        }
                    }

                    foreach ($groupes['Direction']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isDirection = true;
                            break;
                        }
                    }

                    foreach ($groupes['Commerciaux']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isCommerciaux = true;
                            break;
                        }
                    }

                    foreach ($groupes['Finances']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isFinances = true;
                            break;
                        }
                    }

                    foreach ($groupes['Production']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isProduction = true;
                            break;
                        }
                    }

                    foreach ($groupes['RH']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isRH = true;
                            break;
                        }
                    }
                    if ($isRH || $isDirection) {
                        echo gestion_new_users();
                    } else {
                    ?>
                    <div class="text-center">
                        <p class="alert alert-danger" role="alert">/!\ Vous n'avez pas les droits necessaires pour effectuer cette action!</p>
                        <a class="btn btn-outline-primary" href="mailto:need-help@privatevpn.com?subject=Problème lors de l'affichage des nouveaux utilisateurs.&body=Cher Support-Technique, ">Demander de l'aide</a>
                    </div> 
                    <?php
                    }
>>>>>>> Stashed changes
                    ?>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>

</body>