<?php
$name = "chris alan";
$parts = explode(" ",$name);
$parts[0] = ucfirst($parts[0]);
$parts[1] = ucfirst($parts[1]);
$name = implode(" ",$parts);
echo $name;
?>