<?php
include("fonctions.php");
setup();
page_header();
?>

</br>
<div class="container py-1">
<h2 class="text-dark text-center py-1">Partenaires</h2>
<hr>
</div>
<div class="container">
    <div class="row mt-5">
        <?php
        display_partenaires_site_vitrine();
        ?>
    </div>

</div>

<?php
    page_foot();
    ?>