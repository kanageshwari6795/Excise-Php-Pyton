<?php
$str = trim(fgets(STDIN));
$str = str_replace(array('python', 'php'), array('@ython', 'python'),$str);
echo str_replace('@ython', 'php',$str), PHP_EOL;
?>