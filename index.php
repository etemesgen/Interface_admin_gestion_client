 <?php
     require("./src/controlleur/controlleur.php");

     switch($_GET['action']){
        case "ajouterLeClient":
        ajouterClient(); 
        break;
        
        case "mettreAjour":
        mettreAjourClient();
        break;
        
        case "supprimerClient":
        supprimerClient();
        break;
         
        default : afficherClient();
     }
?>