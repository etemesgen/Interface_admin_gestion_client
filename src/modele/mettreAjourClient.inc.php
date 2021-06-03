<?php

    require_once("./src/modele/connexionBdd.inc.php");

    class MettreAjourClient extends ConnexionBdd{
        
                function clientAjour($id_client, $nom, $prenom, $age, $email)
                {
                    $reponse = $this->seConnecter()->query("SELECT * FROM `clients` WHERE id_client = '. $id_client .'");
                    $donnees = $reponse->fetch();
            
                    $req = $this->seConnecter()->prepare('UPDATE clients SET  nom = :nom, prenom = :prenom, age = :age, email = :email WHERE id_client = ' . $id_client. '');
                    $req->execute(array(
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'age' =>  $age,
                        'email' => $email,
                    ));
                }
            

    function afficherLeNom($id_client){
        $reponse = $this->seConnecter()->query("SELECT * FROM `clients` WHERE id_client = " . $id_client . "");
        $donnees = $reponse->fetch();
        return $donnees['nom'];
    }

    function afficherLePrenom($id_client){
        $reponse = $this->seConnecter()->query("SELECT * FROM `clients` WHERE id_client = " . $id_client . "");
        $donnees = $reponse->fetch();
        return $donnees['prenom'];
    }

    function afficherAge($id_client){
        $reponse = $this->seConnecter()->query("SELECT * FROM `clients` WHERE id_client = " . $id_client . "");
        $donnees = $reponse->fetch();
        return $donnees['age'];
    }

    function afficherEmail($id_client){
        $reponse = $this->seConnecter()->query("SELECT * FROM `clients` WHERE id_client = " . $id_client . "");
        $donnees = $reponse->fetch();
        return $donnees['email'];
    }
}         
?>