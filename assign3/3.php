<?php
$path="C:\\xampp\htdocs";
	$arr=scandir($path);
	//print_r($arr);
	foreach($arr as $f)
	{
		if(is_dir($path.DIRECTORY_SEPARATOR.$f))
		{
			echo"<ul><li>$f</ul></li>";
		}
	}
?>