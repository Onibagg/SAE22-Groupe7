<head>
    <link href="/Vitrine/Assets/page_header.css" rel="stylesheet">
</head>
<?php
$chemin = ($_SERVER['REQUEST_URI'] === '/') ? 'Vitrine/Models/connexion.php' : '../Vitrine/Models/connexion.php';
include($chemin);
?>

<div class="mt-0 p-4 custom">
    <div class="row">
        <div class="col text-center">
            <a href="../">
                <img src="../Data/Images/Logo_complet.png" height="115" class="rounded" alt="?"></br></br>
            </a>
        </div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col text-center">
            <a href="/Vitrine/page-pres.php">
                <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte1').style.fontWeight='bold';" onmouseout="document.getElementById('texte1').style.fontWeight='normal';">
                    <img src="../Data/Images/point-dinterrogation.png" width="40" height="40" class="rounded" alt="?"></br></br>
                    <p id="texte1">Qui sommes-nous ?</p>
                </button>
            </a>
        </div>
        <div class="col text-center">
            <a href="/Vitrine/page_histoire.php">
                <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte2').style.fontWeight='bold';" onmouseout="document.getElementById('texte2').style.fontWeight='normal';">
                    <img src="../Data/Images/histoire.png" width="40" height="40" class="rounded" alt="Histoire"></br></br>
                    <p id="texte2">Histoire</p>
                </button>
            </a>
        </div>
        <div class="col text-center">
            <a href="/Vitrine/page_activites.php">
                <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte3').style.fontWeight='bold';" onmouseout="document.getElementById('texte3').style.fontWeight='normal';">
                    <img src="../Data/Images/activites.png" width="40" height="40" class="rounded" alt="Activités"></br></br>
                    <p id="texte3">Activités</p>
                </button>
            </a>
        </div>
        <div class="col text-center">
            <a href="/Vitrine/page_partenaires.php">
                <button type="button" class="btn btn-outline-dark text-black custom-btn" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte4').style.fontWeight='bold';" onmouseout="document.getElementById('texte4').style.fontWeight='normal';">
                    <img src="../Data/Images/les-partenaires.png" width="40" height="40" class="rounded" alt="Partenaires"></br></br>
                    <p id="texte4">Partenaires</p>
                </button>
            </a>
        </div>
        <div class="col text-center">
            <button type="button" class="btn btn-outline-dark text-black custom-btn" data-bs-toggle="modal" data-bs-target="#myModal" style="width: 150px; height: 130px;" onmouseover="document.getElementById('texte5').style.fontWeight='bold';" onmouseout="document.getElementById('texte5').style.fontWeight='normal';">
                <img src="../Data/Images/login.png" width="40" height="40" class="rounded" alt="Connexion"></br></br>
                <p id="texte5">Connexion</p>
            </button>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="login-form">
                            <form id="connexion" action="/" method="POST" class="needs-validation">
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
                                    <!-- 
                                    <div class="form-group">
                                        <a href="reset-password.php">Mot de passe oublié ?</a>
                                    </div> 
                                    -->
                                    <br>
                                    <div class="form-group">
                                        Pas de compte? <a href="../Vitrine/new-account.php">Faire une demande</a>
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
                            connexion();
                        } else {
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>