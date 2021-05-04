<!-- Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

  $matches = [
    [
      'squadra_casa' => 'Fortitudo',
      'squadra_ospite' => 'Virtus',
      'punti_casa' => 20,
      'punti_ospite' => 35
    ],
    [
      'squadra_casa' => 'Lakers',
      'squadra_ospite' => 'Chicago Bulls',
      'punti_casa' => 55,
      'punti_ospite' => 70
    ],
  ];

  foreach ($matches as $elemento) {
    echo $elemento['squadra_casa'] . " - " . $elemento['squadra_ospite'] . " | " . $elemento['punti_casa'] . " - " . $elemento['punti_ospite'];
  }

?>
   
</body>
</html>