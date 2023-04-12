<?php
session_start();

function page_setup()
{
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="Style\style.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="Images\#">
        <title>#</title>
    </head>

    <body>
    <?php
}

function page_header()
{
    ?>
        <div class="mt-0 p-4 bg-primary bg-opacity-50">
            <div class="row">
                <div class="col-sm-4">
                    <p class="display-6">Nom de</p>
                    <p class="display-6">L'entreprise</p>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4 text-center">
                    <br><br>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal">
                            Se Connecter
                        </button>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title display-5">Connexion</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="login-form">
                                            <form action="pageconnexion_traitement.php" method="POST">
                                                <br>
                                                <div class="form-group">
                                                    <label>Utilisateur</label>
                                                    <input type="text" class="form-control" id="user" name="user" placeholder="Utilisateur">
                                                </div>
                                                <br>

                                                <div class="form-group">
                                                    <label>Mot de passe</label>
                                                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
                                                </div>
                                                <br>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-dark">Se connecter</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    <?php
}

function page_navbar()
{

}

?>