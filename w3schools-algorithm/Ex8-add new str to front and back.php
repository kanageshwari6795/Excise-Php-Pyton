<?php
function test($str)
{
    $s = substr($str, srtlen($str) - 1);
    return $s.$str.$s;

}
echo test("red")."\n";
echo test("green")."\n";
echo test("1")."\n";
?>