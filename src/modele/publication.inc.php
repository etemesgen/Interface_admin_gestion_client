<?php
    require_once("./src/modele/bdd.inc.php");

    class AffichageClient extends ConnexionBdd{

        function publierLeClient(){
        // On récupère tout le contenu   
        $reponse = $this->seConnecter()->query('SELECT * FROM `clients` LIMIT 20');     /* LIMIT 1 : limite la liste à afficher*/ 
    
        // On affiche chaque entrée une à une
        while ($donnee = $reponse->fetch()){
            echo '<table>
                    <tr>
                        <td>
                            <i class="fa fa-pencil"></i>
                            <a href="./index.php?action=mettreAjour&idClient='.$donnee['id_client']. ' ">Modifier</a> ou
                            <i class="fa fa-times"></i>
                            <a href="./index.php?action=supprimer&supprimer='.$donnee['id_client']. ' ">Supprimer</a>
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
    }
?>