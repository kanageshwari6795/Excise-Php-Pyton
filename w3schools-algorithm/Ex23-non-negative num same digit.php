<?php
function test($x,$y)
{
    return abs($x % 10) == abs($y % 10);
}
var_dump(test(123, 456));
var_dump(test(12, 512));
var_dump(test(7, 87));
var_dump(test(12,45));
?>