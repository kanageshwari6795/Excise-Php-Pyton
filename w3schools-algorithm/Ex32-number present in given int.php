<?php
function test($nums, $n)
{
    if (in_array($n, $nums))
    return true;
    return false;
}
var_dump(test(array(1,2,9,3), 3));
var_dump(test(array(1,2,2,3), 2));
var_dump(test(array(1,2,2,3), 9));
?>