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
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title display-5">Connexion</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="login-form">
                                        <form id="connexion" action="page-accueil.php" method="POST" class="was-validated">
                                            <br>
                                            <div class="form-group">
                                                <label for="uname" class="form-label">Utilisateur:</label>
                                                <input type="text" class="form-control" id="user" name="user" placeholder="Utilisateur" required>
                                                <div class="valid-feedback"></div>
                                                <div class="invalid-feedback">Veuillez compléter ce champ</div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe" required>
                                                <div class="valid-feedback"></div>
                                                <div class="invalid-feedback">Veuillez compléter ce champ</div>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-dark">Se connecter</button>
                                </div>
                                </form>
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    connexion_traitement();
                                } else {
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
        <div class="row container-fluid" style="min-height: 100vh">
            <div class="col-sm-1 bg-dark text-center">
                <nav class="navbar bg-dark navbar-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="Portail-de-connexion.php"><img src="Images\Icons\key.png"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gest-fichiers.php"><img src="Images\Icons\folder.png"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="annuaire.php"><img src="Images\Icons\phone.png"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gest-partenaires.php"><img src="Images\Icons\person.png"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="wiki.php"><img src="Images\Icons\book.png"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-11 bg-dark bg-opacity-25">
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
            }
}

function addUser($prenom, $nom, $usr, $mdp, $grp)
{
            $users = file_decod('Data\login-mdp.json');

            $users[$usr] = [
                'prenom' => $prenom,
                'nom' => $nom,
                'user' => $usr,
                'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
                'groupe' => $grp
            ];

            file_put_contents('Data\login-mdp.json', json_encode($users));
}

function afficherUtilisateurs($utilisateurs)
{
    echo '<form method="post">';
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo "<tr><th>Prénom</th><th>Nom</th><th>Nom d'utilisateur</th><th>Nouveau MDP</th><th>Groupe</th><th></th><th></th></tr>";
    foreach ($utilisateurs as $nom => $infos) {
        echo '<tr>';
        echo '<td><input type="text" name="prenom[' . $nom . ']" value="' . $infos['prenom'] . '" class="form-control"></td>';
        echo '<td><input type="text" name="nom[' . $nom . ']" value="' . $infos['nom'] . '" class="form-control"></td>';
        echo '<td><input type="text" name="user[' . $nom . ']" value="' . $infos['user'] . '" class="form-control"></td>';
        echo '<td><input type="password" name="mdp[' . $nom . ']" value="" class="form-control"></td>';
        echo '<td><input type="text" name="groupe[' . $nom . ']" value="' . $infos['groupe'] . '" class="form-control"></td>';
        echo '<td class="text-center"><input type="submit" name="modifier[' . $nom . ']" value="Modifier" class="btn btn-outline-dark"></td>';
        echo '<td class="text-center"><input type="submit" name="supprimer[' . $nom . ']" value="Supprimer" class="btn btn-danger"></td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
    echo '</form>';
}

function gestionUtilisateurs()
{
    $path = 'Data\login-mdp.json';
    $users = file_decod($path);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['modifier'])) {
            $prenom = $_POST['prenom'];
            $nomm = $_POST['nom'];
            $user = $_POST['user'];
            $mdp = $_POST['mdp'];
            $groupe = $_POST['groupe'];
            foreach ($_POST['modifier'] as $nom => $valeur) {
                $users[$nom]['prenom'] = $prenom[$nom];
                $users[$nom]['nom'] = $nomm[$nom];
                $users[$nom]['user'] = $user[$nom];
                $users[$nom]['mdp'] = password_hash($mdp[$nom], PASSWORD_DEFAULT);
                $users[$nom]['groupe'] = $groupe[$nom];
            }
            file_put_contents($path, json_encode($users));
        } elseif (isset($_POST['supprimer'])) {
            foreach ($_POST['supprimer'] as $nom => $valeur) {
                unset($users[$nom]);
            }
            file_put_contents($path, json_encode($users));
        }
    }

    afficherUtilisateurs($users);
}
?>