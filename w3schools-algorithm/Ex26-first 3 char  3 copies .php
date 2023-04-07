<?php
function test($s, $n)
{
    $result = "";
    $frontofstring = 3;
    if($frontofstring > strlen($s))
       $sfrontofstring = strlen($s);
       $front = substr($s, 0, $frontofstring);
       for ($i = 0; $i < $n; $i++)
       {
        $result = $result.$front;
       }
       return $result;
}
echo test("python", 2)."\n";
echo test("python", 3)."\n";
echo test("js", 3)."\n";
?>