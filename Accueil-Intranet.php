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
    <style>
        /* Style pour le conteneur de l'heure */
        .heure-container {
            font-size: 48px;
            text-align: center;
            margin-top: 100px;
            font-family: "Helvetica", sans-serif;
            font-weight: bold;
            color: #333;
        }
    </style>
    <script>
        function actualiserHeure() {
            var date = new Date();
            var heures = String(date.getHours()).padStart(2, '0');
            var minutes = String(date.getMinutes()).padStart(2, '0');
            var secondes = String(date.getSeconds()).padStart(2, '0');

            document.getElementById("heure").innerText = heures + " : " + minutes + " : " + secondes;

            setTimeout(actualiserHeure, 1000);
        }

        window.onload = function() {
            actualiserHeure();
        };
    </script>
</head>

<body>
    <br>
    <br>
    <br>
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
</body>