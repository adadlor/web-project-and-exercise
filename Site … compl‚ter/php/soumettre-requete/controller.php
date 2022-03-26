<?php

 define("base_de_donnees","L1ISI2021g32db" ) ;
 define("login", "L1ISI2021g32") ;
 define("mot_de_passe", "bbc4d5f0") ;

 
try {  // Tentative de connexion
        $acces_BD = "mysql:dbname=".base_de_donnees.";host=localhost" ;
        // Création d'un objet de connexion à la BD
        $db = new PDO($acces_BD, login, mot_de_passe);
    } 
    catch(PDOException $e) // Si la connexion ne fonctionne pas ...
    {
        $db = null;
        echo    '<p>La connexion a échoué :-( : </p>' ;
        echo    '<p>Voici le message d\'erreur généré : '. $e->getMessage();
        exit() ;
    }

    // Indique que le texte des requêtes sera codé au format UTF8
    $db->query("SET NAMES utf8");

    // Pour les tests, réception de la requête par la barre d'adresse (méthode get)
    if(isset($_GET['texteRequete'])){
        $texteRequete = $_GET['texteRequete'] ;
        $erreur=false ;
    }

    // Récupèration du texte de la requête par la méthode post
    if(isset($_POST['texteRequete']))
    {
        $texteRequete = $_POST['texteRequete'] ;
        $erreur=false ;
    }

    if(isset($texteRequete)){// Si on a reçu le texte de la requête
    
    // Prépare la requête
    $requete = $db->prepare($texteRequete);
    
    // Exécute la requête
    $requete->execute() ;

    // Récupère les résultats de la requête
    $personnes = $requete->fetchAll(PDO::FETCH_OBJ) ;

    // Pour les tests, affichage pour le développeur
     //var_dump($personnes) ;
    
    // Transformation du résultat en un texte JSON
    $resultatJson = json_encode($personnes);     
   
    // Pour permettre l'accès à ce fichier depuis n'importe quel serveur
   header("Access-Control-Allow-Origin: *");
   
   // Pour avertir celui qui reçoit le résultat, que c'est un texte JSON codé en UTF8
       header('Content-type: application/json; charset=UTF-8');  
    }// si la requête a été reçue 
    else{ // Cas ùo le texte de la requête n'a pas été reçu
        $erreur=true ;
        $messageErreur = "Le programme php n'a pas reçu la requête à traiter" ;
    }
?>
<?php if(!$erreur): ?>
<?=$resultatJson?> 
<?php else: ?>
    <p><?=$messageErreur?></p>
<?php endif ?>