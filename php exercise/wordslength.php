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
<?php
$string = "simple', 'is', 'better', 'than', 'complex";
function reduce($v, $p) {
    return strlen($v) > strlen($p) ? $v : $p;
}

echo array_reduce(str_word_count($string, 1), 'reduce'); 
?>