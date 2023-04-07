const readline = require('readline');

const inp = readline.createInterface({

input: process.stdin });
let userInput=[] ;

inp.on("line", (data) => {
 userInput.push(data);
 

 
});  inp.on("close", () => {
    var data = userInput[0]
    console.log(data)
});


<?php
$userInput = readline();
echo $userInput;
?>


<?php
$handle = fopen("php://stdin", "r");
$userInput = fgets($handle);
echo $userInput;
?>