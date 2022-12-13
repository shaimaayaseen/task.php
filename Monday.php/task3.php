
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
</head>
<!-- <body>
<table>
    <style>
    table, td, th {
  border:2px solid black;
  border-collapse: collapse;

} -->
<!-- </style> -->
<!-- 
  <tr>
    <td>salary of Mr .A is</td>
    <td>1000$</td>
  </tr>

  <tr>
    <td>salary of Mr .B is</td>
    <td>1200$</td>
  </tr>
  <tr>
    <td>salary of Mr .c  is</td>
    <td>1400$</td>
  </tr> -->

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


echo ('<br>')

    $_SESSION["a"] = $a;
    $_SESSION["b"] = $b;
    $_SESSION["c"] = $c;



$currentPage= $_SERVER['SCRIPT_NAME'];

echo $currentPage;
?>

<br>
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br>
<?php
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
?>





</body>
</html>