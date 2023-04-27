<?php
include("fonctions.php");
setup();
?>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Mot de passe oublié</div>
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