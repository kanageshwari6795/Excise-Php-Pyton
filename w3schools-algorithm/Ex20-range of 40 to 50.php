<?php
function test($x, $y) 
{
    return ($x >= 40 && $x <= 50 && $y >= 40 && $y <= 50) || ($x >= 50 && $x <= 60 && $y >= 50 && $y <= 60);
}

var_dump(test(78, 95));
var_dump(test(25, 35));
var_dump(test(40, 50));
var_dump(test(55, 60));
?>