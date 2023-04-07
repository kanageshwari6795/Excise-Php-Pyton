
<?php

// function to check if a string is a valid email
function isValidEmail($email){
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
    if(preg_match($pattern, $email)){
        return true;
    }else{
        return false;
    }
}

// get the number of emails
$num = intval(fgets(STDIN));

// store all the emails in an array
$emails = array();
for($i=0; $i<$num; $i++){
    $emails[] = trim(fgets(STDIN)); 
}

// filter out the invalid emails
$valid_emails = array_filter($emails, 'isValidEmail');

// sort the emails lexicographically
sort($valid_emails);

// print the output
echo implode("\n", $valid_emails);

?>