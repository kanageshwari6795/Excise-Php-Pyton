<?php
function print_formatted($number)
{
    $nbin = decbin($number);
    $size = strlen($nbin);
    for($i = 1; $i < $number; $i++)
    {
        $octa = decoct($i);
        $hexa = dechex($i);
        $bina = decbin($i);
        echo str_pad($i, $sine, " ",STR_PAD_LEFT).str_pad($octa, $size, " ", STR_PAD_LEFT).
        str_pad($hexa, $size, " ", STR_PAD_LIFT).str_pad($bina,$size, " ", STR_PAD_LIFT)."\n";
    
    }
}
$number = 15;
print_formatted($number);
?>