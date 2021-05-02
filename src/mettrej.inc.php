<?php
    //traitement des données à envoyer
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=client_ligue;charset=utf8','root','');
        $reponse = $bdd->query('SELECT * FROM `clients` WHERE 1');

        while($clientUpdate = $reponse->fetch()){
            $id = $clientUpdate['id_client']; 
        }
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['age']) || isset($_POST['email'])){
        if(!$_POST['nom'] || !$_POST['prenom'] || !$_POST['age'] || !$_POST['email']){
                print "<p class=\"warning\">Vous avez oublié de remplir un ou plusieurs champs !</p>";
            }
            else if(is_numeric($_POST['nom']) || is_numeric($_POST['prenom'])){
                print "<p class=\"warning\">Vous devez saisir des caractères...</p>";
            }
            else{
                //update
                $sql = "UPDATE clients SET 
                    nom = :nom,
                    prenom = :prenom,
                    age = :age,
                    email = :email,
                    WHERE id_client= ".$_GET['id_client']. "";

                $stmt = $bdd->prepare($sql);
                $stmt->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
                $stmt->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $stmt->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
                $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
                $stmt->execute();
                
                //test pour la mise à jour
                $stmt ? print "<p class=\"success\">Les modifications ont bien été enregistrées !</p>" : print "<p> Une erreur est survenue </p>"; 
                //header("Location: index.php");
                var_dump($stmt);
            }      
        }
?>