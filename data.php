<?php
  $letter = " " ;
  $number = " ";
  for ($i = 0; $i < 3; $i++) {
    $number .= rand(0, 10);
    $letter .= chr(64+rand(0,26));


  }
  // var_dump($number);
  // var_dump($letter);

  $numeropunti =  rand(10, 40);
  $numerorimbalzi = rand(5, 20);
  $falli =  rand(5, 15);
  $percentualeduepunti = rand(70, 80);
  $percentualetrepunti = rand(20, 40);

  for ($i=0; $i <100 ; $i++) {
    $giocatore= [
      'codice giocatore'=> $letter . $number,
      'numero punti'=> $numeropunti,
      'numero rimbalzi'=> $numerorimbalzi,
      'falli'=> $falli,
      'percentuale due punti'=> $percentualeduepunti,
      'percentuale tre punti'=> $percentualetrepunti,




    ];
  }
  var_dump($giocatore);
?>
