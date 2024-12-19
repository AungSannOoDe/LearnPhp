<?php
//Array
//isset is have or not have
//indexed array
// $programminglanguages1="java";
// $programminglanguages2="php";
// $programminglanguages3="python";
// $programminglanguages=[$programminglanguages1,$programminglanguages2,$programminglanguages3];
// var_dump(isset($programminglanguages[1]));
// echo count($programminglanguages);
//  echo '<br>';
// array_push($programminglanguages,'C++','C','Go');

// echo count($programminglanguages);

//associative array
$programminglanguages=[
    'php'=>[
        'creator'=>'Rasdus Ledorf',
        'extension'=>'.php',
        'website'=>'www.php.net',
        'isOpenSource'=>true,
         'versions'=>[
            [
                'version'=>'8',
                'releaseDate'=>'Oct 5, 2020'
            ],
            [
                'version'=>'3.8',
                'releaseDate'=>'Dec 14 2021'
             ]
         ],
        

    ],
    'python'=>'3.9'
];
echo '<pre>';
print_r( $programminglanguages);
echo '</pre>';
echo '<br>';
//assign on method
$newlanguages='go';
$programminglanguages[$newlanguages]='1.15';
echo '<pre>';
print_r($programminglanguages);
echo '</pre>';
echo '<pre>';
echo $programminglanguages['php']['versions'][0]['version'];
echo '</pre>';
//if u do not have specific key ,it will specify 0,1,2
//if u have the same role in '1' it may be overwrite
$array=[
    true=>'a',
      1=>'b',
      '1'=>'c',
      1.2=>'d',
      null=>'e'
];
echo '<pre>';
print_r($array);
echo '</pre>';
//null is not required 
$arr=['a','b',50=>'c','d','e'];
// echo array_shift($arr);
// array index in array shift is reindex and index number 50 was lost and ist start 0,,1,2,...
// key is not number reindex is not done
//array shift is to produce array from index number 0
//unset is to remove array index
// unset($arr[50],$arr[1]);
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// $array=[1,2,3];
// unset($array[0],$array[1],$array[2]);
// $array[]=1;
// print_r($array);
$array=['a'=>1,'b'=>null];
//check array key is existed array_key_exists 
//isset check array value
//check array is existed 
var_dump(array_key_exists('a',$array));

