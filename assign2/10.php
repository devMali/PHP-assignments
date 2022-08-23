<html>
	<body>
		<form method="post">
			<table border="1px" cellpadding="1px" cellspacing="10px" bgcolor="skyblue">
				<tr>
					<td>Enter product name:</td>
					<td><input type="text" name="nm" id="" 888></td>
				</tr>
				<tr>
					<td>Enter Quantity:</td>
					<td><input type="number" name="qty" id="" required min="0" placeholder="must be >=0"></td>
				</tr>
				<tr>
					<td>Enter Price:</td>
					<td><input type="number" name="pr" id="" required min="0" placeholder="must be >=0"></td>
				</tr>
				<tr>
					<td><center><input type="submit" value="submit" name="submit"></center></td>
					<td><center><input type="reset" value="reset"></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$nm=$_POST['nm'];
		$qty=$_POST['qty'];
		$pr=$_POST['pr'];

		echo"total price of $nm is:".$qty*$pr;
	}
?>