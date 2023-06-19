<div class="container-fluid p-5 custom mt-3 text-center">
    <div class="row">


        <div class="col-sm-3  text-black text-center">
            <p>AIDE & INFORMATIONS</p>
            <a class="text-dark" href="/Vitrine/Mentions_légales.php">Mentions légales</a></br>
            <a class="text-dark" href="/Vitrine/Conditions_de_vente.php">Conditions générales de ventes</a>

        </div>
        <div class="col-sm-3 text-black">
            <p>CONFIDENTIALITE</p>
            <a class="text-dark" href="/Vitrine/Politique_de_confidentialité.php">Politique de confidentialité</a></br>
            <a class="text-dark" href="/Vitrine/Mes_donnees_personnelles.php">Mes données personnelles</a>
        </div>
        <div class="col-sm-6">
            <img src="../Images/Screen_475-removebg.png" width="400" height="60"></br></br>

            <!----------------MODALE--------------------->

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                Nous contacter
            </button>

            <div class="modal fade" id="myModal1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">NOUS CONTACTER</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="POST" action="">

                                <div class="mb-3">
                                    <label for="inputPrenom" class="form-label">Mail</label>
                                    <input type="mail" class="form-control" id="inpuptmail" name="mail" placeholder="Votre adresse mail">
                                </div>
                                <div class="mb-3">
                                    <label for="inputRaison" class="form-label">Raison du contact</label>
                                    <input type="text" class="form-control" id="inputRaison" name="raison" rows="3" placeholder="Indiquez la raison de votre contact"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="inputContenu" class="form-label">Contenu</label>
                                    <textarea class="form-control" id="inputContenu" name="contenu" placeholder="Votre explication"></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger" name="envoyer">Envoyer</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['envoyer'])) {

                $contact = file_decod('../Data/contacts.json');

                $mail = $_POST['mail'];
                $raison = $_POST['raison'];
                $contenu = $_POST['contenu'];

                $contact[$mail] = [
                    'mail' => $mail,
                    'raison' => $raison,
                    'contenu' => $contenu
                ];


                $jsonContact = json_encode($contact);

                // Chemin vers le fichier JSON
                $cheminFichier = '../Data/contacts.json';

                // Écriture des données dans le fichier JSON
                file_encod($cheminFichier, $contact);

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>';
                echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "Succès",
                                text: "Les informations ont été enregistrées avec succès.",
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 3000 
                            });
                        </script>';
            }
            ?>


        </div>


    </div>

    <p>©
        <?php echo (" Année : ");
        echo date("Y"); ?> - PrivateVPN.fr
    </p>
</div>