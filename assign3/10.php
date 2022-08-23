<?php
$dsn ='mysql:host=localhost;dbname=samay';
$uid='root';
$pwd='';

$db=new PDO($dsn,$uid,$pwd);

$date=$_POST['date'];

$query="insert into watch values(:date)";
echo"<br> $query"

$result = $db_>prepare($query);
$result_>bindvalue (':date',$date)

$success=$result_>execute();

if ($success)
{
	echo "<br>Record insertd".
}
?>