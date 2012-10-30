<?php
$thefile = "data.csv"; /* Our filename as defined earlier */
//$towrite = $_POST["input"]; /* What we'll write to the file */
$towrite = "Hello \n world";
echo $_POST["clickData"];
$openedfile = fopen($thefile, "a");
fwrite($openedfile, $_POST["clickData"]);
fclose($openedfile);
?>