<?php
$arr = array(161, 182, 161, 154, 176, 170, 167, 171, 170, 174);

//We create a new array which will contain only the distinct elements from the original array 
//by looping through the original array and adding each element to the new array if it is not already present 
$distinct_arr = array();

foreach($arr as $value) {
    if (!in_array($value, $distinct_arr)) {
        $distinct_arr[] = $value;
    }
}

//We then calculate the sum of the elements in the new array
$total = 0;
foreach($distinct_arr as $value) {
    $total += $value;
}

//Finally, we calculate the average by dividing the total by the number of elements in the array
$average = round($total/count($distinct_arr), 3);

echo $average;
?>