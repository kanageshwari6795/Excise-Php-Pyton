<?php
$string = "simple', 'is', 'better', 'than', 'complex";
$words  = explode(' ', $string);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
   if (strlen($word) > $longestWordLength) {
      $longestWordLength = strlen($word);
      $longestWord = $word;
   }
}

echo $longestWord;

?>
