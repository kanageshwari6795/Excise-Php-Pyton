<?php
list($n,$m)=explode("",trim(fgets(STDIN)));
$table = array();
for($i = 0;$i<$n;$i++){
    $table[] = explode("",trim(fgets(STDIN)));
}
$k = intval(trim(fgets(STDIN)));
for($i = 0;$i<$n;$i++){
    for ($j = 0;$j<$n-$i-1;$j++){
        $temp = $table[$j];
        $table[$j]=$table[$j+1];
        $table[$j+1]=$temp;
    }
}

foreach ($table as $row){
    echo implode("",$row).PHP_EOL;
}
?>