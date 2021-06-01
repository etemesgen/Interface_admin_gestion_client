<?php
    require_once("./src/modele/ajouterClient.inc.php");
    require_once("./src/modele/affichageClient.inc.php");
    require_once("./src/modele/supprimerClient.inc.php");
    require_once("./src/modele/mettreAjourClient.inc.php");


    function afficherClient(){
        $afficherLeClient = new AffichageClient();
        require("./vue/publier_utilisateur.php");
    }

    function ajouterClient(){
        $ajouterLeClient = new AjouterClient();
        // $ajouterLeClient->insererClient();
        require("./vue/creer_utilisateur.php");
    }

    function supprimerClient(){
        $supprimer = new SuppressionClient();
        $supprimer->supprimerClient();
        require("./vue/supprimer.php");
    }

    function mettreAjourClient(){
        $mettreAjour = new MettreAjourClient();
        // $mettreAjour->clientAjour();
        require("./vue/mettre_a_jour.php");
    }
?>