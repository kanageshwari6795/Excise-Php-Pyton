<?php
$num_tests = readline();
 
for ($i = 0; $i < $num_tests; $i++) {
    $time1 = readline();
    $time2 = readline();
 
    $date1 = new DateTime($time1);
    $date2 = new DateTime($time2);
 
    $diff = $date1->diff($date2);
 
    echo $diff->format('%a') * 86400 . PHP_EOL;
}

?>