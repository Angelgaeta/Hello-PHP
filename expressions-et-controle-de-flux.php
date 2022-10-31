<?php // test1.php
  echo "<h1>Expressions et contrôle du flux en PHP </h1>";
  echo "<hr>";

  echo "<h2><li>Affichage du nom de l'utilisateur :</li></h2>";
  $utilisateur = "Angel Gaeta";
  //echo $utilisateur;
  $utilisateur_courant = $utilisateur;
  echo $utilisateur_courant;


  
/************************Possibilité d'instruction echo*************************/
  echo "<hr>";
  echo "<h2><li>Possibilité d'instruction echo :</li></h2>";

  $auteur = "Brian W. Kernighan";

  echo <<<_END
  Le débogage est deux fois plus difficile que d'écrire le code pour<br>
  la première fois. Par conséquent, si vous rédigez le code de la façon<br>
  la plus intelligente qui soit, vous n'êtes, par définition, pas assez<br>
  intelligent pour le déboguer.<br><br>
    
  - $auteur.
_END;



/************************Fonction Date à variable locale************************/
  echo "<hr>";
  echo "<h2><li>Fonction Date à variable locale :</li></h2>";
  
  $temp = "<b>Nous sommes le: </b>";
  $datePrecedente = "<b>Date il y a 17 jours : </b>";
  echo longdate($temp, time());
  echo longdate($datePrecedente, time() - 17 * 24 * 60 * 60);

  function longdate($texte, $timestamp) //horodatage de la date et l'heure à la seconde près
  {
    return $texte . date("j M Y", $timestamp) . "<br>";
  }



/************************Fonction Test à variable static*****************************************/
    echo "<hr>";
    echo "<h2><li>Fonction Test à variable static :</li></h2>";

    echo test();
    echo " Valeur initiale du compteur <br>";
    echo " Incrémentation de la valeur précèdente " . test();
    
    function test()
    {
        static $compteur = 0;
        echo $compteur;
        $compteur++;
    }



/************************Bouble While Table Multiplication de 12*********************************/
echo "<hr>";
echo "<h2><li>Bouble WHILE Table Multiplication de 12 :</li></h2>";

// $compteur = 1;

// while ($compteur <= 12)
// {
//   echo "$compteur fois 12 égale " . $compteur * 12 . "<br>";
//   ++$compteur;
// }


// VERSION RÉDUITE:

// remarque: le compteur cette fois doit initialisé à 0 parce qu'elle est incrémentée dès l'entrée dans la boucle
$compteur = 0;
// l'instruction ++$compteur directement dans l'expression conditionnelle
while (++$compteur <= 12)
{
  echo "$compteur fois 12 égale " . $compteur * 12 . "<br>";
} 


/************************Bouble For Table Multiplication de 18*********************************/
echo "<hr>";
echo "<h2><li>Bouble FOR Table Multiplication de 18 :</li></h2>";

// une expr1 d'initialisation $compteur = 1
// une expr2 conditionnelle $compteur <= 10
// une expr3 de modification ++$compteur
for ($compteur = 1 ; $compteur <= 10 ; ++$compteur)
{
    echo "$compteur fois 18 égale " . $compteur * 18 . "<br>";
}



/************************Instruction continue à la rencontre de 0*********************************/
echo "<hr>";
echo "<h2><li>Instruction continue pour ne pas calculer avec 0 :</li></h2>";
$j = 11;

while ($j > -10)
{
  $j--;

  if ($j == 0) continue;

  echo "$j diviser par 10 égale ". (10 / $j) . "<br>";
}



/************************Conversion explicite de type*********************************/
echo "<hr>";
echo "<h2><li>Conversion explicite de type (ici pour obtenir un int et non un float :</li></h2>";
echo "Le résultat de 56 fois 12 vaut normalement 4,6666666666667. <br>";
$a = 56;
$b = 12;
$c = (int) ($a / $b);

