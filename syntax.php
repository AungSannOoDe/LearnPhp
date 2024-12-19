<?php
$firstname="Gio";
echo  'Hello $firstname';
//if code of 100 percent is php you do not need close tag 
// echo print mean which  the world echo can 
// u can use echo() and u can use print()
//when u write 'Hello','','world' the mean of the world is the same
// you use Joe's Invovice it gets errors and u should use 'Joe \'s Invoice'
// Variable is starting with $ 
//Rules of variable is not starting number,specail characters
// & mean if  x variables  changes y variables changes
//if '' u can get variable name instead we can use {} or ""
//& mean chnage in final values
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax</title>
 </head>
 <body>

    <p>
        <?php
        $x=1   ;
        $y=&$x;
        $x=3;
        echo  $y;
        ?>
    </p>
 </body>
 </html>
