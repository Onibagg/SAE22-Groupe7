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
        <link href="Style\page-histoire-style.css" type="text/css" rel="stylesheet">
        <link href="Style\intranet-navbar.css" type="text/css" rel="stylesheet">
        <link href="Style\page-activite-style.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="Images\PrivateVPN_logo.png">
        <title>Private VPN | Le meilleur des VPN</title>
        <style>
            .custom {
                background-color: #DCF3FF;
            }

            html,
            body {
                overflow-x: hidden;
            }
        </style>
    </head>

    <body>
    <?php
}

function page_header()
{
    ?>
        <div class="mt-0 p-4 custom">
            <div class="row">
                <div class="col text-center">
                    <a href="page-accueil.php">
                        <img src="Images/Logo_complet.png" height="115" class="rounded" alt="?"></br></br>
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
                <div class="col-sm-6">
                    <img src="Images\Screen_475-removebg.png" width="400" height="60">
                </div>


            </div>
            </br>
            </br>
            <p>© <?php echo (" Année : ");
                    echo date("Y"); ?> - PrivateVPN.fr </p>
        </div>
    <?php

}

function danslegroup($nomdugroup)
{
    if (isset($_SESSION['user_groups']) && is_array($_SESSION['user_groups'])) {
        return in_array($nomdugroup, $_SESSION['user_groups']);
    }
    return false;
}


function intranet_navbar()
{
    $user = $_SESSION['user'];

    // Charger les données des groupes à partir du fichier JSON
    $data = file_get_contents('Data\groupes.json');
    $groupes = json_decode($data, true);

    // Vérifier si l'utilisateur fait partie du groupe IT ou Direction
    $isIT = false;
    $isDirection = false;
    $isCommerciaux = false;
    $isFinances = false;
    $isProduction = false;
    $isRH = false;

    foreach ($groupes['IT']['membres'] as $membre) {
        if ($membre['user'] === $user) {
            $isIT = true;
            break;
        }
    }

    foreach ($groupes['Direction']['membres'] as $membre) {
        if ($membre['user'] === $user) {
            $isDirection = true;
            break;
        }
    }

    foreach ($groupes['Commerciaux']['membres'] as $membre) {
        if ($membre['user'] === $user) {
            $isCommerciaux = true;
            break;
        }
    }

    foreach ($groupes['Finances']['membres'] as $membre) {
        if ($membre['user'] === $user) {
            $isFinances = true;
            break;
        }
    }

    foreach ($groupes['Production']['membres'] as $membre) {
        if ($membre['user'] === $user) {
            $isProduction = true;
            break;
        }
    }

    foreach ($groupes['RH']['membres'] as $membre) {
        if ($membre['user'] === $user) {
            $isRH = true;
            break;
        }
    }
    ?>
        <nav class="navbar navbar-expand-sm bg-primary bg-opacity-25 navbar-info sticky-top justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item me-4 ms-4">
                    <a class="navbar-brand" href="Accueil-Intranet.php">
                        <img src="Images\PrivateVPN_logo.png" alt="Avatar Logo" style="width:45px;" class="rounded-pill">
                    </a>
                </li>

                <?php if ($isIT || $isDirection) { ?>
                    <li class="nav-item me-4 ms-4">
                        <a class="nav-link" href="Portail-de-connexion.php"><img src="..\Images\Icons\key.png" draggable="false" height="28px"></a>
                    </li>
                <?php } ?>

                <?php if ($isRH || $isDirection) { ?>
                    <li class="nav-item me-4 ms-4">
                        <a class="nav-link" href="Gestion-des-groupes.php"><img src="..\Images\Icons\groups.png" draggable="false" height="32px"></a>
                    </li>
                <?php } ?>

                <li class="nav-item me-4 ms-4">
                    <a class="nav-link" href="gest-fichiers.php"><img src="Images\Icons\folder.png" draggable="false" height="32px"></a>
                </li>

                <li class="nav-item me-4 ms-4">
                    <a class="nav-link" href="annuaire.php"><img src="..\Images\Icons\phone.png" draggable="false" height="32px"></a>
                </li>

                <?php if ($isFinances || $isDirection || $isCommerciaux) { ?>
                    <li class="nav-item me-4 ms-4">
                        <a class="nav-link" href="gest-partenaires.php"><img src="..\Images\Icons\person.png" draggable="false" height="35px"></a>
                    </li>
                <?php } ?>

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
    $contents = file_get_contents($file);
    $data = json_decode($contents, true);

    if ($data === null) {
        // Gestion de l'erreur de décodage JSON
        throw new Exception('Erreur de décodage JSON : ' . json_last_error_msg());
    }

    return $data;
}

