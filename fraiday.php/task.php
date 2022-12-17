<?php
// PHP code to check whether a number is prime or Not
// function to check the number is Prime or Not
function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 
// Driver Code
$number = 31;
$flag = primeCheck($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime"
?>
<br>

<?php
// PHP program to check if a string has all
// lower case characters
 
$strings = array('gfg123', 'geeksforgeeks', 'GfG');
 
// Checking for above three strings one by one.
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "Yes\n";
 } else; } 
?>
<br>
 <?php
$a = 15;
$b = 276;
echo "\nBefore swapping:  ". $a . ',' . $b;
list($a, $b) = array($b, $a);
echo "\nAfter swapping:  ". $a . ',' . $b."\n";
?>

<br>

<?php
  
// Input Array
$a = array("red", "green", "red", "blue");
  
// Array after removing duplicates
print_r(array_unique($a));
  
?>
<br>

<?php
   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("This year is not a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("This year is not a leap year");
      else
         print("This year is not a leap year");
   }
   $my_year = 1900;
   year_check($my_year);
?>

<br>
<?php
// get today's date
$today = new DateTime();
echo 'Today is: ' . $today->format('m-d-Y') . '<br />';

// get the season dates
$spring = new DateTime('March 20');
$summer = new DateTime('June 20');
$fall = new DateTime('September 22');
$winter = new DateTime('December 21');

switch(true) {
    case $today >= $spring && $today < $summer:
        echo 'It\'s Spring!';
        break;

    case $today >= $summer && $today < $fall:
        echo 'It\'s Summer!';
        break;

    case $today >= $fall && $today < $winter:
        echo 'It\'s  summertime!';
        break;

    default:
        echo 'It must be Winter!';
}
?>

<br>

<?php
function test($n) 
{
   return $n % 20 == 0 || $n % 20 == 0;
}

var_dump(test(3));
var_dump(test(14));
var_dump(test(12));
var_dump(test(37));
?>
<br>

<?php
function checkNum($n1, $n5, $n9)
{
    if ($n1> $n5 && $n1 > $n9)
        $temp = $n1;
    elseif ($n1 > $n5)
        $temp = $n9;
    else
        $temp = $n9;
    return $temp;
}
$num1 = readline("Enter the 1st number: ");
$num2 = readline("Enter the 2nd number: ");
$num3 = readline("Enter the 3rd number: ");
echo "9 " . checkNum($num1, $num2, $num3);
?>

<br>

<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
?>

<br>

<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
?>

<br>

