<?php
    class ConnexionBdd{
    
        function seConnecter(){
            try{// On se connecte à MySQL
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=client_ligue', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
                return $bdd;
            }
            catch(Exception $e){
                // En cas d'erreur précédemment, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
            }
    }
}

?>