<?php
echo "Welcome to scope and local/global vars in php<br>";
$a=98; // Global Variable
$b=9;
function printValue(){
    // $a=97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    echo "The value of your variable is $a";
}
echo $a;
printValue();
?>