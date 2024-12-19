<?php
declare(strict_types=1);
/*
#Scalar Types
bool  true/false
int   1,2,30,-5 and so on (no decimal)
float  -1.5,0.1,0.2
string  "Gio","Aung"
#Compound Types
array  $compines=[1,2,3,,0.5,-9.2,true]
object 
callable
iterable
# Special Types
resources 
null  no values or nothing
*/
echo gettype(true);
echo var_dump(9.00);
echo var_dump([1,2,3,4,]);
//echck gettype to check type and var_dump()
//use stricttypes when declaring exactly in int

function sum($x,int $y){
    var_dump($x,$y);
    return $x +$y;
}
echo sum(2,3);
//type casting 
$x=(int) '2';

