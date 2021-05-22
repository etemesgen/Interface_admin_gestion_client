<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/mettrej_supp.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Mettre à jour ou supprimer utilisateur</title>
  </head>
  <body>
  <a href="index.php"><p>VOIR LA LISTE DES UTILISATEURS ></p></a>
    <section id="formulaire_creer">
      <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      <?php $supprimer->supprimerClient()?>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" placeholder="" autofocus />
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" placeholder="" />
        <label for="age">Age :</label>
        <input type="text" name="age" id="age" placeholder="" />
        <label for="email">Adresse Mail :</label>
        <input type="text" name="email" id="email" placeholder="" />
        <input class="mettrej" type="submit" value="Mettre à jour" />
        <i class="fa fa-pencil"></i>
        <a href="./src/supprimer.inc.php?action=supprimer"><input class="supprimer" type="submit" value="Supprimer" /></a>
        <i class="fa fa-times"></i>
      </form>
    </section>
  </body>
</html>