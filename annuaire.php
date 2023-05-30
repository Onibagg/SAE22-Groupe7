<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<p class="display-4 text-center">Annuaire</p>
<div class="container mt-2">
    <div class="p-3 bg-light text-dark rounded">
        <?php affiche_annuaire_tablelo(); ?>
    </div>
</div>