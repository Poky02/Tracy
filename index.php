<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

echo 896;
echo"<br>";
print (3.14);
echo"<br>";
echo "Pokorný Jakub";
echo"<br>";
print(FALSE);
echo " Nemám "." rád školu ";
echo"<br>";
echo "<img src=\"iPhone.jpg\">";
echo"<br>";
echo "\\";
            
$a = 40;
echo "<br>";
$b = 8;

echo "<br>";

dump ($a + $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a - $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a / $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a * $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;
            
dump ($a += $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

var_dump ($a -= $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a *= $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a /= $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a == $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a != $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a > $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a < $b);

echo "<br>";

$a = 40;
echo"<br>";
$b = 8;

dump ($a || $b);

echo "<br>";
           
$a = 40;
echo"<br>";
$b = 8;

dump ($a && $b);

?>