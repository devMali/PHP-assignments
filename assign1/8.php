<?php

 echo " Your hobbies are: <br>";
 foreach($_POST['hobbies'] as $hobby)
 {
    echo "<p>".$hobby ."</p>"; //Print all the hobbies
 }
?>