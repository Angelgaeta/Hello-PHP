<?php 
  echo <<<_END
    <html><head><title>Formulaire de téléversement en PHP</title></head><body>
    <form method='post' action='upload.php' enctype='multipart/form-data'>
    Sélectionnez le fichier : <input type='file' name='nomfichier' size='10'>
    <input type='submit' value='Déposer'>
    </form>
_END;

  if ($_FILES)
  {
    $nom = $_FILES['nomfichier']['name'];
    move_uploaded_file($_FILES['nomfichier']['tmp_name'], $nom);
    echo "Image téléchargée : '$nom'<br><img src='$nom'>";
  }
  echo "</body></html>";
?>
