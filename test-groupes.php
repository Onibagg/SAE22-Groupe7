<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<p class="display-4 text-center">Test</p>
<?php

// Récupération des données depuis le fichier JSON
$groupes_json = file_get_contents('Data\groupes.json');
$groupes = json_decode($groupes_json, true);

// Récupération des données des utilisateurs depuis le fichier JSON
$utilisateurs_json = file_get_contents('Data\login-mdp.json');
$utilisateurs = json_decode($utilisateurs_json, true);

// Fonction pour supprimer un membre d'un groupe
function supprimerMembre($nom_groupe, $user)
{
    global $groupes;
    foreach ($groupes[$nom_groupe]['membres'] as $key => $membre) {
        if ($membre['user'] === $user) {
            unset($groupes[$nom_groupe]['membres'][$key]);
            break;
        }
    }
    file_put_contents('Data\groupes.json', json_encode($groupes));
}

// Traitement du formulaire pour ajouter un membre au groupe
if (isset($_POST['nouveau_membre']) && isset($_POST['groupe'])) {
    $nouveau_membre = $_POST['nouveau_membre'];
    $groupe = $_POST['groupe'];
    $nouveau_membre_data = array('user' => $nouveau_membre);
    array_push($groupes[$groupe]['membres'], $nouveau_membre_data);
    file_put_contents('Data\groupes.json', json_encode($groupes));
}

// Affichage des groupes et de leurs membres actuels
echo '<div class="row">';
foreach ($groupes as $nom_groupe => $groupe) {
    echo '<div class="col-sm-4">';
    echo '<div class="card mt-5 me-4">';
    echo '<div class="card-body">';
    echo "<h2>$nom_groupe</h2>";
    echo "<p>Membres actuels :</p>";
    echo "<ul>";
    foreach ($groupe['membres'] as $membre) {
        echo "<li>" . $membre['user'] . " <button class='btn btn-outline-danger btn-sm' name='supprimer'>Supprimer</button></li>";
    }
    echo "</ul>";

    // Formulaire pour ajouter un membre au groupe
    echo "<form method='post'>";
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


// Traitement du formulaire pour ajouter un membre
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ajouter'])) {
        $groupe = $_POST['groupe'];
        $nouveau_membre = $_POST['nouveau_membre'];

        // Vérification que le groupe existe
        if (!array_key_exists($groupe, $groupes)) {
            echo "<p>Le groupe $groupe n'existe pas.</p>";
            exit;
        }

        // Ajout du nouveau membre
        $groupes[$groupe]['membres'][] = ['user' => $nouveau_membre];

        // Enregistrement des modifications dans le fichier JSON
        $nouveau_groupe_json = json_encode($groupes);
        file_put_contents('Data\groupes.json', $nouveau_groupe_json);

        // Redirection vers la page courante pour rafraîchir l'affichage
        echo '<meta http-equiv="refresh" content="0">';
        exit;
    } elseif (isset($_POST['supprimer'])) {

}
}
?>