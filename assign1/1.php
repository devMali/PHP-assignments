<?php

$amt=$_POST['amt'];
$rate=$_POST['rate'];
$dur=$_POST['dur'];

$intrest=$amt*$rate*$dur/100;

echo "Simple interest is:$intrest"


?>