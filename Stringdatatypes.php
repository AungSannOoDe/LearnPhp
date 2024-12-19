<?php 
/*String*/
// a series of characters
//$name[1] is second character and -1 is last character
$firstName='Will';
$lastname='smith';
$name=$firstName.''.$lastname;
echo $name[-1];

//heredoc is double quotes and print value
//'' is change to "

 $text=<<<TEXT
    Hello world
 TEXT;
 echo  nl2br($text);
 var_dump($text);
//Nowdoc is single quotes and peint name
// can not write block tag
$text=<<< 'TEXT'

 TEXT;
 echo  nl2br($text);