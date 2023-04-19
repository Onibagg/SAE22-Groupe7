<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<p class="display-4 text-center">Portail de connexion</p>
<br>

<div class="container mt-2">
    <div class="mt-2 p-4 bg-dark text-white rounded">
        <p class="display-6 "><b>Ajouter un utilisateur :</b></p>
    </div>
    <div class="mt-2 p-4 bg-light text-dark rounded">
        <form action="Portail-de-connexion.php" id="new-user" method="POST">
            <div class="row">
                <div class="col">
                    <input class="form-control" placeholder="Prénom" rows="1" id="prenom" name="prenom"></input>
                </div>
                <div class="col">
                    <input class="form-control" placeholder="Nom" rows="1" id="nom" name="nom"></input>
                </div>
                <div class="col">
                    <input class="form-control" placeholder="User" rows="1" id="pseudo" name="pseudo"></input>
                </div>
                <div class="col">
                    <input class="form-control" type="password" placeholder="Mot de Passe" rows="1" id="mdp" name="mdp"></input>
                </div>
                <div class="col">
                    <input class="form-control" type="password" placeholder="Confirmation" rows="1" id="confirmation" name="confirmation"></input>
                </div>
                <div class="col">
                    <select class="form-select form-select" placeholder="Groupe" id="groupe" name="groupe">
                        <option></option>
                        <option>Direction</option>
                        <option>Commerciaux</option>
                        <option>IT</option>
                        <option>R&D</option>
                        .....
                    </select>
                </div>
                <div class="col">
                    <button type="submit" name="new-user" class="btn btn-outline-dark">Ajouter</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['new-user'])) {
            if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['confirmation']) && isset($_POST['groupe'])) {
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $usr = $_POST['pseudo'];
                $mdp = $_POST['mdp'];
                $confirmation = $_POST['confirmation'];
                $grp = $_POST['groupe'];

                if ($mdp !== $confirmation) {
                    echo "<br>Les mots de passe ne correspondent pas.";
                } else {
                    addUser($prenom, $nom, $usr, $mdp, $grp);
                    echo "<br><b>$prenom</b> <b>$nom</b> a été ajouté à l'équipe !";
                }
            }
        } else {
        }
        ?>

    </div>
</div>

<br><br>

<div class="container mt-2">
    <div class="mt-2 p-4 bg-dark text-white rounded">
        <p class="display-6 "><b>Vos utilisateurs :</b></p>
    </div>
    <div class="mt-2 p-4 bg-light text-dark rounded">
        <?php
        gestionUtilisateurs();
        ?>
    </div>
</div>
<br>
<br>