<?php

function maxProduct(&$arr, $n)
{
    if ($n < 2)
    {
        echo("No pairs exists\n");
        return;
    }
 
    if ($n == 2)
    {
        echo ($arr[0]);
        echo (" ");
        echo($arr[1]);
        echo("\n");
        return;
    }
}
 // Initialize maximum and
    // second maximum
    $posa = 0;
    $posb = 0;
 
    // Initialize minimum and
    // second minimum
    $nega = 0;
    $negb = 0;
 
    // Traverse given array
    for ($i = 0; $i < $n; $i++)
    {
        // Update maximum and second
        // maximum if needed
        if ($arr[$i] > $posa)
        {
            $posb = $posa;
            $posa = $arr[$i];
        }
        else if ($arr[$i] > $posb)
            $posb = $arr[$i];
 
        // Update minimum and second
        // minimum if needed
        if ($arr[$i] < 0 &&
            abs($arr[$i]) > abs($nega))
        {
            $negb = $nega;
            $nega = $arr[$i];
        }
        else if($arr[$i] < 0 &&
            abs($arr[$i]) > abs($negb))
            $negb = $arr[$i];
    }
 
    if ($nega * $negb > $posa * $posb)
    {
        echo("Max product pair is {");
        echo $nega;
        echo(", ");
        echo ($negb);
        echo ("}");
    }
    else
    {
        echo("Max product pair is {");
        echo $posa;
        echo(", ");
        echo ($posb);
        echo ("}");
    }

 
// Driver Code
$arr = array(1, 4, 3, 6, 7, 0);
$n = sizeof($arr);
maxProduct($arr, $n);
 
?>
