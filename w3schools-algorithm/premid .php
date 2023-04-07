<?php
function primid($value)
{
    $k=strlen($value)-1;
    for($x = 0;$x <=$k;$x++){
        for($y = 0; $y <=$x;$y++){
            echo($value[$x]." ")."\n";
            
        }
        echo("<br>");
    }
}
primid("kanagu")
?>