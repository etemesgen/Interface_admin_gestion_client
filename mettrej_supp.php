<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/mettrej_supp.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Mettre à jour ou supprimer utilisateur</title>
  </head>
  <body>
    <p>VOIR LA LISTE DES UTILISATEURS ></p>
    <section id="formulaire_creer">
      <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" placeholder="" autofocus />
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" placeholder="" />
        <label for="age">Age:</label>
        <input type="text" name="age" id="age" placeholder="" />
        <label for="mail">Adresse Mail:</label>
        <input type="text" name="mail" id="mail" placeholder="" autofocus />
        <input class="mettrej" type="submit" value="Mettre à jour" />
        <i class="fa fa-pencil"></i>
        <input class="supprimer" type="submit" value="Supprimer" />
        <i class="fa fa-times"></i>
      </form>
      <?php
        include_once("./src/modification.inc.php");
      ?>
      <?php
        include_once("./src/publication.inc.php");
      ?>
    </section>
  </body>
</html>
