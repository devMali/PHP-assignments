<html>
<body bg color="sky-blue">
<form action="" method="post" enctype="multipart/form-data">

	
		Choose File:
	

	<input type="file" name="file">
	<input type="submit" value="submit" >
</form>	
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$cwd=getcwd();
	$sep=DIRECTORY_SEPARATOR;
	$new=$_FILES['file'];
	
	


	$success=move_uploaded_file($new['tmp_name'],$cwd.$sep.$new['name']);
	
	if($success)
	{
		echo"<br> File is uploaded";
	}
	else
	{
		echo"<br> File is not uploaded";
	}

}
?>


	
	
	
	
	
	