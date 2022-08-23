<html>
<form action="7.php" method="post">
        Enter price of fuel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="fuel" ><br/>
       </form>
</html>

<?php
if(isset($_POST['submit']))
{
    $f=$_POST['fuel'];

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
    $obj=new Vehical();
    $obj->calculate(5,10,5,$f);

}

//$car= array( array("BMW",122,10),array("BMW",22,110),array("BMW",12,10) );

//explode(" "
//str_pad(
//str_repeat
?>