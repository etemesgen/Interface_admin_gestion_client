<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Maison des ligues</title>
  </head>
  <body>
    <section>
      <h1><i class="fa fa-cog"></i> Maison des ligues : Interface admin</h1>
    </section>

    <section id="table_gestion">
      <table>
        <tr>
          <th>Identifiant</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Age</th>
          <th>Adresse Mail</th>
        </tr>
        <tr>
          <td>
            <i class="fa fa-pencil"></i>
            <a href="./mettrej_supp.php">Modifier</a> ou
            <i class="fa fa-times"></i>
            <a href="./mettrej_supp.php">Supprimer</a>
          </td>
          <td>Eich</td>
          <td>Branden</td>
          <td>55</td>
          <td>brand67@gmail.com</td>
        </tr>
        <tr>
          <td>
            <i class="fa fa-pencil"></i> <a href="#">Modifier</a> ou
            <i class="fa fa-times"></i> <a href="#">Supprimer</a>
          </td>
          <td>Berners Lee</td>
          <td>Tim</td>
          <td>70</td>
          <td>tim@w3c.net</td>
        </tr>
        <?php
            include_once("./src/publication.inc.php");
        ?>
      </table>
      <br />
      <br />
      <a href="./creer_utilisateur.php" class="ajouter">+ Ajouter un client</a>
    </section>
  </body>
</html>
