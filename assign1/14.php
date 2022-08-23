<?php

$cars=array('BMW','Audi','Range Rover','Mercedes');

/*The each() function returns the current element key and value, and moves the internal pointer forward.
echo "<br>each() Function<br>";
$a= each($cars);
print_r($a);*/

//The current() function returns the value of the current element in an array.
echo "<br><br>current() Function<br>";
echo current($cars);

//The reset() function moves the internal pointer to the first element of the array.
echo "<br><br>reset() Function<br>";
echo current($cars) . "<br>";
echo next($cars) . "<br>";

echo reset($cars);

//The end() function moves the internal pointer to, and outputs, the last element in the array.
echo "<br><br>end() Function<br>";
echo end($cars);

//The pos() function returns the value of the current element in an array.
echo "<br><br>pos() Function<br>";
echo pos($cars);

//The prev() function moves the internal pointer to, and outputs, the previous element in the array.
echo "<br><br>pos() Function<br>";
echo current($cars) . "<br>";
echo next($cars) . "<br>";
echo prev($cars);

//The array_walk() function runs each array element in a user-defined function. 
//The array's keys and values are parameters in the function

echo "<br><br>array_walk() Function<br>";
function myfunction($value,$key)
{
    echo "The key $key has the value $value<br>";
}
$a=array("car"=>"volvo","bike"=>"Honda","Cycle"=>"Hero");
array_walk($a,"myfunction");

//The count() function returns the number of elements in an array.
echo "<br><br>count() Function<br>";
echo count($cars);

//The sizeof() function returns the number of elements in an array.
//The sizeof() function is an alias of the count() function.
echo "<br><br>sizeof() Function<br>";
echo sizeof($cars);

//The array_count_values() function counts all the values of an array.
echo "<br><br>array_count_values() Function<br>";
print_r(array_count_values($a));

//The extract() function imports variables into the local symbol table from an array.
echo "<br><br>extract() Function<br>";

$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "a = $a; b = $b; c = $c";


?>