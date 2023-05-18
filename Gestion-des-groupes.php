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
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <form method="POST">
            <div class="input-group mt-5 mb-1">
                <input type="text" name="name-newgrp" class="form-control <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newgrp']) && empty($_POST['name-newgrp'])) echo 'is-invalid'; ?>" placeholder="Nouveau groupe">
                <button class="btn btn-outline-success" name="newgrp" type="submit">Créer le groupe</button>
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newgrp']) && empty($_POST['name-newgrp'])) : ?>
                    <div class="invalid-feedback">
                        Veuillez entrer un nom de groupe.
                    </div>
                <?php endif; ?>
            </div>

        </form>
        <form method="POST">
            <div class="input-group mb-3">
                <select name="selected-group" class="form-select" aria-label="Groupes existants" disabled>
                    <option selected>Choisir un groupe à supprimer</option>
                </select>
                <button class="btn btn-outline-danger" name="deletegrp" type="submit" disabled>Supprimer le groupe</button>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {        // Traitement du formulaire

            if (isset($_POST['ajouter'])) {
                $groupes = []; // Initialise la variable $groupes
                $groupe = $_POST['groupe'];
                $nouveau_membre = $_POST['nouveau_membre'];

                // Ajout du nouveau membre
                $groupes[$groupe]['membres'][] = ['user' => $nouveau_membre];

                // Enregistrement des modifications
                $nouveau_groupe_json = json_encode($groupes);
                file_put_contents('Data/groupes.json', $nouveau_groupe_json);
            } elseif (isset($_POST['supprimer'])) {
                $nom_groupe = $_POST['nom_groupe'];
                $user = $_POST['user'];
                supprimerMembre($nom_groupe, $user);
            } elseif (isset($_POST['newgrp'])) {
                $groupes_json = file_get_contents('Data/groupes.json');
                $groupes = json_decode($groupes_json, true);
                $newgrp = $_POST['name-newgrp'];
                if (!array_key_exists($newgrp, $groupes)) {
                    $groupes[$newgrp] = array('membres' => array());
                    $nouveau_groupe_json = json_encode($groupes);
                    file_put_contents('Data/groupes.json', $nouveau_groupe_json);
                }
        ?>
                <div class="alert alert-success" role="alert">
                    Le groupe <b><?php echo $_POST['name-newgrp']; ?></b> a été ajouté avec succès.
                </div>
                <?php
            } elseif (isset($_POST['deletegrp'])) {
                if ($_POST['selected-group'] != 'Choisir un groupe à supprimer') {
                    $groupToDelete = $_POST['selected-group'];
                ?>
                    <div class="alert alert-success" role="alert">
                        Le groupe <?php echo $groupToDelete; ?> a été supprimé avec succès.
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-warning" role="alert">
                        Veuillez sélectionner un groupe à supprimer.
                    </div>
        <?php
                }
            }
        }
        ?>

    </div>
    <div class="col-4"></div>
</div>


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
?>
<div class="row">
    <?php                    // Affichage
    foreach ($groupes as $nom_groupe => $groupe) {
    ?>
        <div class="col-sm-4">
            <div class="card mt-5 me-4">
                <div class="card-body">
                    <?php
                    echo "<p class='display-6'>$nom_groupe</p>";
                    echo "<p>Membres actuels :</p>";
                    echo "<ul>";
                    foreach ($groupe['membres'] as $membre) {
                        echo "<hr><li>" . $membre['user'] . " <form method='post'><input type='hidden' name='nom_groupe' value='$nom_groupe'><input type='hidden' name='user' value='" . $membre['user'] . "'><button class='btn btn-outline-danger btn-sm' name='supprimer'>Supprimer</button></form></li>";
                    }
                    ?>
                    </ul>
                    <hr class='ms-4'>

                    <form method='post'>
                        <div class="input-group mb-3">
                            <select class='form-select' name='nouveau_membre'>
                                <option value="">--- Sélectionnez un nouveau membre ---</option>
                                <?php
                                foreach ($utilisateurs as $utilisateur) {
                                    echo "<option value='" . $utilisateur['user'] . "'>" . $utilisateur['prenom'] . " " . $utilisateur['nom'] . "</option>";
                                }
                                ?>
                            </select>
                            <?php
                            echo "<input type='hidden' name='groupe' value='$nom_groupe'>";
                            ?>
                            <button class='btn btn-outline-success' type='submit' name='ajouter' value='Ajouter'>Ajouter</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>