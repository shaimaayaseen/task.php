<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php


$_SESSION["email"] = "ahmad@gmail.com";
$_SESSION["password"] = "012345";
$_SESSION["array"] = ['AHMED','MOHAMMAD'];

// session_unset();
$_SESSION["email"] = "Aqaba@gmail.com";
echo "<br>";
// session_destroy();

echo ($_SESSION["email"]); 
echo "<br>";
print_r($_SESSION["array"]);










if (!empty($_SESSION["array"])){
    print_r($_SESSION["array"]);
}
else{
    echo ("Not Available"); 
}

?>

</body>
</html>