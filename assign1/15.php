
<?php

$s = "Hello how are you";


echo "String =>".$s;

echo "ltrim()-".ltrim($s,"Hello" );

echo "rtrim()-".rtrim($s,"you");

echo "trim()-".trim($s,"H");

echo "str_pad()-".str_pad($s,19,"__");

echo "lcfirst()-".lcfirst($s);

$u = "yamaha";
echo "ucfirst()-".ucfirst($u);

echo "ucwords()-".ucwords($s);

echo "strtolower()-".strtolower($s);

echo "strtoupper()-".strtoupper($s);

echo "strrev()-".strrev($s);

echo "str_shuffle()-".str_shuffle($s);

echo "str_repeat()-".str_repeat($s,'2');

print_r(explode(" ",$s));

$a = array(1,2,3,4,5);
echo implode("+",$a);

$abc= "bhargav"; $xyz= "MIHIR";
echo "strcmp()- ".strcmp($abc,$xyz)."<br>";

echo "strcasecmp()-".strcasecmp($abc,$xyz);

echo "strnatcmp()-".strnatcmp($xyz,$abc);

echo "strnatcasecmp()-".strnatcasecmp($xyz,$abc);

echo "strlen()-".strlen($s);

echo "strstr()-".strstr($s,"how");

echo "strchr()-".strchr($s,"how");

echo "strrchr()-".strrchr($s,"are");

echo "stristr()-".stristr($s,"are");

echo "strpos()-".strpos($s,"are");

echo "strrpos()-".strrpos($s,"you");

echo "str_replace()-".str_replace("how","haha",$s);

echo "str_replace()-".str_replace("Hello","harry",$s);

echo "substr_replace()-".substr($s,6,8);


?>