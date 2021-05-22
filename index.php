 <?php
     require("./src/controlleur/controlleur.php");

     switch(isset($_GET['action'])){
        case "ajouterLeClient":
        ajouterClient(); 
        break;
        
        case "mettreAjour&idClient":
        mettreAjourClient();
        break;
        
        case "supprimerClient&supprimer":
        supprimerClient();
        break;

        default : afficherClient();
     }
?>