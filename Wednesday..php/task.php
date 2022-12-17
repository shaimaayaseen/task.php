<?php

    $x = [1,2,3,4,5,6];
    foreach ($x as $shaimaa) {
        echo  $shaimaa;
    };
    ?>
<br> 
<?php
$y = ["A"=>"abd","B"=>"abrar"];
foreach ($y as $key=>$value) {
    echo   $key . '=> ' .$value;
};
?>
<!-- /////////////////////////////////// -->
<?php

$forEachArrayKeyAndValue = ["A"=>"Abdelmajied" , "S"=>"Shaima" , "Ab"=>"Abrar" , "N"=>"Noor" , "M"=>"Mohammed"];

foreach ($forEachArrayKeyAndValue as $key=>$value){
    echo 'Length of value for [' . $key . '] = ' . strlen($value) . '<br>';
}

echo '<br>';
echo '<hr>';
echo '<br>';

$forEachArrayValue = [1000 , 2000 , 3000 , 4000];
foreach ($forEachArrayValue as $num){
    echo 'This is value in Array : ' . $num  . '<br>';
}

echo '<br>';
echo '<hr>';
echo '<br>';

/*

! 

&&

||

and

xor

or

*/

//                   ( 5 == '5' xor 5 == 5  or 600 != 599 || 5 > 6 and 100 === 100 && 4 > 2 )

if ( 5 == '5' xor 5 == 5  or 600 != 599 || 5 > 6 and 100 === 100 && 4 > 2 ){
    echo 'This is true';
} else {
    echo "This is False";
}
?>