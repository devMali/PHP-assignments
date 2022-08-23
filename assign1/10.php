<!DOCTYPE html>
<html>
<body>

<?php
$milk = array("Amul Gold"=>"30", "Taza"=>"25", "Tea special"=>"52", "Other"=>"15");

echo "Milk and Price:<br><br>";
foreach($milk as $x => $val) {
  echo "Milk Type:" . $x . ",   and price:" . $val;
  echo "<br>";
}

asort($milk);
echo "<br><br>Sort by milk price:<br><br>";
foreach($milk as $x => $val) {
  echo "Milk Type:" . $x . ",   and price:" . $val;
  echo "<br>";
}

ksort($milk);
echo "<br><br>Sort by milk type:<br><br>";
foreach($milk as $x => $val) {
  echo "Milk Type:" . $x . ",   and price:" . $val;
  echo "<br>";
}


?>

</body>
</html>
