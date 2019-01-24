<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php

      include 'data.php';
    ?>
    <ul>
      <?php foreach ($giocatori as $data) { ?>

          <li>Codice giocatore: <?php echo  $data['codice giocatore'] ?></li>
          <li>Numero punti:<?php echo  $data['numero punti'] ?></li>
          <li>Numero rimbalzi: <?php echo  $data['numero rimbalzi'] ?></li>
          <li>Falli: <?php echo  $data['falli'] ?></li>
          <li>Percentuale due punti: <?php echo  $data['percentuale due punti'] ?></li>
          <li>Percentuale tre punti: <?php echo  $data['percentuale tre punti'] ?></li>
           <?php echo "<br>";  ?>


       <?php }  ?>
    </ul>


  </body>
</html>
