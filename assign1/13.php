<html>
<body>
    
<?php

$data=file("studinfo.txt");

foreach($data as $val)
{
    echo"$val<br>";
}
/*
for($row=0;$row<4;$row++)
{
    for($col=0;$col<2;$col++)
    {
        echo $data[$row][$col];
    }
}
*/
?>
</body>
</html>