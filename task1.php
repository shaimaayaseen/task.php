
<!-- task8 -->
<?php

 header('Location:https://www.w3schools.com');
 
 ?>

 <!-- task1 -->
<?php

echo phpinfo();
print 'Tomorrow I ll learn PHP global variables.';


// 'This is a bad command: del c:.';


?>
<!-- task2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- task3 -->
<form>
  <label for="fname">First name:</label><br>
  <input type="text" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text">
</form>

<!-- task4 -->
<?php
echo 'User IP - '.$_SERVER['REMOTE_ADDR'];
?>
<br>
<!-- task5 -->
<?php
$currentPage= $_SERVER['SCRIPT_NAME'];

echo $currentPage;
?>
<!-- task6 -->
<br>
<?php
                $url = 'http://www.example.com/php-example/index.php';
                print_r(parse_url($url));
                $scheme = parse_url($url,PHP_URL_SCHEME);
                echo "<br><br>Scheme : $scheme";
             
                $host = parse_url($url,PHP_URL_HOST);
                echo "<br><br>Host : $host";
                $path = parse_url($url,PHP_URL_PATH);
                echo "<br><br>path : $path";         
?>

<br>
<!-- task7 -->
<?php
$text = "Practice code in GEEKSFORGEEKS";
$text = preg_replace('/(\b[a-z])/i', 
'<span style="color:green;">\1</span>', $text);
echo $text
?>





</body>
</html>
