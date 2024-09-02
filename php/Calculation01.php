<form action="" method="post">

First Number: <input type="text", name="x">
<br>
Second Number: <input type="text", name="y">
<br>

<input type="submit" name="calc" value="get result">

</form>

<?php
if($_POST["calc"])
{
$x=$_POST["x"];
$y=$_POST["y"];

$a= $x+$y;
$b= $x-$y;
$c= $x*$y;
$d= $x/$y;
$e= $x%$y;

echo"<h1>";

echo "total of x+y=".$a;
echo "<br>";
echo "total of x-y=".$b;
echo "<br>";
echo "total of x*y=".$c;
echo "<br>";
echo "total of x/y=".$d;
echo "<br>";
echo "total of x%y=".$e;
echo "<br>";

echo "</h1>";
}
?>
