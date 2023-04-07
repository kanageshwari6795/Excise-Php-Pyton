
<?php
    $string = 'Python@Php2';  
    //Checking for any alphanumeric characters 
    if(ctype_alnum($string))  
    {  
        echo "True \n";  
    }  
    else  
    {  
        echo "False \n";  
    }
    
    //Checking for any alphabetical characters  
    if(ctype_alpha($string))  
    {  
        echo "True \n";  
    }  
    else  
    {  
        echo "False \n";  
    }
    //Checking for any digits  
    if(ctype_digit($string))  
    {  
        echo "True \n";  
    }  
    else  
    {  
        echo "False \n";  
    }
    //Checking for any lowercase characters  
    if(ctype_lower($string))  
    {  
        echo "True \n";  
    }  
    else  
    {  
        echo "False \n";  
    }
    //Checking for any uppercase characters  
    if(ctype_upper($string))  
    {  
        echo "True \n";  
    }  
    else  
    {  
        echo "False \n";  
    }
?>