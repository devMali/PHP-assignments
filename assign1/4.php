<?php

$sid=$_POST['stuid'];
$sname=$_POST['nm'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];

$total=$s1+$s2+$s3;
$p=$total/3;

echo "student id:$sid <br> student name:$sname<br> total marks out of 300 is $total <br> Percentage:$p <br>";


if($p>70)
    echo "You got A Grade ";
else if($p>65 && $p<70)
    echo "You got B Grade ";
else if($p>60 && $p<65)
    echo "You got C Grade ";    
else if($p>55 && $p<60)
    echo "You got D Grade ";
else if($p>50 && $p<55)
    echo "You got E Grade ";
else if($p<50)
    echo "You got F Grade ";


?>