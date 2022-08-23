<?php

$types=array('C','H','D','S');
$rank=array('2','3','4','5','6','7','8','9','10','J','Q','K','A');

$cards=array();

foreach($types as $t)
{
    foreach($rank as $r)
    {
        $cards[]=$t.$r;
   }
}
$cn=count($cards);
echo "<br>There are total $cn cards<br>";

foreach($cards as $c)
{
    echo "$c ";
}

shuffle($cards);

echo "<br><br>After Shuffeling..<br>";
for($i=0;$i<=4;$i++)
{
    echo $cards[$i]." ";
}

?>