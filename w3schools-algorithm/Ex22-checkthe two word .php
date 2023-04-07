<?php
function test($s)
{
    $ctr = 0;
    for ($i = 0; $i < strlen($s); $i++)
    {
        if (substr($s, $i, 1) == 'z')
         {

            $ctr++;
         }
    }
    return $ctr > 1 && $ctr < 4;     

}
var_dump(test("frizz"));
var_dump(test("zane"));
var_dump(test("zazz"));
var_dump(test("false"));
?>