<?php $a; if ($a) { echo "hi"; } else { echo "How are you"; } ?>

<?php $a = "1"; switch($a) { case 1: echo "Hello"; case 2: echo "World"; default: echo "This is a PHP Program"; } ?>

<?php $x = 15; $y = 20; if($x < ++$x || $y < ++$y) { echo "Hello World"; } else { echo "Hii everyone"; } ?>

<?php

	$a=2;
	$b=2;
	
	$c="2";
	
	if($a==$b)
		echo "<br>both are same";
	else
		echo "<br>both are not same";
	
	if($a === $c)
		echo "both are of same datatpe and value";
	else
		echo "<br>not same datatpe and value";

?>