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

    echo "<p class='text-center mt-5 display-4' >Bienvenue " . $prenom . " " . $nom . "</p>";
} else {
    echo "<h1>Erreur : utilisateur non reconnu</h1>";
}

?>

<head>
    <script src="JS\heure.js"></script>
</head>

<body>
    <div class="row">
        <div class="col">
            <p class="display-6">À venir:</p><hr class="me-3">
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

        <div class="col-4">
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

        <div class="col"></div>

    </div>
    <br>
    <br>
    <br>

</body>