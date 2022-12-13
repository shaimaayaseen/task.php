<?php
$color = array('white', 'green', 'red');

echo"The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

?>

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

<?php
$ceu = array("Netherlands"=>"Amsterdam","Greece" => "Athens","Germany" => "Berlin" ) ;

asort($ceu) ;
foreach ($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
?>
