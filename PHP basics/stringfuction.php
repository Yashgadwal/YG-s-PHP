<?php
echo   'Stringfuction In PHP'  ;
$name = 'YG  ';
$pro = 'Biggest Programmer Of all times';
echo   '<br>'  ;
echo strlen($name) ; //It will return string length
echo '<br>' ;
echo str_word_count("Hello World mixed"); //It will return The Words of String
echo '<br>' ;
echo strrev($pro); //It will Reverse The String
echo '<br>' ;
echo strpos($pro,"o");
echo '<br>' ;
echo str_replace("all"/*Old Word*/,"world"/*NewWord*/,$pro/*VarName*/); //It will replace 
echo '<br>' ;
echo str_repeat("YG Will Become's The Worlds biggest Programmer <br>",5);


?>
