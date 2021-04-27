<?php
$host = 'localhost';
$dbname = 'client_ligue';
$username = 'root';
$password = '';

if(isset($_POST['submit'])){
    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['age']) || isset($_POST['email'])){
        if(!$_POST['nom'] || !$_POST['prenom'] || !$_POST['age'] || !$_POST['email']){
                print "<p class=\"warning\">Vous avez oublié de remplir un ou plusieurs champs !</p>";
            }
            else if(is_numeric($_POST['nom']) || is_numeric($_POST['prenom'])){
                print "<p class=\"warning\">Vous devez saisir des caractères...</p>";
            }
            else{

                try{
                    $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
                }catch(Exception $e){
                    die("Erreur : ".$e->getMessage());
                }
                //update
                $sql = "UPDATE clients SET 
                    nom = :nom,
                    prenom = :prenom,
                    age = :age
                    email = :email,
                    WHERE id_client = :id";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
                $stmt->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_INT);
                $stmt->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
                $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_INT);
                $stmt->execute();
                //test pour la mise à jour
                $stmt ? print "<p class=\"success\">Les modifications ont bien été enregistrées</p>" : print "<p> Une erreur est survenue </p>"; 
            }      
        }
    }
?>