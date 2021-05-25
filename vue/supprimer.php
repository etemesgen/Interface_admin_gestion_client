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
  <a href="index.php"><p>VOIR LA LISTE DES UTILISATEURS ></p></a>
    <section id="formulaire_creer">
      <form action="#" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" placeholder="<?= $mettreAjour->afficherLeNom($_GET['idClient']) ?>" autofocus />
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" placeholder="<?= $mettreAjour->afficherLePrenom($_GET['idClient']) ?>" />
        <label for="age">Age :</label>
        <input type="text" name="age" id="age" placeholder="<?= $mettreAjour->afficherAge($_GET['idClient']) ?>" />
        <label for="email">Adresse Mail :</label>
        <input type="text" name="email" id="email" placeholder="<?= $mettreAjour->afficherEmail($_GET['idClient']) ?>" />
        <a href="index.php?action=mettreAjour&idClient"><input class="mettrej" type="submit" value="Mettre à jour" /></a>
        <i class="fa fa-pencil"></i>
        <a href="index.php?action=supprimerClient&supprimer"><input class="supprimer" type="submit" value="Supprimer" /></a>
        <i class="fa fa-times"></i>
        <?php $supprimer->supprimerClient('$id_client', "?", "?", "?", "?"); ?>
      </form>
    </section>
  </body>
</html>
