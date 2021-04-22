<?php
     //traitement des données à envoyer
     try{
         $bdd = new PDO('mysql:host=localhost;dbname=client_ligue;charset=utf8','root','');

     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
     //tester nos variables
     if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['age']) || isset($_POST['email'])){

         if(!$_POST['nom'] || !$_POST['prenom'] || !$_POST['age'] || !$_POST['email']){
             print "<p class=\"warning\">Vous avez oublié de remplir un ou plusieurs champs !</p>";
         }
         else if(is_numeric($_POST['nom']) || is_numeric($_POST['prenom'])){
             print "<p class=\"warning\">Vous devez saisir des caractères...</p>";
         }
         else{
             $req = $bdd->prepare('INSERT INTO clients(nom, prenom, age, email)VALUES(?,?,?,?)');
             $req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['email']));

             echo "<p class=\"success\">Merci le client a été ajouté ;)
             <a href=\"index.php\"Voir les publications récentes</a>
             </p>";
         }    
     }

?>