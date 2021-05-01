<?php
    //selectionner la base
    try{// On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=client_ligue', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `clients` LIMIT 5');     /* LIMIT 1 : limite la liste à afficher*/ 
    
    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()){
        echo '<table>
                <tr>
                    <td>
                        <i class="fa fa-pencil"></i>
                        <a href="./mettre_a_jour.php?'.$donnee['id_client']. ' ">Modifier</a> ou
                        <i class="fa fa-times"></i>
                        <a href="./supprimer.php?'.$donnee['id_client']. ' ">Supprimer</a>
                    </td>
                    <td>'.$donnee['nom'].'</td>
                    <td>'.$donnee['prenom'].'</td>
                    <td>'.$donnee['age'].'</td>
                    <td>'.$donnee['email'].'</td>
                </tr>
               </table>';
        }
    $reponse->closeCursor(); // Termine le traitement de la requête

    }
    //partie finale
    catch(Exception $e){
    // En cas d'erreur précédemment, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
    }
?>
