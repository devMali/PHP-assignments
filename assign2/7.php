<html>
<form action="7.php" method="post">
        Enter price of fuel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="fuel" ><br/>
        Enter per month maintenance:<input type="number" name="main" ><br/>
        <input type="submit" name="submit" value="submit">
    </form>
</html>

<?php
if(isset($_POST['submit']))
{
    $f=$_POST['fuel'];
    $m=$_POST['main'];

    class Vehical
    {
        public function calculate($v,$m,$mi,$f)
        {
            echo"vehical id:$v";
            echo"<br>vehical model:$m";
            echo"<br>vehical mileage:$mi";

            $cal=$mi*$f;
            echo"<br>calculation is:$cal";
        }
    }
    class Car extends Vehical
    {
        public function mainte($m)
        {
            $m= $m * 12;
            echo"<br>Total maintenance cost for a year is:$m";
        }
    }
    $obj=new Car();
    $obj->calculate(5,10,5,$f);
    $obj->mainte($m);

}

?>