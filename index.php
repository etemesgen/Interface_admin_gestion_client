 <?php
     require("./src/controlleur/controlleur.php");
     
      if(isset($_GET['action'])){
         if($_GET['action'] == 'ajouterLeClient'){
            ajouterClient();
         } 
         elseif($_GET['action'] == 'mettreAjour'){
            mettreAjourClient();
         }
         elseif($_GET['action'] == 'supprimer'){
            supprimerClient();
         }
         elseif($_GET['action'] == 'mettreAjourBdd'){
            mettreAjourBdd();
         }
      }
      else{
         afficherClient();
      }
?>