<?php
$myfile = fopen("config.txt", "r+") or die("Unable to open file to read!");
$var = fgets($myfile);

if ($var == 0)
    $var = 1;
else
    $var = 0;

fclose($myfile);

$myfile = fopen("config.txt", "w") or die("Unable to open file to write!");
fwrite($myfile, $var);
fclose($myfile);

if($var)
    print('Cerrados');
else
    print('Abiertos');