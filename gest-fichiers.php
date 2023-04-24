<?php
include("fonctions.php");
setup();
intranet_navbar();
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

          if ($handle = opendir($dir)) {
               while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                         if (is_dir($dir . $entry)) {
                              ?>
                              <div class='col'>
                                   <a href='?dir=<?php echo $entry; ?>' class='text-dark' style='text-decoration: none;'>
                                        <div class='card shadow-sm'>
                                             <div class='card-body'>
                                                  <h5 class='card-title'><img src='Images\Icons\\folder.png' height='25px'><?php echo $entry; ?></h5>
                                             </div>
                                        </div>
                                   </a>

                              </div>
                         <?php
                         } else {
                         }
                    }
               }
               closedir($handle);
          }
          ?>

     </div>
</div>


<br>


<div class="container">
     <div class="row">
          <div class="col-12">
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                         <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                         <button type="submit" class="btn btn-primary" name="uploadBtn">Upload</button>
                    </div>
               </form>
          </div>
     </div>
</div>
<?php
if (isset($_POST["uploadBtn"])) {
     $target_dir = $dir;
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

     if (file_exists($target_file)) {
          echo "<div class='alert alert-danger'>Désolé, ce fichier existe déjà.</div>";
          $uploadOk = 0;
     }

     if ($_FILES["fileToUpload"]["size"] > 5000000000) {
          echo "<div class='alert alert-danger'>Désolé, votre fichier est trop volumineux. (Max 5 Go)</div>";
          $uploadOk = 0;
     }

     if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "xls" && $imageFileType != "xlsx" && $imageFileType != "html" && $imageFileType != "css" && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "mp3" && $imageFileType != "mp4" && $imageFileType != "zip" && $imageFileType != "txt") {
          echo "<div class='alert alert-danger'>Désolé, seuls les fichiers de type JPG, JPEG, PNG, GIF, PDF, DOC, DOCX, XLS, XLSX, HTML, CSS, PPT, PPTX, MP3, MP4, ZIP et TXT sont autorisés.</div>";
          $uploadOk = 0;
     }

     if ($uploadOk == 0) {
          echo "<div class='alert alert-danger'>Désolé, votre fichier n'a pas été téléchargé.</div>";
     } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               echo "<div class='alert alert-success'>Le fichier " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a été téléchargé avec succès.</div>";
          } else {
               echo "<div class='alert alert-danger'>Désolé, une erreur s'est produite lors du téléchargement de votre fichier.</div>";
          }
     }
}
?>
<br>

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
                         if ($handle = opendir($dir)) {
                              while (false !== ($entry = readdir($handle))) {
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
                                             $allowed_types = array('pdf', 'mp3', 'mp4', 'png', 'txt', 'jpg', 'jpeg');
                                             if (in_array($ext, $allowed_types)) {
                                             ?>
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
                                             <a href='<?php echo "$dir$entry" ?>' download class='btn btn-sm btn-outline-success'>
                                                  <img src='Images\Icons\download.png' height='25px'>
                                             </a>

                                             <a href="<?php echo $dir . $entry ?>" class="btn btn-sm btn-outline-danger" onmouseover="this.getElementsByTagName('img')[0].src='Images\\Icons\\delete-open.png';" onmouseout="this.getElementsByTagName('img')[0].src='Images\\Icons\\delete.png';">
                                                  <img src="Images\Icons\delete.png" height="25px">
                                             </a>

                                        </td>

                                        </tr>
                         <?php
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

                         ?>

                    </tbody>
               </table>
          </div>
     </div>
</div>