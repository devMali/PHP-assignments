
<html>
    <form action="5.php" method="post">
        Enter any number:<input type="number" name="fact" >
        <input type="submit" name="submit" value="submit">
    </form>
</html>
<?php

if(isset($_POST['submit']))
{
    $fact=$_POST['fact'];

    function facto($n)
    {
        $cal=1;
        for($i=1;$i<=$n;$i++)
        {
            $cal=$cal * $i;
        }
        return $cal;
    }

    echo "Factorial of $fact is:".facto($fact);

}

?>