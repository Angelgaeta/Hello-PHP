<?php 

/**********************APPELS SYSTEME******************************/ 
// Obtenir un apercu rapide du contenu du dossier courant //

/*********! Les fonctions d'appel au système sont généralement désactivées sur 
les hôtes mutualisés (partagés) sur le web, parce qu'elles posent de réels problèmes de sécurité. Autrement dit, 
toujours essayer de régler les problèmes à base de code PHP nous même et, seulement si nous ne pouvons pas faire autrement, 
envisager alors de faire appel au système.*********/


//$cmd = "dir";   // Windows, Mac, Linux
$cmd = "ls"; // Linux, Unix & Mac

exec(escapeshellcmd($cmd), $output, $status);

if ($status) echo "Échec de la commande exec";
else
{
  echo "<pre>";
  foreach($output as $line) echo htmlspecialchars("$line\n");
  echo "</pre>";
}

?>
