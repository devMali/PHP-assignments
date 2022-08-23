<?php

$punjabi= array('Dal makhani','Lassi','Chhole bhature','Chhole kulche','Aloo paratha','Paneer tikka');

echo "even number menu list punjabi foods are:<br>";
$len=count($punjabi);
$i=1;

while($i<$len)
{
    echo "<br>".$punjabi[$i];
    $i=$i+2;
}

?>