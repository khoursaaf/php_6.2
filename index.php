<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
    <a href="index.php?lastname=Nemare&amp;firstname=Jean&amp;age=12">Afficher dans url!</a>
    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])) { ?>
    <p>
      <?= 'Les paramètres sont bien présent.'; ?>
    </p>
    <?php
    }
    else {
    ?>
    <p>
      <?= 'Les paramètres ne sont pas présent'; }?>
    </p>
  </body>
</html>
