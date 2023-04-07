<?php
$N = readline("enter the number of rows : ");
$M = readline("enter the number of columns :");
for($i=0;$i<$N/2;$i++) {
    $s = str_repeat(".|.",$i);
    echo str_pad($s,($M-2)/2 +$i,"-")."\n";
}
echo str_pad("WELCOME", $M,"-")."\n";
for($i=$N/2-1;$i>=0;$i--) {
    $s = str_repeat(".|.",$i);
    echo str_pad($s,($M-2)/2 +$i,"-").'.|.'.str_pad($s,($M-2)/2 +$i,"-")."\n";

}
?>  