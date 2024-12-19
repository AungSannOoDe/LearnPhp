<?php
/* operators */
//Arithematic operators (+,-,/,%,*)
//division by zero is fdiv($x,$y) is inf
//fmod is mod float number
  $x=10.5;
  $y=2.9;
  print_r(fmod($x,$y) );
//assignment operators(=,+=,-=,*=,/=,%=)
//string operator(,+=)

//Comparsion Operators(==,===,!=,!===,<>,<==>,??,?:)
//<=> equal return 0, x less than y return -1,x greater than y return 0
//== check value only === check type and value
$x=5; $y=10;
var_dump($x ?? $y);
$x='Hello';
$y=strpos($x,'H');
$result =$y===false ? 'H not foung':'H found at index'.$y;
echo $result;
$x=null;
// for null and undfeined value use ? change last words
$y= false ?? "hello";
echo $y;
//incremental operator
//incremental is not changing for boolean and  object 
//incremental is effective for character for example abc is increment is effect abd
// not effective in decremental operator 
$x='abc';
echo ++$x;
//logical operator (||,&&, and or not)
var_dump(true or false);
$x=true;
$y=false;
function hello(){
  echo "Hello world";
  return true;
}
var_dump( true || hello());
//bitsiwse operator(&,|,^,<<,>>) flip and shift
$x=6;
$y=2;
var_dump($x & $y);
// Array Operator(+ = == != <> !==)
//+ append array every thing append to array and if key is the same is overwrite
$x=['a'=>1,'b'=>2,'c'=>3,'d'=>4];
$y=['a'=>5,'e'=>6,'f'=>7];
var_dump($x ==$y);

/* Operator Precedure and Association */
//and is lower than &&
$x=5+3*5;
echo $x;




