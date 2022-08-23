<?php

echo "Enterd numbers are <br/>";
foreach ($_POST["num"] as $n) {
  echo "$n<br>";
}

$ar= $_POST['num'];
echo "<br>sum of numbers is :".array_sum($ar);

//count($ar);

echo "<br>Average of Numbers is:".array_sum($ar)/count($ar);
  
  ?>