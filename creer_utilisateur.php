<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/creer_utilisateur.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Créer un utilisateur</title>
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
        <label for="email">Adresse Mail:</label>
        <input type="text" name="email" id="email" placeholder="" />
        <input type="submit" value="Créer" /> <i class="fa fa-pencil"></i>
      </form>
      <?php
        include_once("./src/insertion.inc.php");
      ?> 
    </section>
  </body>
</html>
