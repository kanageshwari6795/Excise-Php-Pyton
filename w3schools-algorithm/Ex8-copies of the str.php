<?php
function test($str)
{
    return strlen($str) > 2 ? $str : substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2);

}
echo test("c sharp")."\n";
echo test("js")."\n";
echo test("a")."\n";
?>