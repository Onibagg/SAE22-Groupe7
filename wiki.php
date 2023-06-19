<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<p class="display-4 text-center">Wiki</p>

<div class="container">
    <dl>
        <dt class="display-6">Accueil de l'Intranet</dt>
        <div id="accordion" class="ms-5 me-5 mb-5 mt-3">
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse1" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Évènements à venir
                    </div>
                </a>

                <div id="collapse1" class="collapse show" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Vous pouvez retrouver sur la page d'acceuil, les évenements a venir dans l'entreprise, ils sont gérés par les RH, mais visibles par tout les colaborateurs.
                            </div>
                            <div class="col">
                                <img src="Images\Screen\a-venir.png" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse2" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Carte des évènements à venir
                    </div>
                </a>

                <div id="collapse2" class="collapse show" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Vous pouvez retrouver sur la page d'acceuil, les évenements a venir dans l'entreprise, ils sont gérés par les RH, mais visibles par tout les colaborateurs.
                            </div>
                            <div class="col">
                                <img src="Images\Screen\acuciels.png" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse3" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Ajout de nouveaux utilisateurs
                    </div>
                </a>

                <div id="collapse3" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Grâce à la card de droite vous pouvez voir les nouveaux utilisateurs qui souhaite rejoindre l'intranet. Vous pouvez visualiser la demande d'ajout complète en cliquant sur l'oeil bleu. Ou bien accepter ou refuser la demande grace au deux boutons sur la droite.<br>(Visible uniquement si vous faites partie des <b>RH</b> ou de la <b>Direction </b>)
                            </div>
                            <div class="col">
                                <img src="Images\Screen\newusers.png" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <dt class="display-6">Portail de Connexion</dt>
        <div id="accordion" class="ms-5 me-5 mb-5 mt-3">
        <div class="card">
                <a data-bs-toggle="collapse" href="#collapse1113" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Ajouter un utilisateur
                    </div>
                </a>
                <div id="collapse1113" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <a>Sur cette page, il est possible d'ajouter un utilisateur au site. Pour ce faire, remplire ses données dans le formulaire</a><div class="col">
                                <img src="Images\Screen\Portail.png" width="350px">
                            </div>
                            <a>On obtient donc notre nouvel utilisateur !</a><div class="col">
                                <img src="Images\Screen\Newuser.png" width="350px">
                            </div>
                    </div>
                </div>
        </div>
        </div>

        <dt class="display-6">Gestion des Groupes</dt>
        <div id="accordion" class="ms-5 me-5 mb-5 mt-3">
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse111" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Créer/Supprimer un groupe
                    </div>
                </a>

                <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Vous pouvez créer et supprimer les groupes d'administration.
                            </div>
                            <div class="col">
                                <img src="Images\Screen\gp.png" width="350px">
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <dt class="display-6">Gestionnaire de Fichiers</dt>
        <div id="accordion" class="ms-5 me-5 mb-5 mt-3">
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse1111" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Créer/Supprimer un dossier
                    </div>
                </a>

                <div id="collapse1111" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse2221" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Visualiser un fichier
                    </div>
                </a>

                <div id="collapse2221" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse3331" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Télécharger un fichier
                    </div>
                </a>

                <div id="collapse3331" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse4441" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Supprimer un fichier
                    </div>
                </a>

                <div id="collapse4441" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
        </div>

        <dt class="display-6">Annuaire</dt>
        <div id="accordion" class="ms-5 me-5 mb-5 mt-3">
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse1112" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Ajout d'un employé sur l'annuaire
                    </div>
                </a>

                <div id="collapse1112" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                        <a>Sur cette page, il est possible d'ajouter un membre sur l'annuaire. Pour ce faire, appuyer sur Ajouter. Attention, cela a un impact sur le site vitrine</a><div class="col">
                                <img src="Images\Screen\annuB.jpg" width="350px">
                            </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse2222" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Modification d'un membre de l'annuaire
                    </div>
                </a>

                <div id="collapse2222" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                        <a>Sur cette page, il est possible de modifier les caractéristiques des employés sur l'Annuaire. Pour ce faire, cliquer sur Enregistrer. Il est aussi possible de les supprimer. Attention, cela a un impact sur le site vitrine</a><div class="col">
                                <img src="Images\Screen\annuA.jpg" width="350px">
                            </div>
                    </div>
            </div>
        </div>
        </div>
        <dt class="display-6">Gestion des Partenaires</dt>
        <div id="accordion" class="ms-5 me-5 mb-5 mt-3">
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse1113" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Ajouter un partenaire
                    </div>
                </a>
                <div id="collapse1113" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <a>Sur cette page, il est possible d'ajouter un partenaire au site vitrine. Pour ce faire, cliquer sur ajouter</a><div class="col">
                                <img src="Images\Screen\ajouter.png" width="350px">
                            </div>
                            <a>Cela ouvre un modal permettant d'entrer les informations et de charger sur le serveur le logo du dit partenaire</a><div class="col">
                                <img src="Images\Screen\ajouter2.png" width="350px">
                            </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse2223" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Modifier un partenaire
                    </div>
                </a>

                <div id="collapse2223" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                    <a>Notons qu'une fois un partenaire entré, on peut modifier ses informationse ou le supprimer. En appuyant sur modifier voici les paramètres sur lesquels on peut jouer</a><div class="col">
                                <img src="Images\Screen\modif.png" width="350px">
                            </div>                    </div>
                </div>
            </div>
       </div>
    </dl>
</div>