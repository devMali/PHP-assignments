<?php
	//$cwd=getcwd();
	//$sep=DIRECTORY_SEPARATOR;
		$path="C:\\xampp\htdocs";
	$dir=scandir($path);
	//	$files=array();
	
	foreach($dir as $d)
	{
		
		if(is_file($d))
		{
			$files[]=$d;
		}
		echo"<br><ul><li><b> $d </ul></li></b>";
		
	}
	
	
	/*foreach($files as $f)
	{
		echo"<br>$f";
	}*/
	
	
?>