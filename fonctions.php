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
        <link href="Style\intranet-navbar.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="Images\PrivateVPN_logo.png">
        <title>Private VPN | Le meilleur des VPN</title>
    </head>

    <body>
    <?php
}



function page_header()
{


    ?>
        <div class="mt-0 p-4 bg-light">
            <div class="row">
                <div class="col text-center">
                    <a href="page-accueil.php">
                        <img src="/Images/PrivateVPN.png" width="200" height="110" class="rounded" alt="?"></br></br>
                    </a>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col text-center">
                    <a href="page-pres.php">
                        <button type="button" class="btn btn-outline-primary text-black" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte1').style.fontWeight='bold';" onmouseout="document.getElementById('texte1').style.fontWeight='normal';">
                            <img src="/Images/point-dinterrogation.png" width="40" height="40" class="rounded" alt="?"></br></br>
                            <p id="texte1">Qui sommes-nous ?</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="page-histoire.php">
                        <button type="button" class="btn btn-outline-primary text-black" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte2').style.fontWeight='bold';" onmouseout="document.getElementById('texte2').style.fontWeight='normal';">
                            <img src="/Images/histoire.png" width="40" height="40" class="rounded" alt="Histoire"></br></br>
                            <p id="texte2">Histoire</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="page-activites.php">
                        <button type="button" class="btn btn-outline-primary text-black" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte3').style.fontWeight='bold';" onmouseout="document.getElementById('texte3').style.fontWeight='normal';">
                            <img src="/Images/activites.png" width="40" height="40" class="rounded" alt="Activités"></br></br>
                            <p id="texte3">Activités</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="page-partenaires.php">
                        <button type="button" class="btn btn-outline-primary text-black" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte4').style.fontWeight='bold';" onmouseout="document.getElementById('texte4').style.fontWeight='normal';">
                            <img src="/Images/les-partenaires.png" width="40" height="40" class="rounded" alt="Partenaires"></br></br>
                            <p id="texte4">Partenaires</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <button type="button" class="btn btn-outline-primary text-black" data-bs-toggle="modal" data-bs-target="#myModal" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte5').style.fontWeight='bold';" onmouseout="document.getElementById('texte5').style.fontWeight='normal';">
                        <img src="/Images/login.png" width="40" height="40" class="rounded" alt="Connexion"></br></br>
                        <p id="texte5">Connexion</p>
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
        </div>

    <?php
}




function intranet_navbar()
{
    ?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item me-4 ms-4">
                    <a class="navbar-brand" href="Accueil-Intranet.php">
                        <img src="Images\PrivateVPN_logo.png" alt="Avatar Logo" style="width:45px;" class="rounded-pill">
                    </a>
                </li>
                <li class="nav-item me-4 ms-4">
                    <a class="nav-link" href="Portail-de-connexion.php"><img src="..\Images\Icons\key.png" draggable="false" height="25px"></a>
                </li>
                <li class="nav-item me-4 ms-4">
                    <a class="nav-link" href="gest-fichiers.php"><img src="Images\Icons\folder.png" draggable="false" height="25px"></a>
                </li>

                <li class="nav-item me-4 ms-4">
                    <a class="nav-link" href="annuaire.php"><img src="..\Images\Icons\phone.png" draggable="false" height="25px"></a>
                </li>

                <li class="nav-item me-4 ms-4">
                    <a class="nav-link" href="gest-partenaires.php"><img src="..\Images\Icons\person.png" draggable="false" height="32px"></a>
                </li>

                <li class="nav-item me-4 ms-4">
                    <a class="nav-link" href="wiki.php"><img src="..\Images\Icons\book.png" draggable="false" height="32px"></a>
                </li>
                <li class="nav-item dropdown me-4 ms-4">
                    <a class="nav-link dropdown-toggle" href="monprofil.php" role="button" data-bs-toggle="dropdown"><img src="..\Images\Employés\<?php echo $_SESSION['user']; ?>.jpg" alt="Avatar Logo" style="width:32px;" class="rounded-pill"></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="monprofil.php">Mon Profil</a></li>
                        <li>
                            <form id="deconnexion" method="POST">
                                <button type="submit" name="deconnexion" class="btn ms-1"><img src="Images\Icons\log_out.png" class="image-navbar"></button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <?php
        if (isset($_POST['deconnexion'])) {
            deconnexion();
          }
        ?>
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
        echo '<meta http-equiv="refresh" content="0; url=Accueil-Intranet.php">';
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

    $src = "Images\Employés\blank-profile-picture.jpg";
    $dst = "Images\Employés\\" . $usr . ".jpg";
    copy($src, $dst);

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
                $photo_path = "Images\Employés\\" . $nom . ".jpg";
                if (file_exists($photo_path)) {
                    unlink($photo_path);
                }
            }
            file_put_contents($path, json_encode($users));
        }
    }

    afficherUtilisateurs($users);
}

function deconnexion()
{
    session_unset();
    header("Location: page-accueil.php");
    exit;
}
    ?>