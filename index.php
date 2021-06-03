 <?php
     require("./src/controlleur/controlleur.php");
     
      if(isset($_GET['action'])){
         if($_GET['action'] == 'ajouterLeClient'){
            ajouterClient();
         } 
         elseif($_GET['action'] == 'mettreAjour'){
            mettreAjourClient();
         }
         elseif($_GET['action'] == 'supprimerClient'){
            supprimerClient();
         }
         elseif($_GET['action'] == 'mettreAjourBdd'){
            mettreAjourBdd();
         }
      }
      else{
         afficherClient();
      }
  /*   switch(isset($_GET['action'])){
        case $_GET['action'] == "ajouterLeClient":
        ajouterClient(); 
        break;
        
        case $_GET['action'] == "mettreAjour":
        mettreAjourClient();
        break;
        
        case $_GET['action'] == "supprimerClient":
        supprimerClient();
        break;
         
        default : afficherClient();
     }*/
?>