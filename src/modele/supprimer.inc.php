<?php

    require_once("./src/modele/bdd.inc.php");

    class SuppressionClient extends ConnexionBdd{
       
        function supprimerClient(){
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
                    WHERE email = :email";

                $bdd = new PDO('mysql:host=localhost;dbname=client_ligue;charset=utf8','root','');
                $stmt = $bdd->prepare($sql);
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
}
?>