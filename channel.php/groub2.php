<?php

echo "<hr>";


$name = "Abrar";
$age = 25;
$avarege = 3.5;
$avaliable = false;


var_dump($name);
echo '<br>';
var_dump($age);
echo '<br>';
var_dump($avarege);
echo '<br>';
var_dump($avaliable);
echo '<br>';


echo '##############################';
echo '<br>';


echo gettype($name);
echo '<br>';
echo gettype($age);
echo '<br>';
echo gettype($avarege);
echo '<br>';
echo gettype($avaliable);
echo '<br>';

echo '##############################';
echo '<br>';

echo is_int($age);
echo '<br>';
echo is_int($name);
echo '<br>';
echo is_float($avarege);
echo '<br>';
echo is_array($avaliable);
echo '<br>';


echo '##############################';
echo '<br>';

var_export(is_bool(1));
echo '<br>';
var_export(is_bool(0));
echo '<br>';
var_export("heeey");
echo '<br>';
echo is_bool(false);
echo '<br>';


echo '##############################';
?>