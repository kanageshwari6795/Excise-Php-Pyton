<?php
$alc = range('a', 'z');
function print_rangoli($size){
    global $alc;
    if($size == 1){
        echo $alc[0];
        return;
    }
    $alphaslice = array_slice($alc,0, $size);
    $rangoli = [];
    for ($i=0; $i < $size; $i++){
        $center = $alphaslice[$i];
        $halfline = join('-',array_slice($alphaslice,$i+1));
        $line = $halfline.'-'.strrev($halfline);
        array_push($rangoli,$line);

    }
    $padding = strlen($rangoli[0]);
    $mirrorrangoli = array_merge(array_reverse($rangoli),array_slice($rangoli, 1));
    foreach($mirrorrangoli as $line){
        echo str_pad($line,$padding,'-',STR_PAD_BOTH).PHP_EOL;
    }
}
if (isset($argv[1])){
    $size = (int)$argv[1];
    print_rangoli($size);
}
print_rangoli(5);
?>