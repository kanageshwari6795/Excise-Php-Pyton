<?php 
 
$string = 'BANANA'; 
 
// Kevin's score 
$kevin_score = 0; 
 
// Stuart's score 
$stuart_score = 0; 
 
// Kevin will make words which 
// starts with vowels 
$vowels = array('A', 'E', 'I', 
				'O', 'U'); 
 
// Stuart will make words which 
// starts with consonants 
$consonants = array('B', 'C', 'D', 
					'F', 'G', 'H', 
					'J', 'K', 'L', 
					'M', 'N', 'P', 
					'Q', 'R', 'S', 
					'T', 'V', 'W', 
					'X', 'Y', 'Z'); 
 
// Loop through the length of 
// the string 
for ($i = 0; $i < strlen($string); $i++) 
{ 
	// Check for vowels 
	if (in_array($string[$i], $vowels)) 
		$kevin_score += (strlen($string) - $i); 
		
	// Check for consonants 
	if (in_array($string[$i], $consonants)) 
		$stuart_score += (strlen($string) - $i); 
} 
 
// Finally we print who is the winner 
if ($kevin_score > $stuart_score) 
	echo "Kevin " . $kevin_score; 
else if ($kevin_score < $stuart_score) 
	echo "Stuart " . $stuart_score; 
else
	echo "Draw"; 
 
?>