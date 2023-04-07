<?php

function minChanges($str)
{
    $n = strlen($str);
 
    if ($n > 26)
    return -1;
    
    $dist_count = 0;
     
    $count = array_fill(0, 26, 0);
    for ($i = 0; $i < $n; $i++)
    {
        if ($count[ord($str[$i]) - 97] == 0)
            $dist_count++;
        $count[ord($str[$i]) -97]++;
    }
 
    return ($n - $dist_count);
}
 
$str = "abcd";
echo minChanges($str);
 
?>