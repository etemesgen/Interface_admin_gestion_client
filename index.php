 <?php
     require("./src/controlleur/controlleur.php");

     switch(isset($_GET['action'])){
        case "ajouterLeClient":
        ajouterClient(); 
        break;
        
        case "mettreAjour&id_client":
        mettreAjourClient();
        break;
        
        case "supprimerClient":
        supprimerClient();
        break;

        default : afficherClient();
     }
?>