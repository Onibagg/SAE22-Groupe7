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
        <?php
        ajout_utilisateur_format();
        ?>
    </div>
</div>

<br><br>

<div class="container-fluid mt-2">
    <div class="mt-2 p-4 bg-dark text-white rounded">
        <p class="display-6 "><b>Vos utilisateurs :</b></p>
    </div>
    <div class="mt-2 p-1 bg-light text-dark rounded">
        <?php
        gestionUtilisateurs();
        ?>
    </div>
</div>
<br>
<br>