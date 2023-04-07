
<?php
    // Inputs
    $n = 3;
    $m = 1000;
    $arr1 = array(2, 5, 4);
    $arr2 = array(3, 7, 8, 9);
    $arr3 = array(5, 5, 7, 8, 9, 10);

    // Initialize max to 0
    $max = 0;

    // Loop through all possible combinations
    for($i=0; $i<$arr1[0]; $i++){
        for($j=0; $j<$arr2[0]; $j++){
            for($k=0; $k<$arr3[0]; $k++){
                // Calculate the mod and update the max
                $mod = ($arr1[$i+1] * $arr1[$i+1]) + ($arr2[$j+1] * $arr2[$j+1]) + ($arr3[$k+1] * $arr3[$k+1]) % $m;
                $max = max($max, $mod);
            }
        }
    }

    // Print out the result
    echo $max;
?>