function file_encod($file)
{
    return file_put_contents(json_encode(file_decod($file)), $file);
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
                    <input class="form-control" placeholder="Poste" rows="1" id="poste" name="poste"></input>
                </div>
                <div class="col">
                    <button type="submit" name="new-user" class="btn btn-outline-dark">Ajouter</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['new-user'])) {
            if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['confirmation']) && isset($_POST['email']) && isset($_POST['poste'])) {
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $usr = $_POST['pseudo'];
                $mdp = $_POST['mdp'];
                $confirmation = $_POST['confirmation'];
                $email = $_POST['email'];
                $poste = $_POST['poste'];

                if ($mdp !== $confirmation) {
                    echo "<br><div class='alert alert-danger'>Les <b>mots de passe</b> ne correspondent pas.</div>";
                } elseif (empty($prenom) || empty($nom) || empty($usr) || empty($mdp) || empty($confirmation) || empty($email) || empty($poste)) {
                    echo "<br><div class='alert alert-warning'><b>Tous</b> les champs sont obligatoires.</div>";
                } else {
                    addUser($prenom, $nom, $usr, $mdp, $email, $poste);
                    echo "<br><div class='alert alert-success'><b>$prenom</b> <b>$nom</b> a été ajouté à l'équipe !</div>";
                }
            }
        } else {
        }
    }

    function addUser($prenom, $nom, $usr, $mdp, $email, $poste)
    {
        $users = file_decod('Data\login-mdp.json');

        $users[$usr] = [
            'prenom' => $prenom,
            'nom' => $nom,
            'user' => $usr,
            'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
            'email' => $email,
            'poste' => $poste,
            'description' => null
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
        echo "
        <tr>
        <th>Prénom 
        <button type='submit' name='tri' value='prenom_asc' class='btn btn-link'><i class='fas fa-sort-up'></i><img src='Images/Icons/uparrow.png'></button>
        <button type='submit' name='tri' value='prenom_desc' class='btn btn-link'><i class='fas fa-sort-down'></i><img src='Images/Icons/downarrow.png'></button>
        </th>
        <th>Nom 
        <button type='submit' name='tri' value='nom_asc' class='btn btn-link'><i class='fas fa-sort-up'></i><img src='Images/Icons/uparrow.png'></button>
        <button type='submit' name='tri' value='nom_desc' class='btn btn-link'><i class='fas fa-sort-down'></i><img src='Images/Icons/downarrow.png'></button>
        </th>
        <th>Nom d'utilisateur 
        <button type='submit' name='tri' value='user_asc' class='btn btn-link'><i class='fas fa-sort-up'></i><img src='Images/Icons/uparrow.png'></button>
        <button type='submit' name='tri' value='user_desc' class='btn btn-link'><i class='fas fa-sort-down'></i><img src='Images/Icons/downarrow.png'></button>
        </th>
        <th>Nouveau MDP</th>
        <th>E-Mail <button type='submit' name='tri' value='email_asc' class='btn btn-link'><i class='fas fa-sort-up'></i><img src='Images/Icons/uparrow.png'></button>
        <button type='submit' name='tri' value='email_desc' class='btn btn-link'><i class='fas fa-sort-down'></i><img src='Images/Icons/downarrow.png'></button>
        </th><th>Actions</th>
        <th></th>
        </tr>
        ";

        // Vérifier si le tri est demandé
        $tri = isset($_POST['tri']) ? $_POST['tri'] : '';

        // Fonction de tri
        $sortFunction = function ($a, $b) use ($tri) {
            if ($tri === 'prenom_asc') {
                return $a['prenom'] <=> $b['prenom'];
            } elseif ($tri === 'prenom_desc') {
                return $b['prenom'] <=> $a['prenom'];
            } elseif ($tri === 'nom_asc') {
                return $a['nom'] <=> $b['nom'];
            } elseif ($tri === 'nom_desc') {
                return $b['nom'] <=> $a['nom'];
            } elseif ($tri === 'user_asc') {
                return $a['user'] <=> $b['user'];
            } elseif ($tri === 'user_desc') {
                return $b['user'] <=> $a['user'];
            } elseif ($tri === 'email_asc') {
                return $a['email'] <=> $b['email'];
            } elseif ($tri === 'email_desc') {
                return $b['email'] <=> $a['email'];
            } else {
                // Pas de tri, garder l'ordre initial
                return 0;
            }
        };

        // Appliquer le tri
        if ($tri !== '') {
            uasort($utilisateurs, $sortFunction);
        }

        foreach ($utilisateurs as $nom => $infos) {
            echo '<tr>';
            echo '<td><input type="text" name="prenom[' . $nom . ']" value="' . $infos['prenom'] . '" class="form-control"></td>';
            echo '<td><input type="text" name="nom[' . $nom . ']" value="' . $infos['nom'] . '" class="form-control"></td>';
            echo '<td><input type="text" name="user[' . $nom . ']" value="' . $infos['user'] . '" class="form-control"></td>';
            echo '<td><input type="text" name="mdp[' . $nom . ']" value="" class="form-control"></td>';
            echo '<td><input type="text" name="email[' . $nom . ']" value="' . $infos['email'] . '" class="form-control"></td>';
            echo '<td class="text-center"><input type="submit" name="modifier[' . $nom . ']" value="Enregistrer" class="btn btn-outline-success"></td>';
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
                foreach ($_POST['modifier'] as $nom => $valeur) {
                    $users[$nom]['prenom'] = $prenom[$nom];
                    $users[$nom]['nom'] = $nomm[$nom];
                    $users[$nom]['mdp'] = password_hash($mdp[$nom], PASSWORD_DEFAULT);
                    $users[$nom]['email'] = $email[$nom];
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

    function afficher($utilisateurs)
    {
        echo '<form method="post">';
        echo '<div class="table-responsive">';
        echo '<table class="table table-hover">';
        echo "<tr><th></th><th>Prénom</th><th>Nom</th><th></th></tr>";
        foreach ($utilisateurs as $nom => $infos) {
            echo '<tr>';
            echo '<td class="text-center"><input type="image" src="Images\Icons\eye.png" width="50" name="voir[' . $nom . ']" value="Voir" class="btn btn-outline-primary" disabled></td>';
            echo '<td><input type="text" name="prenom[' . $nom . ']" value="' . $infos['prenom'] . '" class="form-control"></td>';
            echo '<td><input type="text" name="nom[' . $nom . ']" value="' . $infos['nom'] . '" class="form-control"></td>';
            echo '<td class="text-center"><input type="image" src="Images\Icons\correct.png" width="50" name="accepter[' . $nom . ']" value="Accepter" class="btn btn-success"></td>';
            echo '<td class="text-center"><input type="image" src="Images\Icons\cross.png" width="50" name="refuser[' . $nom . ']" value="Refuser" class="btn btn-danger"></td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
        echo '</form>';
    }

    function gestion_new_users()
    {
        $demande_compte = 'Data\demande-compte.json';
        $login_mdp = 'Data\login-mdp.json';

        $users = file_get_contents($demande_compte);
        $users = json_decode($users, true);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['accepter'])) {
                foreach ($_POST['accepter'] as $nom => $valeur) {
                    $user_accepte = $users[$nom]; //récuparation des infos
                    $nouvel_utilisateur = array( //création d'un array avec les infos 
                        'prenom' => $user_accepte['prenom'],
                        'nom' => $user_accepte['nom'],
                        'user' => $user_accepte['user'],
                        'mdp' => $user_accepte['mdp'],
                        'email' => $user_accepte['email'],
                        'groupe' => '',
                    );
                    $login_mdp_contenu = file_get_contents($login_mdp); //récupère le fichier des vrai users
                    $login_mdp_contenu = json_decode($login_mdp_contenu, true); //converti en tableau
                    $login_mdp_contenu[$user_accepte['user']] = $nouvel_utilisateur; //ajout du new
                    file_put_contents($login_mdp, json_encode($login_mdp_contenu)); //màj du fichier des vrai users
                    unset($users[$nom]); //suppréssion du new du fichier des demandes
                }
                file_put_contents($demande_compte, json_encode($users));
            } elseif (isset($_POST['refuser'])) {
                foreach ($_POST['refuser'] as $nom => $valeur) {
                    unset($users[$nom]); //vire le new des demande
                    $photo_path = "Images\Employés\\" . $nom . ".jpg";
                    if (file_exists($photo_path)) {
                        unlink($photo_path); //suppr la photo si il en a une
                    }
                }
                file_put_contents($demande_compte, json_encode($users)); //màj du fichier des demandes
            }
        }

        afficher($users);
    }

    function supprimerMembre($nom_groupe, $user)
    {
        $groupes_json = file_get_contents('Data\groupes.json');  // Recuperation des groupes
        $groupes = json_decode($groupes_json, true);

        $yessir = null;                                          // Suppression du membre
        foreach ($groupes[$nom_groupe]['membres'] as $i => $membre) {
            if ($membre['user'] === $user) {
                $yessir = $i;
                break;
            }
        }
        if ($yessir !== null) {
            array_splice($groupes[$nom_groupe]['membres'], $yessir, 1);
        }

        file_put_contents('Data\groupes.json', json_encode($groupes));    // Enregistrement des modifs
        echo '<meta http-equiv="refresh" content="0">';

        exit;
    }

    function afficherdir($dir)
    {
        if (isset($_GET['dir'])) {
            $dir .= $_GET['dir'] . '\\';
        }
        if ($dir !== "Data\Gestionnaire-de-fichier\\") {
            $parent_dir = dirname($dir);
        ?>
            <div class='col'>
                <a href='gest-fichiers.php' class='text-dark' style='text-decoration: none;'>
                    <div class='card shadow-sm'>
                        <div class='card-body'>
                            <p class='card-title'>
                                <img src='Images\Icons\\return.png' height='25px'>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php

        }


        if ($fichier = opendir($dir)) {
            while (false !== ($entry = readdir($fichier))) {
                if ($entry != "." && $entry != "..") {
                    if (is_dir($dir . $entry)) {
            ?>
                        <div class='col'>
                            <form action='gest-fichiers.php' method='post' name='folder_name'>
                                <a href='?dir=<?php echo $entry; ?>' class='text-dark' style='text-decoration: none;'>
                                    <div class='card shadow-sm'>
                                        <div class='card-body'>
                                            <h5>
                                                <img src='Images\Icons\\folder.png' height='25px'> <?php echo $entry; ?>
                                                <button type='submit' name='delete_folder' class='float-end btn btn-danger btn-sm'>
                                                    <img src='Images\Icons\\delete.png' height='25px'>
                                                    <input type='hidden' name='folder_name_to_delete' value="<?php echo $entry; ?>">
                                                </button>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </form>
                        </div>
        <?php
                    } else {
                    }
                }
            }
            closedir($fichier);
        }
        ?>
        </div>
        <div class='row mt-5'>
            <div class="col">
            </div>
            <div class="col text-center">
                <div class='card shadow-sm'>
                    <div class='card-body'>
                        <h5 class='card-title'>Nouveau dossier</h5>
                        <form action='' method='post'>
                            <div class='form-group'>
                                <input type='text' class='form-control' name='new_folder_name' placeholder='Nom du dossier'>
                            </div>
                            <button type='submit' class=' mt-2 btn btn-outline-dark'>Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $max_folder_name_length = 20;
            if (isset($_POST['new_folder_name'])) {
                $new_folder_name = $_POST['new_folder_name'];
                if (preg_match('/^[a-zA-Z0-9\s]+$/', $new_folder_name)) {                 // Vérification des caractères autorisés
                    if (strlen($new_folder_name) <= $max_folder_name_length) {                    // Vérification de la longueur du nom du dossier
                        $new_folder_path = $dir . $new_folder_name;
                        if (!file_exists($new_folder_path)) {
                            mkdir($new_folder_path, 0777);
                            echo '<meta http-equiv="refresh" content="0">';
                        } else {
                            echo "<div class='alert alert-danger mt-3 ms-5 me-5'>Le dossier <strong>$new_folder_name</strong> existe déjà.</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger mt-3 ms-5 me-5'>Le nom du dossier est trop long. ($max_folder_name_length caractères max)</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger mt-3 ms-5 me-5'>Le nom du dossier contient des caractères non autorisés.</div>";
                }
            }

            if (isset($_POST['delete_folder'])) {
                $folder_name = $_POST['folder_name_to_delete'];
                $dire = $dir . $folder_name;
                rmdir($dire);
                echo '<meta http-equiv="refresh" content="0">';
            }
        }
        echo upload($dir);
        echo fichiers($dir);
    }

    function upload($dir)
    {
        ?>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                            <button type="submit" class="btn btn-outline-primary" name="uploadBtn">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <?php
        if (isset($_POST["uploadBtn"])) {
            $target_dir = $dir;
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if (file_exists($target_file)) {
                echo "<div class='alert alert-danger'>Désolé, ce fichier existe déjà.</div>";
                $uploadOk = 0;
            } elseif ($_FILES["fileToUpload"]["size"] > 500000000) {
                echo "<div class='alert alert-danger'>Désolé, votre fichier est trop volumineux. (Max 500 Mo)</div>";
                $uploadOk = 0;
            } elseif ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "xls" && $imageFileType != "xlsx" && $imageFileType != "html" && $imageFileType != "css" && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "mp3" && $imageFileType != "mp4" && $imageFileType != "zip" && $imageFileType != "txt") {
                echo "<div class='alert alert-danger'>Désolé, seuls les fichiers de type JPG, JPEG, PNG, GIF, PDF, DOC, DOCX, XLS, XLSX, HTML, CSS, PPT, PPTX, MP3, MP4, ZIP et TXT sont autorisés.</div>";
                $uploadOk = 0;
            } elseif ($uploadOk == 0) {
                echo "<div class='alert alert-danger'>Désolé, votre fichier n'a pas été téléchargé.</div>";
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "<div class='alert alert-success'>Le fichier " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a été téléchargé avec succès.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Désolé, une erreur s'est produite lors du téléchargement de votre fichier.</div>";
                }
            }
        }
    }

    function format_size($size)
    {
        $units = array('o', 'Ko', 'Mo', 'Go', 'To');
        $i = 0;
        while ($size >= 1024) {
            $size /= 1024;
            $i++;
        }
        return round($size, 2) . ' ' . $units[$i];
    }
    function fichiers($dir)
    {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-responsive">
                        <thead class="table-primary">
                            <tr>
                                <th>Nom du fichier</th>
                                <th>Taille</th>
                                <th>Date de modification</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($fichier = opendir($dir)) {
                                while (false !== ($entry = readdir($fichier))) {
                                    if (!is_dir($dir . $entry)) {
                                        $filesize = filesize($dir . $entry);
                                        $filemtime = date("d/m/Y H:i:s", filemtime($dir . $entry));
                                        $ext = pathinfo($entry, PATHINFO_EXTENSION);
                                        switch ($ext) {
                                            case "pdf":
                                                $img_src = "Images\Icons\\file\pdf.png";
                                                break;
                                            case "doc":
                                            case "docx":
                                                $img_src = "Images\Icons\\file\docx.png";
                                                break;
                                            case "xls":
                                            case "xlsx":
                                                $img_src = "Images\Icons\\file\xlsx.png";
                                                break;
                                            case "html":
                                                $img_src = "Images\Icons\\file\html.png";
                                                break;
                                            case "css":
                                                $img_src = "Images\Icons\\file\css.png";
                                                break;
                                            case "ppt":
                                            case "pptx":
                                                $img_src = "Images\Icons\\file\pptx.png";
                                                break;
                                            case "mp3":
                                                $img_src = "Images\Icons\\file\mp3.png";
                                                break;
                                            case "mp4":
                                                $img_src = "Images\Icons\\file\mp4.png";
                                                break;
                                            case "jpg":
                                            case "jpeg":
                                            case "gif":
                                            case "png":
                                                $img_src = "Images\Icons\\file\png.png";
                                                break;
                                            case "zip":
                                                $img_src = "Images\Icons\\file\zip.png";
                                                break;
                                            default:
                                                $img_src = "Images\Icons\\file\default.png";
                                        }
                                        echo "<tr>";
                                        echo "<td><img src='$img_src' height='25px'> $entry</td>";
                                        echo "<td>" . format_size($filesize) . "</td>";
                                        echo "<td>$filemtime</td>";
                            ?>
                                        <td>
                                            <?php
                                            $type_ok = array('pdf', 'mp3', 'mp4', 'png', 'txt', 'jpg', 'jpeg');
                                            if (in_array($ext, $type_ok)) {
                                            ?>
                                                <form method="post">
                                                    <a href="<?php echo $dir . $entry ?>" target="_blank" class="btn btn-sm btn-outline-primary">
                                                        <img src="Images\Icons\eye.png" height="25px">
                                                    </a>
                                                <?php
                                            } else {
                                                ?>
                                                    <a href="<?php echo $dir . $entry ?>" target="_blank" class="btn btn-sm btn-outline-secondary disabled">
                                                        <img src="Images\Icons\eye-cross.png" height="25px">
                                                    </a>
                                                <?php
                                            }
                                                ?>
                                                <a href='<?php echo "$dir$entry" ?>' download class='btn btn-sm btn-outline-success me-0'>
                                                    <img src='Images\Icons\download.png' height='25px'>
                                                </a>

                                                <input type="hidden" name="file_name" value="<?php echo $entry ?>">
                                                <button type="submit" class="ms-0 btn btn-sm btn-outline-danger" name="delete_file">
                                                    <img src="Images\Icons\delete.png" height="25px">
                                                </button>
                                                </form>


                                        </td>

                                        </tr>
                            <?php
                                        if (isset($_POST['delete_file'])) {
                                            $file_name = $_POST['file_name'];
                                            $file_path = $dir . $file_name;
                                            if (file_exists($file_path) && !is_dir($file_path)) {
                                                unlink($file_path);
                                                echo '<meta http-equiv="refresh" content="0">';
                                                exit();
                                            }
                                        }
                                    }
                                }
                                closedir($fichier);
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
    }

    function gestion_partenaires()
    {
        if (isset($_POST['ajouter'])) {
            $nom = $_POST['new_partenaire_name'];
            $description = $_POST['new_partenaire_description'];
            $img = $nom . '_logo.jpg';

            if (isset($_FILES['photopart']) && $_FILES['photopart']['error'] === 0) {
                $targetDir = 'Images/Partenaires/';
                $targetFile = $targetDir . $nom . '_logo.jpg';

                if (file_exists($targetFile)) {
                    unlink($targetFile);
                }

                $tmpFile = $_FILES['photopart']['tmp_name'];
                $newFile = $targetDir . $nom . '_logo.jpg';
                move_uploaded_file($tmpFile, $newFile);
            }

            if (!partenaire_exists($nom)) {
                addPartenaire($nom, $description, $img);
                echo "<br><div class='alert alert-success'>Le partenaire a été ajouté avec succès.</div>";
                echo '<meta http-equiv="refresh" content="0">';
                exit();
            } else {
                echo "<br><div class='alert alert-danger'>Le partenaire existe déjà.</div>";
            }
        } elseif (isset($_POST['supprimer'])) {
            $nom = $_POST['supprimer'];

            if (partenaire_exists($nom)) {
                delPartenaire($nom);
                echo "<br><div class='alert alert-success'>Le partenaire a été supprimé avec succès.</div>";
            } else {
                echo "<br><div class='alert alert-danger'>Le partenaire n'existe pas.</div>";
            }
        } else {
        ?>
            </div>
            <div class='row mt-5'>
                <div class="col">
                </div>
                <div class="col text-center">
                    <div class='card shadow-sm'>
                        <div class='card-body'>
                            <h5 class='card-title'>Nouveau Partenaire</h5>

                            <form action='' method='post'>
                                <div class='form-group'>
                                    <p>Ajouter ou supprimer un partenaire du site web</p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type='button' class='mt-2 btn btn-success' data-bs-toggle="modal" data-bs-target="#addModal">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>

            <!-- Add Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Ajouter un partenaire</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method='post' enctype='multipart/form-data'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' name='new_partenaire_name' placeholder='Nom du partenaire' required><br>
                                    <textarea class="form-control" rows="4" name='new_partenaire_description' placeholder='Description du partenaire' required></textarea><br>
                                    <input type="file" class="form-control" id="photopart" name="photopart"><br>
                                </div>
                                <button type='submit' class='mt-2 btn btn-success' name="ajouter">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    }

    function partenaire_exists($nom)
    {
        $partenaires = json_decode(file_get_contents("Data/ListePartenaire.json"), true);
        return isset($partenaires[$nom]);
    }

    function addPartenaire($nom, $description, $img)
    {
        $partenaires = json_decode(file_get_contents("Data/ListePartenaire.json"), true);
        $partenaires[$nom] = array(
            "description" => $description,
            "partenaire_logo" => $img
        );
        file_put_contents("Data/ListePartenaire.json", json_encode($partenaires));
    }

    function delPartenaire($nom)
    {
        $json_file = 'Data/ListePartenaire.json';
        $partenaires = json_decode(file_get_contents($json_file), true);

        if (isset($partenaires[$nom])) {
            $image = $partenaires[$nom]['partenaire_logo'];
            $image_path = 'Images/Partenaires/' . $image;

            if (file_exists($image_path)) {
                unlink($image_path); // Delete the image file
            }

            unset($partenaires[$nom]);
            file_put_contents($json_file, json_encode($partenaires));
            echo '<meta http-equiv="refresh" content="0">';
            exit();
        }
    }


    function display_partenaires()
    {
        $json_file = 'Data/ListePartenaire.json';
        $partenaires = json_decode(file_get_contents($json_file), true);

        echo "<div class='row'>"; // Start row

        foreach ($partenaires as $nom => $partenaire) {
            $description = $partenaire['description'];
            $image = $partenaire['partenaire_logo'];

            echo "
              <div class='col-md-4'>
                  <div class='card mb-4'>
                      <img src='/Images/Partenaires/$image' class='card-img-top' alt='$nom' style='height: 200px; object-fit: contain;'>
                      <div class='card-body'>
                          <h5 class='card-title'>$nom</h5>
                          <p class='card-text'>$description</p>
                          <form method='post'>
                              <input type='hidden' name='supprimer' value='$nom'>
                              <button type='submit' class='btn btn-danger'>Supprimer</button>
                          </form>
                      </div>
                  </div>
              </div>";
        }

        echo "</div>"; // End row

        if (isset($_POST['supprimer'])) {
            $nom = $_POST['supprimer'];
            delPartenaire($nom);
        }
    }

    function gestion_annuaire()
    {
        $jsonData = file_get_contents('Data/login-mdp.json');
        $users = json_decode($jsonData, true);
        $annuaireData = file_get_contents('Data/annuaire.json');
        $annuaire = json_decode($annuaireData, true);

        // // Tri des utilisateurs par nom
        // if (isset($_GET['sort']) && $_GET['sort'] === 'asc') {
        //     usort($users, function ($a, $b) {
        //         return strcmp($a['nom'], $b['nom']);
        //     });
        // } elseif (isset($_GET['sort']) && $_GET['sort'] === 'desc') {
        //     usort($users, function ($a, $b) {
        //         return strcmp($b['nom'], $a['nom']);
        //     });
        // }

        // Affichage de la table des utilisateurs
        ?>
        <!-- <style>
            .sort-link {
                color: inherit;
                text-decoration: none;
            }
        </style> -->
        <?php if (!empty($users)) : ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="9%">
                            Nom
                            <!-- <a class="sort-link" href="?sort=asc">Nom ↑</a> / <a class="sort-link" href="?sort=desc">Nom ↓</a> -->
                        </th>
                        <th width="9%">Prénom</th>
                        <th width="13%">Poste</th>
                        <th width=7%">User</th>
                        <th width="50%">Description</th>
                        <th width="12%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $username => $user) : ?>
                        <tr>
                            <form method="post">
                                <td><input class="form-control" type="text" name="nom" value="<?php echo $user['nom']; ?>"></td>
                                <td><input class="form-control" type="text" name="prenom" value="<?php echo $user['prenom']; ?>"></td>
                                <td><input class="form-control" type="text" name="poste" value="<?php echo $user['poste']; ?>"></td>
                                <td><?php echo $user['user']; ?></td>
                                <td><textarea class="form-control" rows="3" name="description"><?php echo $user['description']; ?></textarea></td>
                                <td>
                                    <?php if (isset($annuaire[$username])) : ?>
                                        <div class="input-group">
                                            <button type="submit" name="copier" value="<?php echo $username; ?>" class="btn btn-outline-danger">Supprimer</button>
                                        <?php else : ?>
                                            <div class="input-group">
                                                <button type="submit" name="copier" value="<?php echo $username; ?>" class="btn btn-outline-success">Ajouter</button>
                                            <?php endif; ?>
                                            <button type="submit" name="enregistrer" value="<?php echo $username; ?>" class="btn btn-secondary">Enregistrer</button>
                                            </div>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php
            if (isset($_POST['enregistrer'])) {
                $username = $_POST['enregistrer'];
                if (isset($users[$username])) {
                    // Vérifier si l'utilisateur existe dans le tableau
                    $users[$username]['nom'] = $_POST['nom'];
                    // Mettre à jour les informations de l'utilisateur
                    $users[$username]['prenom'] = $_POST['prenom'];
                    $users[$username]['poste'] = $_POST['poste'];
                    $users[$username]['description'] = $_POST['description'];
                    $updatedJsonData = json_encode($users, JSON_PRETTY_PRINT);
                    // Convertir le tableau en JSON
                    file_put_contents('Data/login-mdp.json', $updatedJsonData);
                    // Enregistrer les modifications dans le fichier JSON
                    echo '<meta http-equiv="refresh" content="0">';
                } else {
                    echo 'Utilisateur non trouvé.';
                }
            }
            // Traitement de la copie/déplacement des utilisateurs
            if (isset($_POST['copier'])) {
                $username = $_POST['copier'];
                // Vérifier si l'utilisateur existe dans l'annuaire
                if (isset($annuaire[$username])) {
                    // Supprimer l'utilisateur de l'annuaire
                    unset($annuaire[$username]);
                    echo 'Utilisateur ' . $username . ' supprimé de l\'annuaire.';
                } else {
                    // Ajouter l'utilisateur à l'annuaire
                    $annuaire[$username] = $users[$username];
                    echo 'Utilisateur ' . $username . ' ajouté à l\'annuaire.';
                }
                // Convertir le tableau en JSON
                $annuaireJsonData = json_encode($annuaire, JSON_PRETTY_PRINT);
                // Enregistrer les modifications dans le fichier d'annuaire
                file_put_contents('Data/annuaire.json', $annuaireJsonData);
                echo '<meta http-equiv="refresh" content="0">';
            }
            ?>
        <?php else : ?>
            <p>Aucun utilisateur trouvé.</p>
        <?php endif; ?>
    <?php
    }

    function display_partenaires_site_vitrine()
    {
        $json_file = 'Data/ListePartenaire.json';
        $partenaires = json_decode(file_get_contents($json_file), true);

        echo "<div class='row'>"; // Start row

        foreach ($partenaires as $nom => $partenaire) {
            $description = $partenaire['description'];
            $image = $partenaire['partenaire_logo'];

            echo "
              <div class='col-md-4'>
                  <div class='card mb-4'>
                      <img src='/Images/Partenaires/$image' class='card-img-top' alt='$nom' style='height: 200px; object-fit: contain;'>
                      <div class='card-body'>
                          <h5 class='card-title'>$nom</h5>
                          <p class='card-text'>$description</p>
                      </div>
                  </div>
              </div>";
        }

        echo "</div>"; // End row
    }

    function affiche_annuaire_vitrine()
    {
        $annuaire = file_decod('Data\annuaire.json');
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
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $prenom . " " . $nom ?></h5>
                                    <p class="card-text text-center"><i><?php echo $poste ?></i><br><img src="../Images/Employés/<?php echo $user ?>.jpg" class="img-fluid rounded-circle mt-3" style="max-width: 75px;"><br><?php echo $description ?></p>
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
    <?php
    }
    ?>