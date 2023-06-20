
<head>
    <link href="Assets/new_account.css" rel="stylesheet">
</head>

<body class="">
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 px-0">
                <a href="/" class="ms-5">
                    <img id="accueil" src="../Data/Images/accueil.png" class="anim" style="width: 30%;"></img>
                </a>
            </div>
            <div class="col-md-4 px-0 text-center">
                <br><br><br>
                <img id="logo" src="../Data/Images/PrivateVPN_logo.png" class="anim" style="width: 60%;">
                <img id="text" src="../Data/Images/Screen_475-removebg.png" class="mt-1 anim" style="width: 85%;">
            </div>
            <div class="col-md-1 px-0">
            </div>
            <div class="col-md-4">
                <div class="card shadow" id="card">
                    <div class="card-body">
                        <p class="display-4">Créer un compte</p>
                        <hr class="mt-3 mb-5 me-5">
                        <form id="demande" action="" method="POST">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
                                <label for="nom">Nom</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
                                <label for="prenom">Prénom</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="user" placeholder="Nom d'utilisateur" name="user">
                                <label for="user">Nom d'utilisateur</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="poste" placeholder="Poste" name="poste">
                                <label for="poste">Poste</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
                                <label for="mdp">Mot de passe</label>
                            </div>
                            <?php include("../Vitrine/Models/new_account.php"); ?>
                            <button name="demande" type="submit" class="btn btn-outline-dark">Créer le compte</button>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-2 px-0">
            </div>
        </div>
    </div>
    <script src="../Vitrine/Assets/L-Sliiddeeeee.js"></script>
    <script src="../Vitrine/Assets/R-Sliiddeeeee.js"></script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>