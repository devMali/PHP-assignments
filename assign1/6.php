<?php
$myfile = fopen("studinfo.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("studinfo.txt"));
fclose($myfile);
?>