<?php

session_start(); 

$a=1000;
$b=1200;
$c=1400;
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr> 
<tr> <td><font color=blue>Salary of Mr. B is</td> <td>$b$</font></td></tr>
<tr> <td><font color=blue>Salary of Mr. C is</td> <td>$c$</font></td></tr>
</table>";


echo ('<br>');
$_SESSION["a"] = $a;
$_SESSION["b"] = $b;
$_SESSION["c"] = $c;


$currentPage= $_SERVER['SCRIPT_NAME'];

echo $currentPage;

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
