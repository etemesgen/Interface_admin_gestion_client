<?php

    require_once("./src/modele/bdd.inc.php");

    class MettreAjourClient extends ConnexionBdd{

        function clientAjour($id_client, $nom, $prenom, $age, $email){
            $reponse = $this->seConnecter()->query("SELECT * FROM `clients` WHERE id_client = ". $id_client ."");
            //$donnees = $reponse->fetch();
                if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['age']) || isset($_POST['email'])){

                    if(!$_POST['nom'] || !$_POST['prenom'] || !$_POST['age'] || !$_POST['email']){
                        print "<p class=\"warning\">Vous avez oublié de remplir un ou plusieurs champs !</p>";
                    }
                    else if(is_numeric($_POST['nom']) || is_numeric($_POST['prenom'])){
                        print "<p class=\"warning\">Vous devez saisir des caractères...</p>";
                    } 
                    else{
                        // La requête mettant à jour le client
                        $sql = "UPDATE clients SET 
                            nom = :nom,
                            prenom = :prenom,
                            age = :age,
                            WHERE email = :email";/*,
                            WHERE id_clients == ".$donnees['id_client']."";*/

                        // Vérification des lignes de la BDD
                        $stmt = $this->seConnecter()->prepare($sql);
                        $stmt->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
                        $stmt->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                        $stmt->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
                        $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
                        $stmt->execute();
                
                       // Test pour la mise à jour
                        $stmt ? print "<p class=\"success\">Les modifications ont bien été enregistrées !</p>" : print "<p> Une erreur est survenue </p>"; 
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