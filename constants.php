<?php
//Constants
//define constants define():run time
//defined defined()
//const created at compile time
//if you write const inside if condition they will be expected at error
const FOO="poo";
if(true){
    define('STATUS_PAID',9);
}
$paid="PAID";
 define('STATUS_',$paid,4);
 echo STATUS_PAID;
 echo __LINE__;
 echo __FILE__;
 echo PHP_VERSION; //check php version
 $foo='bar';
 $$foo='baz';
 echo $foo, ${$foo};
 //use one variable to two values