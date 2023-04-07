<?php
$x = 2;
$y = 2;
$z = 2;
$n = 2;
$coordinates = [];
for ($i=0; $i<$x+1; $i++){
    for ($j=0; $j<$y+1; $j++){
        for ($k=0; $k<$z+1; $k++){
            if($i + $j + $k !=$n){
                $coordinates[] = [$i, $j, $k];

            }
            
        }
    }
}
sort($coordinates);
echo json_encode($coordinates);
?>