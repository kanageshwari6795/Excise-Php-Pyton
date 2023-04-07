<?php
function split_and_join($string) {
    $words = explode("", $string);
    $joined_string = implode("-", $words);
    return $joined_string;
}
$string = "this is a string";
echo split_and_join($string);
?>
