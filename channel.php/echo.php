<?php
echo 12.5 . '<br>'; 
echo (int)12.1 . '<br>'; 
echo (int)12.9 . '<br>'; 
echo (int)-12.9 . '<br>'; 

echo 5 + '5 mohamed'; //(int) : to remove waring 
echo '<br>';
echo 5 + (int)'5 mohamed'; //(int) : to remove waring 
echo '<br>';
echo 5 + (integer)'5 aseem'; //(integer) : to remove waring 
echo '<br>';
echo 5 + ( integer )'5 ruba'; //( integer ) : to remove waring 
echo '<br>';
echo gettype(5 + (int)'5 tabark');
echo '<br>';
// ----------------------------------------
echo 5 + (int) 15.5; //(int) : to casting it from double to int 
echo '<br>';
echo 10.5 + 10.5 ; //21
echo '<br>';
echo gettype(10.5 + 10.5); //double +double =double 
echo '<br>';
echo (int)10.5 + (int)10.5 ; //20 //int
echo '<br>';
echo (int) (10.5 + 10.5 ); //21 //int
echo '<br>';
echo gettype((int) (10.5 + 10.5));
echo '<br>';
echo ((bool)(""));
echo '<br>';
echo gettype((bool)("mohammed"));
echo '<br>';
echo ((bool)(2));
echo '<br>';
echo gettype((bool)(2));

///////////////////////////////////////////
<?php
//                      Scaler types

// String
$thisIsString = "Hello there";
echo '<br>';
echo $thisIsString;
echo '<br>';
echo gettype($thisIsString);
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Integer
$thisIsInteger = 500;
echo '<br>';
echo '<br>';
echo $thisIsInteger;
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Float , Double
$thisIsFloat = 99.5;
echo '<br>';
echo '<br>';
echo $thisIsFloat;
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Boolean 
$thisIsBoleen = true;
$thisIsBoleen = false;
echo '<br>';
echo '<br>';
$Number = 50;
echo gettype($Number > 10);
echo '<br>';
if ($Number > 60) {
echo "This is true";
}else {
    echo "This is false";
}
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Array 
$ThisIsArray = ["Asem" , "Noqati" , "Tabark" , "Maslmani" , "Ruba"];
echo '<br>';
echo '<br>';
print_r($ThisIsArray);
echo '<br>';
echo '<br>';
echo $ThisIsArray[1];
echo '<br>';
echo $ThisIsArray[2];
echo '<br>';
echo $ThisIsArray[3];
echo '<br>';
echo $ThisIsArray[4];
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
//Classes & Objects


class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo "<br>";
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
$nl = NULL;
    echo $nl;   //it will not give any output
    echo "<br>";
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";



