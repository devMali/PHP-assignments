<?php
$myfile = fopen("studinfo.txt", "r") or die("Unable to open file!");

echo fread($myfile,filesize("studinfo.txt"));
echo "<br><br>size of file is:".filesize("studinfo.txt");
fseek($myfile,0);
// Print current position
echo "<br> current pointer position is:" . ftell($myfile);

// Change current position
fseek($myfile,"8");

// Print current position again
echo "<br> current pointer position after changing is:" . ftell($myfile);


fclose($myfile);
?>