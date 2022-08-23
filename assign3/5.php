<?php
	
	$path="C:\\xampp\htdocs";
	$dir=scandir($path);
	//print_r($dir);
	
	foreach($dir as $d )
	{
		if(is_file($d))
		{
			$files[]=$d;
			
		}
	echo"<br>$d";
		
	}
	
    
	
		/*for($dir as $a)
		{
			if(is_dir($a))
			{
				$dire[]=$a;
			}
		
		echo"<br><ul><li><b> $a </ul></li></b>";
		}*/
?>