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
        <div class="mt-0 p-4 custom">
            <style>
                .custom {
                    background-color: #DCF3FF;

                }
            </style>
            <div class="row">
                <div class="col text-center">
                    <a href="page-accueil.php">
                        <img src="/Images/PrivateVPN.png" width="210" height="110" class="rounded" alt="?"></br></br>
                    </a>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col text-center">
                    <a href="page-pres.php">
                        <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte1').style.fontWeight='bold';" onmouseout="document.getElementById('texte1').style.fontWeight='normal';">
                            <img src="/Images/point-dinterrogation.png" width="40" height="40" class="rounded" alt="?"></br></br>
                            <p id="texte1">Qui sommes-nous ?</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="page-histoire.php">
                        <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte2').style.fontWeight='bold';" onmouseout="document.getElementById('texte2').style.fontWeight='normal';">
                            <img src="/Images/histoire.png" width="40" height="40" class="rounded" alt="Histoire"></br></br>
                            <p id="texte2">Histoire</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="page-activites.php">
                        <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte3').style.fontWeight='bold';" onmouseout="document.getElementById('texte3').style.fontWeight='normal';">
                            <img src="/Images/activites.png" width="40" height="40" class="rounded" alt="Activités"></br></br>
                            <p id="texte3">Activités</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="page-partenaires.php">
                        <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte4').style.fontWeight='bold';" onmouseout="document.getElementById('texte4').style.fontWeight='normal';">
                            <img src="/Images/les-partenaires.png" width="40" height="40" class="rounded" alt="Partenaires"></br></br>
                            <p id="texte4">Partenaires</p>
                        </button>
                    </a>
                </div>
                <div class="col text-center">
                    <button type="button" class="btn btn-outline-dark text-black custom-btn" data-bs-toggle="modal" data-bs-target="#myModal" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte5').style.fontWeight='bold';" onmouseout="document.getElementById('texte5').style.fontWeight='normal';">
                        <img src="/Images/login.png" width="40" height="40" class="rounded" alt="Connexion"></br></br>
                        <p id="texte5">Connexion</p>
                    </button>
                    <style>
                        .btn:hover {
                            background-color: #9DDEFF;
                            color: #9DDEFF;
                        }

                        .btn {
                            border-color: #9FBDCC;
                        }
                    </style>
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="login-form">
                                    <form id="connexion" action="page-accueil.php" method="POST" class="needs-validation">
                                        <div class="modal-header">
                                            <p class="modal-title display-5">Connexion</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">

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
                                            
                                            <div class="form-group">
                                                <a href="reset-password.php">Mot de passe oublié ?</a>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                Pas de compte? <a href="new-account.php">Faire une demande</a>
                                            </div>
                                            
                                        </div>

                                        <div class="modal-footer">
                                            <div class="form-group">
                                                <button type="submit" name="connexion" class="btn btn-outline-dark">Se connecter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
                                if (isset($_POST['connexion'])) {
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

function page_foot()
{
    ?>
        <p></p>
        <p></p>
        <div class="container-fluid p-5 custom mt-3 text-center">
            <div class="row">


                <div class="col-sm-3  text-black text-center">
                    <p>AIDE & INFORMATIONS</p>
                    <a class="text-dark" href="Mentions_légales.php">Mentions légales</a></br>
                    <a class="text-dark" href="Conditions_de_vente.php">Conditions générales de ventes</a>

                </div>
                <div class="col-sm-3 text-black">
                    <p>CONFIDENTIALITE</p>
                    <a class="text-dark" href="Politique_de_confidentialité.php">Politique de confidentialité</a></br>
                    <a class="text-dark" href="Mes_donnees_personnelles.php">Mes données personnelles</a>
                </div>
                <div class="col-sm-6 text-black">
                    <img src="/Images/PrivateVPN_text.png" width="400" height="70">
                </div>


            </div>
            </br>
            </br>
            <p>© <?php echo (" Année : ");
                    echo date("Y"); ?> - PrivateVPN.fr </p>
        </div>
    <?php

}

function intranet_navbar()
{
    ?>
        <nav class="navbar navbar-expand-sm bg-primary bg-opacity-25 navbar-info sticky-top justify-content-center">
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
function ajout_utilisateur_format()
{
    ?>
        <form action="Portail-de-connexion.php" id="new-user" method="POST">
            <div class="row">
                <div class="col">
                    <input class="form-control" placeholder="Prénom" rows="1" id="prenom" name="prenom"></input>
                </div>
                <div class="col">
                    <input class="form-control" placeholder="Nom" rows="1" id="nom" name="nom"></input>
                </div>
                <div class="col">
                    <input class="form-control" placeholder="User" rows="1" id="pseudo" name="pseudo"></input>
                </div>
                <div class="col">
                    <input class="form-control" type="password" placeholder="Mot de Passe" rows="1" id="mdp" name="mdp"></input>
                </div>
                <div class="col">
                    <input class="form-control" type="password" placeholder="Confirmation" rows="1" id="confirmation" name="confirmation"></input>
                </div>
                <div class="col">
                    <input class="form-control" placeholder="E-Mail" rows="1" id="email" name="email"></input>
                </div>
                <div class="col">
                    <select class="form-select form-select" placeholder="Groupe" id="groupe" name="groupe">
                        <option></option>
                        <option>Direction</option>
                        <option>Commerciaux</option>
                        <option>IT</option>
                        <option>RH</option>
                        <option>Finance</option>
                        <option>Production</option>
                    </select>
                </div>
                <div class="col">
                    <button type="submit" name="new-user" class="btn btn-outline-dark">Ajouter</button>
                </div>
            </div>
        </form>
    <?php
    if (isset($_POST['new-user'])) {
        if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['confirmation']) && isset($_POST['email']) && isset($_POST['groupe'])) {
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $usr = $_POST['pseudo'];
            $mdp = $_POST['mdp'];
            $confirmation = $_POST['confirmation'];
            $email = $_POST['email'];
            $grp = $_POST['groupe'];

            if ($mdp !== $confirmation) {
                echo "<br><div class='alert alert-danger'>Les <b>mots de passe</b> ne correspondent pas.</div>";
            } elseif (empty($prenom) || empty($nom) || empty($usr) || empty($mdp) || empty($confirmation) || empty($email) || empty($grp)) {
                echo "<br><div class='alert alert-warning'><b>Tous</b> les champs sont obligatoires.</div>";
            } else {
                addUser($prenom, $nom, $usr, $mdp, $email, $grp);
                echo "<br><div class='alert alert-success'><b>$prenom</b> <b>$nom</b> a été ajouté à l'équipe !</div>";
            }
        }
    } else {
    }
}
function addUser($prenom, $nom, $usr, $mdp, $email, $grp)
{
    $users = file_decod('Data\login-mdp.json');

    $users[$usr] = [
        'prenom' => $prenom,
        'nom' => $nom,
        'user' => $usr,
        'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
        'email' => $email,
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
    echo "<tr><th>Prénom</th><th>Nom</th><th>Nom d'utilisateur</th><th>Nouveau MDP</th><th>E-Mail</th><th>Groupe</th><th></th><th></th></tr>";
    foreach ($utilisateurs as $nom => $infos) {
        echo '<tr>';
        echo '<td><input type="text" name="prenom[' . $nom . ']" value="' . $infos['prenom'] . '" class="form-control"></td>';
        echo '<td><input type="text" name="nom[' . $nom . ']" value="' . $infos['nom'] . '" class="form-control"></td>';
        echo '<td><input type="text" name="user[' . $nom . ']" value="' . $infos['user'] . '" class="form-control"></td>';
        echo '<td><input type="text" name="mdp[' . $nom . ']" value="" class="form-control"></td>';
        echo '<td><input type="text" name="email[' . $nom . ']" value="' . $infos['email'] . '" class="form-control"></td>';
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
            $email = $_POST['email'];
            $groupe = $_POST['groupe'];
            foreach ($_POST['modifier'] as $nom => $valeur) {
                $users[$nom]['prenom'] = $prenom[$nom];
                $users[$nom]['nom'] = $nomm[$nom];
                $users[$nom]['mdp'] = password_hash($mdp[$nom], PASSWORD_DEFAULT);
                $users[$nom]['email'] = $email[$nom];
                $users[$nom]['groupe'] = $groupe[$nom];
                if ($users[$nom]['user'] !== $user[$nom]) {
                    $old_photo_path = "Images\Employés\\" . $users[$nom]['user'] . ".jpg";
                    $new_photo_path = "Images\Employés\\" . $user[$nom] . ".jpg";
                    if (file_exists($old_photo_path)) {
                        rename($old_photo_path, $new_photo_path);
                    }
                }
                $users[$nom]['user'] = $user[$nom];
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

function countdown($countdown_date)
{
    $countdown_seconds = strtotime($countdown_date) - time();
    $countdown_days = floor($countdown_seconds / (60 * 60 * 24));
    $countdown_hours = floor(($countdown_seconds - ($countdown_days * 60 * 60 * 24)) / (60 * 60));
    $countdown_minutes = floor(($countdown_seconds - ($countdown_days * 60 * 60 * 24) - ($countdown_hours * 60 * 60)) / 60);

    return $countdown_days . " J " . $countdown_hours . " H " . $countdown_minutes . " M ";
}

    ?>