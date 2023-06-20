<?php
include("fonctions.php");
setup();
intranet_navbar();
?>
<!-- 
<head>

    <style>
        .img-border {
            border: 5 px solid #000000;
        }
    </style>

</head> -->

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
                                Vous pouvez retrouver sur la page d'acceuil, les évenements a venir dans l'entreprise.
                            </div>
                            <div class="col text-center">
                                <img src="../Data/Images/Screen/avenir.png" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse2" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Carte des emplacements stratégiques
                    </div>
                </a>

                <div id="collapse2" class="collapse show" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Vous pouvez retrouver sur la page d'acceuil, les endroits stratégiques : Futurs évènements, réunion de fin d'année, emplacement de nos bureaux dans le monde...
                            </div>
                            <div class="col text-center">
                                <img src="../Data/Images/Screen/carte.png" width="350px">
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
                                Grâce à la card de droite vous pouvez voir les nouveaux utilisateurs qui souhaite rejoindre l'intranet. Vous pouvez accepter ou refuser la demande grace au deux boutons sur la droite.<br>(Visible uniquement si vous faites partie des <b>RH</b> ou de la <b>Direction </b>)
                            </div>
                            <div class="col">
                                <img src="../Data/Images/Screen/newusr.png" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse4" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Visualisation des commentaires
                    </div>
                </a>

                <div id="collapse4" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Grâce à la deuxième card de droite vous pouvez voir les commentaires ou demandes des utilisateurs qui souhaite joinder. Vous pouvez visualiser la demande complète en cliquant sur l'oeil bleu. Ou bien fermer la demande en cliquant sur le bouton de droite.<br>(Visible uniquement si vous faites partie des <b>RH</b>, de l'<b>IT</b> ou de la <b>Direction</b>)
                            </div>
                            <div class="col text-center">
                                <img src="Images/Screen/Demandes_cli.png" width="350px">
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
                        <div class="row">
                            <div class="col text-center">
                                <p class='mb-2 mt-2'>Sur cette page, il est possible d'ajouter un utilisateur au site. Pour ce faire, remplire ses données dans le formulaire</p>
                                <br> <br>
                                <img class='mt-5' src="../Data/Images/Screen/Newuser.png" width="600px">
                            </div>
                            <div class="col text-center">
                                <img class='mt-2' src="../Data/Images/Screen/Portail.png" width="500px">
                                <p class='mt-5'>On obtient donc notre nouvel utilisateur !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse1113999" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Visualiser les utilisateurs
                    </div>
                </a>
                <div id="collapse1113999" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <p> Il est effectivement possible de visualiser tout ses utilisateurs, ainsi que de les trier par ordre alphabétique ainsi que de faire une recherche pour trouver le bon utilsateur</p>
                            </div>
                            <div class="col text-center">
                                <img src="../Data/Images/Screen/visuusr.png" width="900px">
                            </div>
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
                <div id="collapse111" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Vous pouvez créer et supprimer les groupes d'administration.
                            </div>
                            <div class="col">
                                <img src="../Data/Images/Screen/gp.png" width="600px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse112" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Ajouter des membres à un groupe
                    </div>
                </a>
                <div id="collapse112" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Vous pouvez ajouter des membres aux groupes simplement en sélectionnat dans le dropdown menu, les utilisateurs que vous voulez ajouter.<br> <i>(Uniquement 1 à la fois)</i>
                                <br><br>Il faut ensuite uniquement cliquer sur ajouter, et le membre est ajouté.
                            </div>
                            <div class="col">
                                <img src="../Data/Images/Screen/dropdown.png" width="400px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse113" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Supprimer des membres d'un groupe
                    </div>
                </a>
                <div id="collapse113" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="mt-5 col text-center">
                                Rien de plus simple, il suffit de cliquer sur le bouton supprimer a coté du nom d'utilisateur du membre du groupe, et le personne est suprimée automatiquement.
                            </div>
                            <div class="col">
                                <img src="../Data/Images/Screen/suprrgrp.png" width="400px">
                            </div>
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
                        <div class="row">
                            <div class="col text-center">
                                <p>Pour créer un dossier, rien de plus simple, il suffit de rentrer le nom du dossier que vous voulez créer, et de cliquer sur ajouter, vous pouvez maintenant visualiser votre nouveau dossier.</p>
                            </div>
                            <div class="col text-center">
                                <img src="../Data/Images/Screen/newdir.png" width="400px">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col text-center">
                                <p>Pour supprimer un dossier, il suffit de cliquer sur l'icon supprimer a côté du dossier que vous voulez supprimer.</p>
                            </div>
                            <div class="col text-center">
                                <img src="../Data/Images/Screen/deldir.png" width="400px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse2221" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Uploader un fichier
                    </div>
                </a>

                <div id="collapse2221" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <p>Pour créer un uploader un fichier il suffit de cliquer sur la barre d'upload, et de choisir le fichier que vous souhaitez uploader sur le site.</p>
                                <img src="../Data/Images/Screen/upload.png" width="1000px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-bs-toggle="collapse" href="#collapse3331" style="text-decoration: none;" class="text-dark">
                    <div class="card-header">
                        Actions
                    </div>
                </a>

                <div id="collapse3331" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>Il y a trois actions différentes:
                                <ul>
                                    <li><b>Visualiser :</b> Ce bouton permet de visualiser le fichier dans un nouvel onglet. <i>(Uniquement pour les fichier images, son, video, PDF)</i></li>
                                    <br>
                                    <li><b>Télécharger :</b> Ce bouton permet de télécharger le fichier souhaité en local.</li>
                                    <br>
                                    <li><b>Supprimer :</b> Ce bouton permet de supprimer le fichier souhaité</li>
                                </ul>
                                </p>
                            </div>
                            <div class="col text-center">
                                <img src="../Data/Images/Screen/actions.png" width="300px">
                            </div>
                        </div>
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
                        <a>Sur cette page, il est possible d'ajouter un membre sur l'annuaire. Pour ce faire, appuyer sur Ajouter. Attention, cela a un impact sur le site vitrine</a>
                        <div class="col">
                            <img src="../Data/Images/Screen/annuB.jpg" width="350px">
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
                        <a>Sur cette page, il est possible de modifier les caractéristiques des employés sur l'Annuaire. Pour ce faire, cliquer sur Enregistrer. Il est aussi possible de les supprimer. Attention, cela a un impact sur le site vitrine</a>
                        <div class="col">
                            <img class="img-border" src="../Data/Images/Screen/annuA.jpg" width="350px">
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
                        <a>Sur cette page, il est possible d'ajouter un partenaire au site vitrine. Pour ce faire, cliquer sur ajouter : </a>
                        <div class="col text-center">
                            <img src="../Data/Images/Screen/ajouter.png" width="350px">
                        </div>
                        <a>Cela ouvre un modal permettant d'entrer les informations et de charger sur le serveur le logo du dit partenaire : </a>
                        <div class="col text-center">
                            <img src="../Data/Images/Screen/ajouter2.png" width="350px">
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
                        <a>Notons qu'une fois un partenaire entré, on peut modifier ses informationse ou le supprimer. En appuyant sur modifier voici les paramètres sur lesquels on peut jouer:</a>
                        <div class="col text-center">
                            <img src="../Data/Images/Screen/modif.png" width="500px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </dl>
</div>