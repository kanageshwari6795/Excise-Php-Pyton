<?php
$A = array(1,2);
$B = array(3,4);
$AxB = array();
foreach ($A as $eleA){
    foreach ($B as $eleB){
        $AxB[] = array($eleA,$eleB);
    }
}
foreach($AxB as $pair){
    echo "(" . $pairs[0] . "," . $pairs[1] . ")";

}
?>