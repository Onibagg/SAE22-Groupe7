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
                <input type="text" name="name-newgrp" class="form-control" placeholder="Nouveau groupe">
                <button class="btn btn-outline-success" name="newgrp" type="submit">Créer le groupe</button>
            </div>
        </form>
        <form method="POST">
            <div class="input-group mb-3">
                <?php
                $groupes_json = file_get_contents('../Data/groupes.json'); // Récupération des groupes
                $groupes = json_decode($groupes_json, true);
                ?>
                <select name="selected-group" class="form-select" aria-label="Groupes existants">
                    <option selected>Choisir un groupe à supprimer</option>
                    <?php
                    foreach ($groupes as $groupe) {
                        echo '<option value="' . $groupe["nom"] . '">' . $groupe["nom"] . '</option>';
                    }
                    ?>
                </select>
                <button class="btn btn-outline-danger" name="deletegrp" type="submit">Supprimer le groupe</button>
            </div>
        </form>
    </div>
    <div class="col-4"></div>
</div>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {        // Traitement du formulaire
    if (isset($_POST['ajouter'])) {
        $groupe = $_POST['groupe'];
        $nouveau_membre = $_POST['nouveau_membre'];

        // Récupération des groupes existants depuis le fichier JSON
        $groupes_json = file_get_contents('../Data/groupes.json');
        $groupes = json_decode($groupes_json, true);

        // Vérification si le groupe existe
        if (isset($groupes[$groupe])) {
            $membres = $groupes[$groupe]['membres'];
            $membres_existants = array_column($membres, 'user');

            // Vérification si le membre n'existe pas déjà dans le groupe
            if (!in_array($nouveau_membre, $membres_existants)) {
                // Ajout du nouveau membre
                $groupes[$groupe]['membres'][] = ['user' => $nouveau_membre];

                // Enregistrement des modifications dans le fichier JSON
                $nouveau_groupe_json = json_encode($groupes);
                file_put_contents('../Data/groupes.json', $nouveau_groupe_json);
?>
                <div class="alert alert-success" role="alert">
                    <b><?php echo $nouveau_membre; ?></b> a été ajouté au groupe <b><?php echo $groupe; ?></b> avec succès.
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-warning" role="alert">
                    <b><?php echo $nouveau_membre; ?></b> est déjà dans le groupe <b><?php echo $groupe; ?></b>.
                </div>
            <?php
            }
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                Le groupe <?php echo $groupe; ?> n'existe pas. Veuillez choisir un groupe existant.
            </div>
        <?php
        }
    } elseif (isset($_POST['supprimer'])) {
        $nom_groupe = $_POST['nom_groupe'];
        $user = $_POST['user'];
        supprimerMembre($nom_groupe, $user);
    } elseif (isset($_POST['newgrp'])) {
        $newgrp = $_POST['name-newgrp'];
        if (!array_key_exists($newgrp, $groupes)) {
            $groupes[$newgrp] = array(
                'nom' => $newgrp,
                'membres' => array()
            );
            file_put_contents('../Data/groupes.json', json_encode($groupes));
            echo '<meta http-equiv="refresh" content="0">';
        } else {
        }
    } elseif (isset($_POST['deletegrp'])) {
        if ($_POST['selected-group'] != 'Choisir un groupe à supprimer') {
            $groupToDelete = $_POST['selected-group'];
            // Supprimer le groupe du fichier JSON ici
            $groupes_json = file_get_contents('../Data/groupes.json');
            $groupes = json_decode($groupes_json, true);

            // Recherche du groupe à supprimer dans le tableau des groupes
            foreach ($groupes as $key => $groupe) {
                if ($groupe['nom'] === $groupToDelete) {
                    unset($groupes[$key]); // Supprimer le groupe du tableau
                    break;
                }
            }

            // Enregistrer les modifications dans le fichier JSON
            $groupes_json_updated = json_encode($groupes, JSON_PRETTY_PRINT);
            file_put_contents('../Data/groupes.json', $groupes_json_updated);
            echo '<meta http-equiv="refresh" content="0">';
        } else {
        ?>
            <div class="alert alert-warning" role="alert">
                Veuillez sélectionner un groupe à supprimer.
            </div>
<?php
        }
    }
}

$groupes_json = file_get_contents('../Data/groupes.json'); // Recuperation des groupes
$groupes = json_decode($groupes_json, true);

$utilisateurs_json = file_get_contents('../Data/login-mdp.json');  // Recuperation des utilisateurs
$utilisateurs = json_decode($utilisateurs_json, true);
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
    echo "</div>";


    ?>