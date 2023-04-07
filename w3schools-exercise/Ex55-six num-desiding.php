<?php
$stdin = trim(fgets(STDIN));
$num = explode(" ", $stdin);
rsort($nums);
print("After sorting the said integers:\n");
echo implode(' ', $nums);
?>