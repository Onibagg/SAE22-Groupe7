<?php
include("fonctions.php");
setup();
page_header();
?>
<div class="container py-4">
    <h2 class="font-weight-light text-center text-muted py-3">Nos partenaires</h2>

    <hr>   

    <div class="row mt-5">
        <?php
        display_partenaires_site_vitrine();
        ?>
    </div>

</div>