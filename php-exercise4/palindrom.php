<?php
function palindrome($num) {
    $num = (string)$num;
    $len = strlen($num);
    $half = floor($len/2);
    $first = substr($num, 0, $half);
    $second = substr($num, $len%2 ? $half+1 : $half);
    $second = strrev($second);
    return $first.$second;
}

function biggestPalindrome($num) {
    $num = (string)$num;
    $len = strlen($num);
    $half = floor($len/2);
    $first = substr($num, 0, $half);




    
    $second = substr($num, $len%2 ? $half+1 : $half);
    $second = strrev($second);
    $first = (int)$first;
    $second = (int)$second;
    if ($first > $second) {
        $first--;
        $second = 9;
    }
    $first = (string)$first;
    $second = (string)$second;
    return $first.$second;
}
?>
