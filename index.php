<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      include 'data.php';
    ?>
    <ul>
      <?php foreach ($giocatori as $key => $data) { ?>
          
          <li><?php echo  $data['codice giocatore'] ?></li>   <?php echo "<br>";  ?>
          <li><?php echo  $data['numero punti'] ?></li>   <?php echo "<br>";  ?>
          <li><?php echo  $data['numero rimbalzi'] ?></li>   <?php echo "<br>";  ?>
          <li><?php echo  $data['falli'] ?></li>   <?php echo "<br>";  ?>
          <li><?php echo  $data['percentuale due punti'] ?></li>   <?php echo "<br>";  ?>
          <li><?php echo  $data['percentuale tre punti'] ?></li>   <?php echo "<br>";  ?>


       <?php }  ?>
    </ul>


  </body>
</html>
