<?php
function convertLast3ToUpper($str) {
  if (strlen($str) < 3) {
    return strtoupper($str);
  } else {
    $last3 = strtoupper(substr($str, -3));
    $rest = substr($str, 0, -3);
    return $rest . $last3;
  }
}

// Example usage:
echo convertLast3ToUpper("Python"); // Output: PytHON
echo convertLast3ToUpper("Javascript"); // Output: JavaSCRIPT
echo convertLast3ToUpper("js"); // Output: JS
echo convertLast3ToUpper("PHP"); // Output: PHP (no change)
?>
<?php
function test($s) 
{
   return strlen($s) < 3 ? strtoupper($s) : substr($s, 0, strlen($s) - 3).strtoupper(substr($s, strlen($s) - 3));
 }


echo test("Python")."\n";
echo test("Javascript")."\n";
echo test("js")."\n";
echo test("PHP")."\n";
?>
