<?php
    echo "<h1>Programmation Orientée Objet</h1>";
    echo "<hr>";


    // print_r est une fonction qui demande à PHP d'afficher des informations relatives à une variable sous une forme lisible par l'homme
    // print_r($objet); echo "<br><br>";


    // CREER UN OBJET

    $objet = new Utilisateur;
    $objet->enregistre_utilisateur();
    $objet->droitsdauteur();
    echo "<hr>";

    $objet           = new Abonne;
    $objet->nom      = "Angel";
    $objet->motpasse = "mdp";
    $objet->tel      = "06 06 06 06 06";
    $objet->courriel = "toto@gmail.com";
    $objet->afficher();
    echo "<hr>";

    $objet = new Fils;
    $objet->test();
    $objet->test2();
    echo "<hr>";

    Traduction::lecture(); // les : est un opérateur de résolution de portée, au lieu du -> 
    echo "<hr>";

    $temp = new Test();
    echo "Test A: " . Test::$propriete_statique . "<br>"; // la propriété $propriete_statique est adressable directement à partir de la classe en elle-même, grâce à l'opérateur :
    echo "Test B: " . $temp->get_ps()           . "<br>"; // appel par la méthode (publique par défaut) get_ps de l'objet $temp
    /*echo "Test C: " . $temp->propriete_statique . "<br>"; // en revanche, ce test échoue, parce qu'en tant qu'instance de la classe, l'objet $temp n'a pas le droit d'accéder à la propriété statique $propriete_statique*/
    echo "<hr>";

    $objet = new Tigre();
    echo "Les tigres ont...<br>";
    echo "Fourrure : " . $objet->fourrure . "<br>";
    echo "Rayures : " . $objet->rayures;
    echo "<hr>";


    // DECLARER UNE CLASSE

    class Utilisateur
    {
        public $nom, $motpasse;
    
        function enregistre_utilisateur()
        {
        echo "Code d'enregistrement utilisateur ici <br>";
        }

        final function droitsdauteur()
        {
        echo "Cette classe a été créée par Angel <br>";
        }
    }

    class Abonne extends Utilisateur
    {
        public $tel, $courriel;
    
        function afficher()
        {
        echo "Nom :      " . $this->nom      . "<br>";
        echo "MdP :      " . $this->motpasse . "<br>";
        echo "Tél. :     " . $this->tel      . "<br>";
        echo "Courriel : " . $this->courriel . "<br>";
        }
    }

    class Pere
    {
        function test()
        {
        echo "[Classe Pere] Je suis ton père<br>";
        }
    }

    class Fils extends Pere
    {
        function test()
        {
        echo "[Classe Fils extends Pere] C'est moi, Luke<br>";
        }
        
        function test2()
        {
        parent::test();
        }
    }

    class Traduction
    {
        const ANGLAIS  = "langue maternelle";
        const ESPAGNOL = 1;
        const FRANCAIS = 2;
        const ALLEMAND = 3;
        // …

        static function lecture() 
        {
        echo "L'anglais est sa " . self::ANGLAIS . "<br>";
        }
    }


    class Test
    {
        static $propriete_statique = "Je suis statique";

        function get_ps()
        {
        return self::$propriete_statique;
        }
    }

    class Felin
    {
      public $fourrure; // Les félins ont de la fourrure
  
      function __construct()
      {
        $this->fourrure = "TRUE";
      }
    }
  
    class Tigre extends Felin
    {
      public $rayures; // Les tigres ont des rayures
  
      function __construct()
      {
        parent::__construct();   // Appeler d'abord constructeur du parent
        $this->rayures = "TRUE"; // Préciser le reste
      }
    }

?>
