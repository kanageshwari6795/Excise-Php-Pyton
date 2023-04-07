<?php
function test($s, $n)
{
    $result = "";
    for ($i = 0; $i < $n; $i++)
    {
        $result = $result.$s;
    }
    return $result;
}
echo test("js", 2)."\n";
echo test("js", 3)."\n";
echo test("js", 1)."\n";
?>