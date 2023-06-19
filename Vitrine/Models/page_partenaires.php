<?php
$json_file = '../Data/ListePartenaire.json';
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

echo "</div></div></div>"; // End row
