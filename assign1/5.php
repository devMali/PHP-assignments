<?php
$myfile = fopen("studinfo.txt", "w") or die("Unable to open file!");

$txt = "Roll no  Name <br> 1 Abc <br> 2  Xyz <br> 3 Pqr";

fwrite($myfile, $txt);
echo "Content is written in file successfully..";
fclose($myfile);
?>