<?php
function recursiveSum($x, $y) {
  if ($y == 0) {
    return $x;
  } else {
    return recursiveSum(++$x, --$y);
  }
}

$result = recursiveSum(2, 3);
echo $result;  // Outputs 5
?>