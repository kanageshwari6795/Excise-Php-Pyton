<?php
function test($s)
{
    $result = "";
    for ($i = 0; $i < strlen($s); $i++)
    {
        if ($i % 2 == 0)
        $result = $result.substr($s,$i,1);
    }
    return $result;
}
echo test("python")."\n";
echo test("php")."\n";
echo test("js")."\n";
?>
function getEvenChars($str) {
  $result = "";
  for ($i = 0; $i < strlen($str); $i++) {
    if ($i % 2 === 0) { // If the index is even
      $result .= substr($str, $i, 1); // Append the even-position character to the result string
    }
  }
  return $result;
}

// Example usage:
echo getEvenChars("Python"); // Output: "Pto"
echo getEvenChars("PHP"); // Output: "PP"
echo getEvenChars("JS"); // Output: "J"
