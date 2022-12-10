<?php
while (true) {
  $numb1 = intval(readline('nomeri 1: '));
  $numb2 = intval(readline('nomeri 2: '));
  $enter = "\n";
  if ($numb1 === 0 || $numb2 === 0){
    echo('nomrebi ar aris mititebuli') . $enter;
    break;
  }
  elseif ($numb1 <= 100 && $numb2 <= 100) {
    echo ($numb1 * $numb2) . $enter;
    continue;
  } else {
    echo ('shecdoma') . $enter;
    continue;
  }

}

?>