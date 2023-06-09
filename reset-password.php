<?php
include("fonctions.php");
setup();
?>

<head>
    <style type="text/css">
        body {
            background:
                repeating-linear-gradient(45deg, #0000 calc(-650%/13) calc(50%/13), #928ebe 0 calc(100%/13),
                    #0000 0 calc(150%/13), #928ebe 0 calc(200%/13),
                    #0000 0 calc(250%/13), #928ebe 0 calc(300%/13)), repeating-linear-gradient(45deg, #0000 calc(-650%/13) calc(50%/13), #928ebe 0 calc(100%/13),
                    #0000 0 calc(150%/13), #928ebe 0 calc(200%/13),
                    #0000 0 calc(250%/13), #928ebe 0 calc(300%/13)) 29px 29px,
                repeating-linear-gradient(-45deg, #0000 calc(-650%/13) calc(50%/13), #928ebe 0 calc(100%/13),
                    #0000 0 calc(150%/13), #928ebe 0 calc(200%/13),
                    #0000 0 calc(250%/13), #928ebe 0 calc(300%/13)), repeating-linear-gradient(-45deg, #0000 calc(-650%/13) calc(50%/13), #928ebe 0 calc(100%/13),
                    #0000 0 calc(150%/13), #928ebe 0 calc(200%/13),
                    #0000 0 calc(250%/13), #928ebe 0 calc(300%/13)) 29px 29px #0008cd;
            background-size: 58px 58px;


        }

        .card {
            opacity: 0.965;
            position: absolute;
            /* Assurez-vous que la carte a une position absolue */
            top: 50%;
            /* Placez la carte à 50% de la hauteur de la page */
            left: 50%;
            /* Placez la carte à 50% de la largeur de la page */
            transform: translate(-50%, -50%);
            border-radius: 40px; /* Définissez la valeur appropriée pour arrondir les bords */

        }

        .anim {
            position: relative;
            left: -100%;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: hidden;
        }
    </style>

</head>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <p class="display-6">Mot de passe oublié</p>
                </div>
                <div class="card-body text-center">
                    <form id="resetPasswordForm" method="post">
                        <div class="form-group">
                            <label for="user">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="resetPassword">Réinitialiser le mot de passe</button>
                    </form>
                    <?php
                    if (isset($_POST['resetPassword'])) {
                        $users = json_decode(file_get_contents('Data\login-mdp.json'), true);
                        $user = $_POST['user'];
                        $email = $_POST['email'];
                        $foundUser = null;
                        foreach ($users as $userData) {
                            if ($userData['user'] === $user && $userData['email'] === $email) {
                                $foundUser = $userData;
                                break;
                            }
                        }
                        if ($foundUser) {
                            $newMDP = securrreeeeee();
                            $foundUser['mdp'] = password_hash($newMDP, PASSWORD_DEFAULT);
                            $users[$foundUser['user']] = $foundUser;
                            file_put_contents('Data\login-mdp.json', json_encode($users, JSON_PRETTY_PRINT));
                            echo '<div class="alert alert-success mt-3">Un nouveau mot de passe a été envoyé à votre adresse e-mail.</div>';
                            $to = $email;
                            $subject = 'Réinitialisation de votre mot de passe';
                            $message = 'Bonjour ' . $user . ',' . "\r\n\r\n";
                            $message .= 'Votre mot de passe a été réinitialisé. Voici votre nouveau mot de passe : ' . $newMDP . "\r\n\r\n";
                            $message .= 'Veuillez le modifier dès que possible depuis votre profil.' . "\r\n\r\n";
                            $headers = 'From: noreply.privatevpn@gmail.com' . "\r\n" .
                                'Reply-To: noreply.privatevpn@gmail.com' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();
                            mail($to, $subject, $message, $headers);
                        } else {
                            echo '<div class="alert alert-danger mt-3">Nom d\'utilisateur ou adresse e-mail invalide.</div>';
                        }
                    }

                    function securrreeeeee($length = 16)
                    {
                        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charLong = strlen($char);     // Trouver la longueur de la chaîne de caractères $char
                        $randomStr = '';
                        for ($i = 0; $i < $length; $i++) {     // Boucle qui exécute $length fois, où à chaque itération, un caractère aléatoire de la chaîne de caractères $char
                            $randomStr .= $char[rand(0, $charLong - 1)]; // est choisi et ajouté à la chaîne $randomStr à l'aide de l'opérateur .=
                        }
                        return $randomStr;
                    }
                    ?>
                    <br>
                    <a href="page-accueil.php" class="btn btn-outline-dark">Retour à l'acceuil</a>
                </div>
            </div>
        </div>
    </div>
</div>