echo "56 fois 12 est égale sans le décimal à $c.";



/************************Fonctions*********************************/
echo "<hr>";
echo "<h2><li>Fonctions :</li></h2>";

echo strrev(" .suot ,ruojnoB")."<b> => 'strrev' : chaîne inversée (ex. .ruojnoB donne 'Bonjour')</b><br>"; // Chaîne inversée
echo str_repeat("Hip ", 3)."<b> => ' str_repeat' : répétuition en chaîne (ex. ('Hip ', 3) donne 'Hip' trois fois)</b><br>";     // Répétition de chaîne
echo strtoupper("hourra!")."<b> => 'strtoupper' : chaîne en capitales (ex. 'hourra!' donne 'HOURA!')</b><br>";     // Chaîne en capitales



/************************Retourner une valeur, nettoyer un nom complet :***************/
echo "<hr>";
echo "<h2><li>Retourner une valeur, nettoyer un nom complet :</li></h2>";
echo "Convertie 'WILLIAM, henry, gatES' en minuscule puis en mettant la première lettre en majuscule avec la fonction. <br>Exemple: <b>ucfirst(strtolower('WILLIAM'));<br>=> </b>";

/*1 RETOURNER UNE VALEUR SIMPLE:

echo fixe_noms("WILLIAM", "henry", "gatES");

function fixe_noms($n1, $n2, $n3)
{
  $n1 = ucfirst(strtolower($n1)); // PHP passe la chaine d'abord à strtolower et son résultat seulement ensuite à ucfirst
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));

  return $n1 . " " . $n2 . " " . $n3;
}*/


//2 RETOURNER PLUSIEURS VALEURS DANS UN TABLEAU: 

$noms = fixe_noms("WILLIAM", "henry", "gatES");
echo $noms[0] . " " . $noms[1] . " " . $noms[2];

function fixe_noms($n1, $n2, $n3)
{
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3)) . "<br>";

  return array($n1, $n2, $n3);
}


/*3 PASSAGE DE VALEURS À UNE FONCTION PAR RÉFÉRENCE => N'EST PLUS AUTORISÉ PAR PHP !

$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fixe_noms($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;

function fixe_noms(&$n1, &$n2, &$n3) // Passage par référence
{
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
}*/


/*4 RENVOI DE VARIABLES GLOBALES => ATTENTION CERTE IL N'EST PLUS NECESSAIRE DE PASSER DE PARAMÈTRES À LA FONCTION MAIS LES VARIABLES DEMEURENT GLOBALES ET ACCESSIBLES À TOUT LE RESTE DU PROGRAMME, Y COMPRIS AUX AUTRES FONCTIONS !

$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fixe_noms();
echo $a1 . " " . $a2 . " " . $a3;

function fixe_noms()
{
  global $a1; $a1 = ucfirst(strtolower($a1));
  global $a2; $a2 = ucfirst(strtolower($a2));
  global $a3; $a3 = ucfirst(strtolower($a3));
}*/

echo "<br><b> Rappel: </b><br>
- <i>Les variables globales</i> sont accessibles à toutes les parites du code, que ce soit à l'intérieur ou à l'extérieur des fonctions.<br>
- <i>Les variables statiques</i> sont accessibles uniquement au sein de la fonction qui les déclare, mais leur valeur est conservée, d'un appel au suivant de la fonction.<br>";



/************************Vérification de l'existence d'une fonction déterminée :*********************************/
echo "<hr>";
echo "<h2><li>Vérification de l'existence d'une fonction déterminée :</li></h2>";
echo "La fonction <i>function_exists</i> en vérifie l'existence parmi toutes les fonctions prédéfinies et celles définies par l'utilisateur.<br> => ";

if (function_exists("array_combine"))
  {
    echo "'La fonction existe'";
  }
  else
  {
    echo "'La fonction n'existe pas - Créez la vôtre'";
  }

?>
