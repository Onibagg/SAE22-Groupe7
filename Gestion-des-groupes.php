<?php
include("fonctions.php");
setup();
intranet_navbar();
?>

<head>
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>
<p class="display-4 text-center">Gestion des Groupes</p>
<?php

$groupes_json = file_get_contents('Data\groupes.json'); // Recuperation des groupes
$groupes = json_decode($groupes_json, true);

$utilisateurs_json = file_get_contents('Data\login-mdp.json');  // Recuperation des utilisateurs
$utilisateurs = json_decode($utilisateurs_json, true);


if (isset($_POST['nouveau_membre']) && isset($_POST['groupe'])) { // Traitement pour ajouter un membre
    $nouveau_membre = $_POST['nouveau_membre'];
    $groupe = $_POST['groupe'];
    $nouveau_membre_data = array('user' => $nouveau_membre);
    array_push($groupes[$groupe]['membres'], $nouveau_membre_data);
    file_put_contents('Data\groupes.json', json_encode($groupes));
    header("Location: Gestion-des-groupes.php");
    exit();
}

echo '<div class="row">';                       // Affichage
foreach ($groupes as $nom_groupe => $groupe) {
    echo '<div class="col-sm-4">';
    echo '<div class="card mt-5 me-4">';
    echo '<div class="card-body">';
    echo "<p class='display-6'>$nom_groupe</p>";
    echo "<p>Membres actuels :</p>";
    echo "<ul>";
    foreach ($groupe['membres'] as $membre) {
        echo "<hr><li>" . $membre['user'] . " <form method='post'><input type='hidden' name='nom_groupe' value='$nom_groupe'><input type='hidden' name='user' value='" . $membre['user'] . "'><button class='btn btn-outline-danger btn-sm' name='supprimer'>Supprimer</button></form></li>";
    }
    echo "</ul><hr class='ms-4'>";

    echo "<form method='post'>";        // Form pour ajouter un membre
    echo "<label for='nouveau_membre'>Ajouter un membre :</label>";
    echo "<select name='nouveau_membre'>";
    echo '<option value="">-- Sélectionnez un nouveau membre --</option>';
    foreach ($utilisateurs as $utilisateur) {
        echo "<option value='" . $utilisateur['user'] . "'>" . $utilisateur['prenom'] . " " . $utilisateur['nom'] . "</option>";
    }
    echo "</select>";
    echo "<input type='hidden' name='groupe' value='$nom_groupe'>";
    echo "<input type='submit' name='ajouter' value='Ajouter'>";
    echo "</form>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
}
echo "</div>";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {        // Traitement du form
    if (isset($_POST['ajouter'])) {
        $groupe = $_POST['groupe'];
        $nouveau_membre = $_POST['nouveau_membre'];

        // Verification que le groupe existe
        if (!array_key_exists($groupe, $groupes)) {
            echo "<p>Le groupe $groupe n'existe pas.</p>";
            exit;
        }

        // Ajout du nouveau membre
        $groupes[$groupe]['membres'][] = ['user' => $nouveau_membre];

        // Enregistrement des modifs
        $nouveau_groupe_json = json_encode($groupes);
        file_put_contents('Data\groupes.json', $nouveau_groupe_json);

        exit;
    } elseif (isset($_POST['supprimer'])) {
        $nom_groupe = $_POST['nom_groupe'];
        $user = $_POST['user'];
        supprimerMembre($nom_groupe, $user);
        
    }
}
?>