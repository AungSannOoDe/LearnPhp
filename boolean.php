<?php
$isComplete='false';
//integers 0 -0=false;
//floats 0.0 -0.0=false;
// ''=false;
//[]=false;
//null=false;
var_dump($isComplete);
if($isComplete){
  echo "true";
}
else{
echo "Fail";
}
//is_bool check where it is boolean
