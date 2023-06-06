<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<p class="display-4 text-center">Annuaire</p>
<div class="container-fluid mt-2">
    <div class="bg-light text-dark rounded">
        <?php affiche_annuaire_tablelo(); ?>
    </div>
</div>