<?php
  function letterandnumber() {
    $letter = " " ;
    $number = " ";
    for ($i = 0; $i < 3; $i++) {
      $number .= rand(0, 10);
      $letter .= chr(rand(65,90));


    }
    return $letter . $number;
  }

  // var_dump($number);
  // var_dump($letter);


  $giocatori = [];
  for ($i=0; $i <100 ; $i++) {
    $giocatore= [
      'codice giocatore'=> letterandnumber(),
      'numero punti'=> rand(10, 40),
      'numero rimbalzi'=> rand(5, 20),
      'falli'=> rand(5, 15),
      'percentuale due punti'=> rand(70, 80),
      'percentuale tre punti'=> rand(20, 40),




    ];
    array_push($giocatori, $giocatore);
  }
  // var_dump($giocatori);

?>
