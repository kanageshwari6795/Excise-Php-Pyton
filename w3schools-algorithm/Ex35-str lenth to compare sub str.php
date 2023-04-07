<?php
function test($s1, $s2)
{
    $ctr = 0;
    for ($i = 0; $i < strlen($s1)-1; $i++)
    {
        $firststring = substr($s1, $i, 2);
        for ($j = 0; $j < strlen($s2)-1; $j++)
        {
            $secondstring = substr($s2, $j, 2);
            if ($firststring == $secondstring)
            $ctr++;
        }
    }
    return $ctr;
}
echo (test("abcdefgh", "abijsklm"))."\n";
echo (test("abcde", "osuefrcd"))."\n";
echo (test("pqrstuvwx","pqkdiewx"))."\n";
?>