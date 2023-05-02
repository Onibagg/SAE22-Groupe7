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
//var_dump($_SESSION);

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
                    echo gestion_new_users();
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
                    ?>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>

</body>