<?php

$a = 10;

function increment(&$b) {
  $b++;
}

increment($a);

echo $a; // prints 11



?>