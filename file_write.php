<?php
$myfile = fopen("new.txt", "w") or die("Unable to open file!");
$txt = "Hii i am Nedariya Mohammad from batch 2 and currently pursuing MCA from MPSTME  \n";
fwrite($myfile, $txt);
fclose($myfile);
?>