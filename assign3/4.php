<?php
	$path="C:\\xampp\htdocs";
	//$sep=DIRECTORY_SEPARATOR;
	
	$f=filemtime("car.txt");
	echo"<br>Last modify Date: ".date("F d D Y H:i:s."),"$f";
	
	$a=fileatime("car.txt");
	echo"<br>Last Access Date: ".date("F d D Y."),"$a";
	
	$w=fileowner("car.txt");
	echo"<br> File Owner Name: $w";
	
	//$filename = "car.txt";
	//print_r(posix_getpwuid(fileowner($filename)));
	
	$dir=scandir($path);
	foreach($dir as $d)
	{
		echo"<br>$d";
	}
	
	
	/*foreach($dir as $d)
	{
		if(is_dir($d))
		{
			$dire[]=$d;
		}
		echo"<br><ul><li>$d</ul></li>";
	}*/
?>