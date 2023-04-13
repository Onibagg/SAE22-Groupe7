<?php
session_start();

function setup()
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
        <div class="mt-0 p-4 bg-primary">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Nom de l'entreprise</h1>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4 text-center">
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal">
                            Connexion
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
                                            <form action="page-accueil.php" method="POST">
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
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                                        connexion_traitement();
                                    }
                                    else {

                                    }
                                    ?>
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

function intranet_navbar()
{
?>
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Portail-de-connexion.php">Portail de Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gest-fichiers.php">Gestionnaire de Fichiers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="annuaire.php">Annuaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gest-partenaires.php">Gestion des Partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wiki.php">Wiki</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
}

function file_decod($file)
{
    return json_decode(file_get_contents($file), true);
}

function connexion_traitement()
{
    if (!isset($_POST['user'])) {
        echo 'Utilisateur non renseigné';
        $user = "";
    } else {
        $user = $_POST['user'];
    }
    
    if (!isset($_POST['mdp'])) {
        echo 'Mot de Passe non renseigné';
        $mdp = "";
    } else {
        $mdp = $_POST['mdp'];
    }

    $data = file_decod('Data\login-mdp.json');
    $ok = false;

    foreach ($data as $u) {
        if ($u['user'] == $user && password_verify($mdp, $u['mdp']) == true) {
            $ok = true;
            break;
        }
    }

    if ($ok) {
        $_SESSION["user"] = $user;
        header("Location: Accueil-Intranet.php");
    } else {
        echo "Mot de passe / Utilisateur non reconnu";
    }
}

?>