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
        <?php
            $afficherLeClient->publierLeClient();
        ?>
      </table>
      <br />
      <br />
      <a href="index.php?action=ajouterLeClient" class="ajouter">+ Ajouter un client</a>
    </section>
  </body>
</html>
