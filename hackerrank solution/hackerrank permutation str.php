<?php
function permutations($str, $n) {
    if (strlen($str) < $n)
    return;
    if (strlen($str) == $n) {
        echo $str . "\n";
        return;
    }
    for ($i = 0; $i < strlen($str); $i++) {
        $curr = $str[$i];
        $remaining_string = substr($str, 0, $i) . substr($str, $i + 1);
        permutations($remaining_string, $n);
    }
}
$str = readline("Enter string: ");
$n = readline("Enter length: ");
permutations($str, $n);
?>