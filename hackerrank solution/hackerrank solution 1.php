<?php
$string = "aabbbccde";
$char_count = count_char($string, 1);
arsort($char_count);
$i=1;
foreach($char_count as $char => $count)
{
    if($i<=3)
    
    {
        echo "charcter '".chr($char)."'occurred $count times\n";
    }
    $i++;
}
?>