<?php

    require_once("./src/modele/connexionBdd.inc.php");

    class SuppressionClient extends ConnexionBdd{
       
        function supprimerClient($id_client){
            $requete = $this->seConnecter()->prepare('DELETE FROM clients WHERE id_client = :id_client');
            $requete->execute(array('id_client' => $id_client));
        }
    }     
?>