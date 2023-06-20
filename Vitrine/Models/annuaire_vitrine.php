<?php
include('file_usage.php');
$annuaire = file_decod('../Data/annuaire.json');
?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="row">
            <?php
            foreach ($annuaire as $nom => $infos) {
                $prenom = $infos['prenom'];
                $nom = $infos['nom'];
                $poste = $infos['poste'];
                $user = $infos['user'];
                $description = $infos['description'];
            ?>
                <div class="col-3">
                    <div class="card card-sm mb-4">
                        <img src="../Data/Images/Employés/<?php echo $user ?>.jpg" class="card-img-top" alt="Photo" style="height: 100%;">
                        <div class="card-body">
                            <h6 class="card-title"> <?php echo $prenom . " " . $nom ?></h6>
                            <p class="card-text"><?php echo $poste ?>
                                <hr><?php echo $description ?>
                            </p>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="col-1"></div>
</div>