<?php
include("fonctions.php");
setup();
intranet_navbar();
https: //antoine-herault.developpez.com/tutoriels/php/gestionnaire/

?>
<p class="display-4 text-center">Gestionnaire de Fichier</p>


<div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php
          $dir = "Data\Gestionnaire-de-fichier\\";
          if (isset($_GET['dir'])) {
               $dir .= $_GET['dir'] . '\\';
          }
          if ($dir !== "Data\Gestionnaire-de-fichier\\") {
               $parent_dir = dirname($dir);
               echo "<div class='col'>
                   <div class='card shadow-sm'>
                       <div class='card-body'>
                           <p class='card-title'>
                               <a href='gest-fichiers.php' class='text-dark' style='text-decoration: none;'>
                                   <img src='Images\Icons\\return.png' height='25px'>
                               </a>
                           </p>
                       </div>
                   </div>
               </div>";
           }
           
          if ($handle = opendir($dir)) {
               while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                         if (is_dir($dir . $entry)) {
                              echo "<div class='col'>
								<div class='card shadow-sm'>
									<div class='card-body'>
										<h5 class='card-title'><img src='Images\Icons\\folder.png' height='25px'><a href='?dir=$entry' class='text-dark' style='text-decoration: none;'>$entry</a></h5>
									</div>
								</div>
							</div>";
                         } else {
                         }
                    }
               }
               closedir($handle);
          }

          echo '</div>';
          echo '</div>';

          echo '<br>';

          echo '<div class="container">';
          echo '<div class="row">';
          echo '<div class="col-12">';
          echo '<table class="table table-striped table-bordered table-responsive">';
          echo '<thead>';
          echo '<tr>';
          echo '<th>Nom du fichier</th>';
          echo '<th>Taille</th>';
          echo '<th>Date de modification</th>';
          echo '<th>Télécharger</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';

          if ($handle = opendir($dir)) {
               while (false !== ($entry = readdir($handle))) {
                    if (!is_dir($dir . $entry)) {
                         $filesize = filesize($dir . $entry);
                         $filemtime = date("d/m/Y H:i:s", filemtime($dir . $entry));
                         echo "<tr>";
                         echo "<td>$entry</td>";
                         echo "<td>" . format_size($filesize) . "</td>";
                         echo "<td>$filemtime</td>";
                         echo "<td><a href='$dir$entry' download class='btn btn-sm btn-primary'>Télécharger</a><a href='' class='btn btn-sm btn-danger'>Supprimer</a></td>";
                         echo "</tr>";
                    }
               }
               closedir($handle);
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
          echo '</tbody>';
          echo '</table>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          ?>
