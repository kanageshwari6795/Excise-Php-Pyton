<?php
function swapcase($s) {
    $result = "";
    for ($i = 0; $i<strlen($s); $i++) {
        $char = $s[$i];
        if(ctype_lower($char)){
            $result .= strtoupper($char);
        } else {
            $result .= strtolower($char);
        }
    }
    return $result;
}
echo swapcase("Hello World") ."\n";
echo swapcase("UpperCase") ."\n";
echo swapcase("HackerRank") ."\n";
?>