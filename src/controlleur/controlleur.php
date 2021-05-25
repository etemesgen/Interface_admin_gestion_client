<?php
    require_once("./src/modele/insertion.inc.php");
    require_once("./src/modele/publication.inc.php");
    require_once("./src/modele/supprimer.inc.php");
    require_once("./src/modele/mettrej.inc.php");


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