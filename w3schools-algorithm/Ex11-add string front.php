<?php
function test($str)
{
    if (strlen($str) < 3)
    {
        return $str.$str.$str;
    }
    else
    {
        $front = substr($str, 0, 3);
        return $front.$str.$front;
    }
}
echo test("python")."\n";
echo test("js")."\n";
echo test("code")."\n";
?>