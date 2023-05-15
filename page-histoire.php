<?php
include("fonctions.php");
setup();
page_header();
?>
<style>
  .badge {
    background-color: #9DDEFF;
  }
</style>
<div class="container py-4">
    <h2 class="font-weight-light text-center text-muted py-3">Notre Histoire</h2>


    <!--container-->

    <hr class="my-5">

    <div class="container py-4">

        <!-- timeline item 1 -->
        <div class="row no-gutters">
            <div class="col-sm"> <!--spacer--> </div>
            <!-- timeline item 1 center dot -->
            <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                    <div class="col">&nbsp;</div>
                    <div class="col">&nbsp;</div>
                </div>
                <h5 class="m-2">
                <span class="badge rounded-pill bg- border" style="background-color: #9DDEFF ;">&nbsp;</span>
                </h5>
                <div class="row h-50">
                    <div class="col border-end">&nbsp;</div>
                    <div class="col">&nbsp;</div>
                </div>
            </div>
            <!-- timeline item 1 event content -->
            <div class="col-sm py-2">
                <div class="card shadow" style="border-color: #9DDEFF;">
                    <div class="card-body">
                        <div class="float-end text-muted small">Jan 9th 2012</div>
                        <h4 class="card-title" style="color: #4dc3ff;">Création de notre entreprise.</h4>
                        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-target="#t22_details" data-bs-toggle="collapse">Plus de détails ▼</button>
                        <div class="collapse border" id="t22_details">
                            <div class="p-2 text-justify">
                                <div>David Gatel et François Menguy ont créé PureVPN, une entreprise spécialisée dans les services de réseau privé virtuel (VPN), le 9 janvier 2012. Depuis lors, PureVPN est devenu un acteur majeur du marché des VPN, offrant des solutions de sécurité en ligne à des millions de personnes dans le monde entier. </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 2 -->
    <div class="row no-gutters">
        <div class="col-sm py-2">
            <div class="card shadow" style="border-color: #9DDEFF;">
                <div class="card-body">
                    <div class="float-end text-muted small">2013</div>
                    <h4 class="card-title" style="color: #4dc3ff;" >Lancement de L'offre "Connect +"</h4>
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-target="#t23_details" data-bs-toggle="collapse">Plus de détails ▼</button>
                    <div class="collapse border" id="t23_details">
                        <div class="p-2 text-monospace">
                            <div></div>
                            <div>09:00 - 10:30 Live sessions in CR 3</div>
                            <div>10:30 - 10:45 Break</div>
                            <div>10:45 - 12:00 Live sessions in CR 3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
            <span class="badge rounded-pill bg- border" style="background-color: #9DDEFF ;">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm"> <!--spacer--> </div>
    </div>
    <!--/row-->
    <!-- timeline item 3 -->
    <div class="row no-gutters">
        <div class="col-sm"> <!--spacer--> </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
            <span class="badge rounded-pill bg- border" style="background-color: #9DDEFF ;">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm py-2">
            <div class="card shadow" style="border-color: #9DDEFF;">
                <div class="card-body">
                    <div class="float-end text-muted small">Jan 11th 2021 8:30 AM</div>
                    <h4 class="card-title" style="color: #4dc3ff;">Day 3 Sessions</h4>
                    <p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual
                        bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 4 -->
    <div class="row no-gutters">
        <div class="col-sm py-2">
            <div class="card shadow" style="border-color: #9DDEFF;">
                <div class="card-body">
                    <div class="float-end text-muted small">Jan 12th 2021 11:30 AM</div>
                    <h4 class="card-title" style="color: #4dc3ff;">Day 4 Wrap-up</h4>
                    <p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-end">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
            <span class="badge rounded-pill bg- border" style="background-color: #9DDEFF ;">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm"> <!--spacer--> </div>
    </div>
    <!--/row-->
</div>
</div>

<?php
page_foot();
?>