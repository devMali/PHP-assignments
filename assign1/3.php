<?php

$min=$_POST['min'];
$max=$_POST['max'];

$min_cir= 3.14*$min*$min;
$max_cir= 3.14*$max*$max;

echo "The area of circle with radius $min is $min_cir <br> <br>";
echo "The area of circle with radius $max is $max_cir";

?>