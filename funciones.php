<?php
function mayor($a, $b, $c = 100){

  if($a>$b && $a>$c) {
    return $a;
  }
  if($b>$a && $b>$c) {
    return $b;
  }
  return $c;
}

function tabla($base, $limite = 100){
  $unArray = [];
  for ($i=$base; $i <= $limite ; $i++) {
      $unArray[] = $i;
    }

  return $unArray;
}

echo mayor(2,3,4);
echo "<br>";
echo "<pre>";
var_dump(tabla(30,35));
echo "</pre>";


 ?>
