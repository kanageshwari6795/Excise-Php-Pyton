<?php
$str = "aabbbbccde";
$arr = str_split($str);
$counts = array_count_values($arr);
arsort($counts);
foreach ($counts as $key => $val) {
    echo $key, ' ', $val, "\n";
}
?>