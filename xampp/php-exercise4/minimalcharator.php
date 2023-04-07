<?php
function minChange($str) {
    $len = strlen($str);
    $count = 0;
    $char = $str[0];
    for($i=0; $i&lt;$len; $i++) {
        if($str[$i] != $char) {
            $count++;
        }
    }
    return $count;
}
?>
