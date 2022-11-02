<?php

  // Cette fonction résout le problème des caractères accentués 
  // de la page cible qui apparaissent sous forme de ? blanc 
  // sur losange noir lorsque file_get_contents récupère le contenu
  // de la page cible dans une chaine.
  // La commande echo l'affiche sans se préoccuper du codage des caractères
  // du contenu de la chaîne.
  // Pour corriger cela, une technique proposée par un contributeur
  // de la documentation de PHP consiste à détecter le codage des caractères,
  // puis de le convertir en UTF-8.
  // (Voir https://php.net/manual/fr/function.file-get-contents.php.)
  
  // Reportez-vous à la documentation de mb_convert_encoding et de
  // mb_detect_encoding pour plus de détails.

  function file_get_contents_utf8($fn) {
     $contenu = file_get_contents($fn);
      return mb_convert_encoding($contenu, 'UTF-8',
          mb_detect_encoding($contenu, 'UTF-8, ISO-8859-1', true));
  }

  // Appel à la fonction ci-dessus. 
  echo file_get_contents_utf8("https://github.com/Angelgaeta");


?>
