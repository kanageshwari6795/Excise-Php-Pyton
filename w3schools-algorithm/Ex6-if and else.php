<?php
function test($s, $n)
{
    return substr($s,0,$n).substr($s,$n+1).strlen($s-$n);
}
echo test("python",1). "\n";
echo test("python",0)."\n";
echo test("python",4)."\n";
?>