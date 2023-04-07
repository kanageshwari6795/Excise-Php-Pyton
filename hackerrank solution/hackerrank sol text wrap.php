<?php
function wrap($string, $max_width)
{
    for ($i = 0; $i<strlen($string); $i+= $max_width){
        $line = substr($string, $i, $max_width);
        if(strlen($line) < $max_width) {
            return $line;
        }
        echo $line. "\n";
    }
}
$string = "abcdefghijklmnopqrstuvwxyz 1234567890";
$max_width = "5";
echo wrap($string, $max_width);
?>