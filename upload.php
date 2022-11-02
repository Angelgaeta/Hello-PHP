<?php 

  /*echo <<<_END
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
  echo "</body></html>";*/


/********************************VERSION SECURISÉ*********************************/
echo <<<_END
<html><head><title>Formulaire de téléversement en PHP</title></head><body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Sélectionnez un fichier JPG, GIF, PNG ou TIF :
<input type='file' name='nomfichier' size='10'>
<input type='submit' value='Déposer'></form>
_END;

if ($_FILES)
{
$nom = $_FILES['nomfichier']['name'];

switch($_FILES['nomfichier']['type'])
{
  case 'image/pjpeg':
  case 'image/jpeg': $ext = 'jpg'; break;
  case 'image/gif':  $ext = 'gif'; break;
  case 'image/png':  $ext = 'png'; break;
  case 'image/tiff': $ext = 'tif'; break;
  default:           $ext = '';    break;
}
if ($ext)
{
  $n = "image.$ext";
  move_uploaded_file($_FILES['nomfichier']['tmp_name'], $n);
  echo "Image téléchargée : '$nom' de type '$n':<br>";
  echo "<img src='$n'>";
}
else echo "'$nom' n'est pas accepté comme fichier image";
}
else echo "Aucune image chargée";

echo "</body></html>";

?>
