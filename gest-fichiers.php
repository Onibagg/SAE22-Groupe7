<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<p class="display-4 text-center">Gestionnaire de Fichier</p>


<div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          $dir = "Data\Gestionnaire-de-fichier\\";
          echo afficherdir();
          ?>
     </div>
</div>

<?php
echo upload();
echo fichiers();
?>