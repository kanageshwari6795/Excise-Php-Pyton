<?php
  function mutate_string($string, $position, $character) {
        // Get the length of the string
        $length = strlen($string);
        // Create a new string
        $newString = "";
        for($i = 0; $i < $length; $i++) {
            // If the position is equal to the current index
            if($i == $position) {
            // Replace the character with the given one
            $newString .= $character;
            }
            // Else just add the character to the string
            else {
            $newString .= $string[$i];
            }
        }
        // Return the new string
        return $newString;
    }
    
    $s = 'abracadabra';
    $position = 5;
    $character = 'k';
    $result = mutate_string($s, $position, $character);
    echo $result . "\n";
    
    $position2 = 6;
    $character2 = 'z';
    $result2 = mutate_string($s, $position2, $character2);
    echo $result2;
?>