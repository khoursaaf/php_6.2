<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Créer un tableau months et l'initialiser avec les valeurs suivantes :</p>
      <ol>
        <li>janvier</li>
        <li>février</li>
        <li>mars</li>
        <li>avril</li>
        <li>mai</li>
        <li>juin</li>
        <li>juillet</li>
        <li>aout</li>
        <li>septembre</li>
        <li>octobre</li>
        <li>novembre</li>
        <li>decembre</li>
      </ol>
      <?php
      $months = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];
      for ($i = 0; $i < 11 ; $i++) {
       ?>
      <p><?php echo $months[$i]; } ?></p>
    </body>
</html>
