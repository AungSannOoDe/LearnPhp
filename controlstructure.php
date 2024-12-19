<?php
//if else elseif
$score=95;
if($score>=90){
    echo 'A';
    if($score>90){
        echo 'A+';
    }
}
else if($score>=80){
    echo 'B';
}
else if($scroe>=70){
    echo 'C';
}
else if($score>=60){
    echo 'D';
}
else{
    echo 'F';
}