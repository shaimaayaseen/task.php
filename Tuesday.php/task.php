<!-- task1 -->

<?php
$color = array('white', 'green', 'red');

echo"The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

?>

<!-- task2 -->
<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<!-- task3 -->

<?php
$ceu = array("Netherlands"=>"Amsterdam","Greece" => "Athens","Germany" => "Berlin" ) ;

asort($ceu) ;
foreach ($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
?>

<!-- task4 -->
<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
  echo (current($color));
?>
<br>


<!-- task5 -->
<?php

$shaima = array('1','2','3','4','5');
echo 'array shaima';  
foreach ($shaima as $x) 
{echo "$x ";}
$inserted = '$';
array_splice($shaima, 3,0, $inserted);
echo "\n After inserted '$' the array is ";
foreach ($shaima as $x)
{echo "$x "; }"<br>";
echo "\n"
?>

<br>
<br>

<!-- task6 -->
<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}

 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
} "<br>"
?>
<br>
<!-- task7 8 9-->

<?php

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>
<br>
<?php
function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo 'Actual array ';
print_r($Color);
echo 'Values are in lower case.';
$myColor = array_change_value_case($Color,CASE_LOWER);
print_r($myColor);
echo 'Values are in upper case.';
$myColor = array_change_value_case($Color,CASE_UPPER);
print_r($myColor);
?>

<?php
 echo implode(",",range(200,250,4))."\n";
?>
<br>
<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
?>
<br>
<?php
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n"
?>

<br>
<?php
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(2, 0, 10, 12, 6))."\n");
?>
<br>

<!-- //////////// -->

<?php
    
 // Declare string
$str = "Geeks^for+Geeks";
print ("Original String \n");
  
// Split string in characters
$chars = str_split($str);
print ($str. "\n");
print ("Uppercase String \n");
  
// Looping over characters
foreach ($chars as $ch){
    
  // Check if character is 
  // small case alphabet
  if(ctype_lower($ch)){
      
     // Convert to upper case
       echo chr(ord($ch)-32);
  }
  else{
      
    // Else print character
    // unmodified
    echo($ch);
  }
}
?>

<br>
<?php
$str1= '085119'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>

<br>
<?php
$str1 = 'I am a full stack developer at orange coding academy';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'Word Found!';
 }
else
 {
    echo'Word Found!';
 }
?>
<br>
<?php
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>
<br>

<?php
$mailid  = 'info@orange.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>

<br>
<?php
$str1 = 'info@orange.com';
echo substr($str1, -3)."\n";
?>
<br>
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz  ';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>

<br>
<?php
$str = 'the new trainee is so genius.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>

<br>

<?php
$str1 = 'dragonball';
$str2 = 'dragonball';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s" ',
[$str_pos], $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>

