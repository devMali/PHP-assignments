
<?php
if(isset($_POST['hidden']))
{
    $tkt=$_POST['tkt'];
}

function tabGenrator($t)
{
    echo "<table border='1' width='100%' height='10%'><tr>";
    for($i=1;$i<=$t;$i++)
    {
        echo "<td><center>seat no:$i</center></td>";
    }
    echo "</tr> </table>";
}
//$tkt=1;
tabGenrator($tkt);
?>
