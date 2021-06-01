<?php

    require_once("./src/modele/connexionBdd.inc.php");

    class SuppressionClient extends ConnexionBdd{
       
        function supprimerClient(){
            $reponse = $this->seConnecter()->query("SELECT * FROM `clients` WHERE id_client = ". $id_client ."");
            if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['age']) || isset($_POST['email'])){

                if(!$_POST['nom'] || !$_POST['prenom'] || !$_POST['age'] || !$_POST['email']){
                    print "<p class=\"warning\">Vous avez oublié de remplir un ou plusieurs champs !</p>";
                }
                else if(is_numeric($_POST['nom']) || is_numeric($_POST['prenom'])){
                    print "<p class=\"warning\">Vous devez saisir des caractères...</p>";
                }
                else{
                //update
                $sql = "DELETE FROM clients WHERE 
                    nom = :nom,
                    prenom = :prenom,
                    age = :age,
                    email = :email,
                    WHERE id_clients == ".$donnees['id_client']."";

                $stmt = $this->seConnecter()->prepare($sql);
                $stmt->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
                $stmt->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $stmt->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
                $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
                $stmt->execute();
                //test pour la mise à jour
                $stmt ? print "<p class=\"success\">Le client a bien été supprimé :(</p>" : print "<p> Une erreur est survenue </p>"; 
            //    header("Location: index.php");
           }      
        }
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