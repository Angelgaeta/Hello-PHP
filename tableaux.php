<?php
echo "<h1>Les tableaux en PHP</h1>";
echo "<hr>";
/************************Accès de base******************************/
echo "<h2><li>Accès de base</li></h2>";
echo "<h4>Ajout d'éléments à un tableau et lecture de leurs valeurs (à l'aide d'une boucle for)</h4>";

$papier[] = "Copieur;<br>";
$papier[] = "Jet d'encre;<br>";
$papier[] = "Laser;<br>";
$papier[] = "Photo;<br>";

for ($j = 0 ; $j < 4 ; ++$j)
echo "$j: $papier[$j]<br>";



/* L'index ou la clé du nom copieur a pour valeur */
// Les noms (copieur, jetdencre, ...) sont désignés d'index ou de clés
// Tandis que les éléments qui leur sont attribués (comme Imprimante laser) s'appelent les valeurs.
$papier['copieur']  = "Photocopieur et multiusage";
$papier['jetencre'] = "Imprimante à jet d'encre";
$papier['laser']    = "Imprimante laser";
$papier['photo']    = "Papier d'impression photographique";

echo "<b>L'index ou la clé du nom <i>copieur</i> a pour valeur <br>= </b>"  . $papier['laser'] . "<br><br>";



/* Ajouter des éléments à un tableau à l'aide du mot clé array */
echo "<b>Ajouter des éléments à un tableau à l'aide du mot clé array</b><br>";
$p1 = array("Copieur", "Jetencre", "Laser", "Photo");

echo "Élément p1 (1er array) : " . $p1[2] . "<br>";

$p2 = array('copieur'  => "Photocopieur et multiusage",
            'jetencre' => "Imprimante à jet d'encre",
            'laser'    => "Imprimante laser",
            'photo'    => "Papier d'impression photographique");

echo  "Élément p2 (2ème array) : " . $p2['jetencre'] . "<br><br>";



/************************Boucle foreach...as******************************/
echo "<h2><li>Boucle foreach...as</li></h2>";
/* Parcours d'un tableau à l'aide de foreach...as */

echo "<b>Parcours d'un tableau à l'aide de foreach...as</b><br>";
$papier = array("Copieur", "Jetencre", "Laser", "Photo");
$j = 0;

foreach($papier as $item)
{
  echo "$j: $item<br>";
  ++$j;
}

echo "<br>";


/* Traversée d'un tableau associatif à l'aide de foreach...as */

echo "<b>Traversée d'un tableau associatif à l'aide de foreach...as</b><br>";
$papier = array('copieur'  => "Photocopieur et multiusage",
                  'jetencre' => "Imprimante à jet d'encre",
                  'laser'    => "Imprimante laser",
                  'photo'    => "Papier d'impression photographique");

  foreach($papier as $item => $description)
    echo "$item : $description<br>";

   
/************************Tableaux multidimensionnels****************************/
echo "<h2><li>Tableaux multidimensionnels</li></h2>";
echo "<b>Création d'un tableau associatif multidimentionnel</b><br>";
$produits = array(

    'papier' => array(

      'copieur'  => "Photocopieur et multiusage",
      'jetencre' => "Imprimante à jet d'encre",
      'laser'    => "Imprimante laser",
      'photo'    => "Papier d'impression photographique"),

    'stylos' => array(

      'bille'    => "Stylos à bille",
      'fluo'     => "Surligneurs",
      'feutre'   => "Feutres et marqueurs"),

    'divers' => array(

      'rubans'   => "Rubans adhésifs",
      'colle'    => "Colles",
      'attache'  => "Attaches-trombonnes"
    )
  );

  echo "<pre>";

  foreach($produits as $section => $items)
    foreach($items as $cle => $valeur)
      echo "$section :\t$cle\t($valeur)<br>";

  echo "</pre><br>";


  echo "<b>Création d'un tableau numérique multidimentionnel</b>";
  $plateau = array(
    // tour, cavalier, fou, reine, roi
    // pions
	array('t', 'c', 'f', 'q', 'r', 'f', 'c', 't'),
	array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
	array('T', 'C', 'F', 'Q', 'R', 'F', 'C', 'T')
  );

  echo "<pre>";

  foreach($plateau as $rangee)
  {
    foreach ($rangee as $piece)
      echo "$piece ";

    echo "<br>";
  }
  echo "<br>";
  echo "En accédant directement à la case [7][3] cela donne = " . $plateau[7][3];
  echo "</pre>";
