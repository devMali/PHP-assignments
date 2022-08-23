<?php

$cars=array('BMW','Audi','Range Rover','Mercedes');

sort($cars);
print_r($cars);

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($cars);

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
print_r($cars);


$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
print_r($cars);

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
print_r($cars);

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
rsort($age);
print_r($cars);

shuffle($cars);
print_r($cars);

print_r(array_reverse($aage));

array_push($cars,"maruti");
print_r($cars);

array_pop($cars);
print_r($cars);

echo "<br><br>current() Function<br>";
echo current($cars);


echo "<br><br>reset() Function<br>";
echo current($cars) . "<br>";
echo next($cars) . "<br>";

echo reset($cars);


echo "<br><br>end() Function<br>";
echo end($cars);


echo "<br><br>pos() Function<br>";
echo pos($cars);


echo "<br><br>pos() Function<br>";
echo current($cars) . "<br>";
echo next($cars) . "<br>";
echo prev($cars);


echo "<br><br>array_walk() Function<br>";
function myfunction($value,$key)
{
    echo "The key $key has the value $value<br>";
}
$a=array("car"=>"volvo","bike"=>"Honda","Cycle"=>"Hero");
array_walk($a,"myfunction");


echo "<br><br>count() Function<br>";
echo count($cars);

echo "<br><br>sizeof() Function<br>";
echo sizeof($cars);


echo "<br><br>array_count_values() Function<br>";
print_r(array_count_values($a));

echo "<br><br>extract() Function<br>";

$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "a = $a; b = $b; c = $c";


?>