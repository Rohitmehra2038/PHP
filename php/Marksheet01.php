<form action="" method="post">

Physics: <input type="text", name="Physics", value min="0" max="20">
<br>
Maths: <input type="text", name="Maths", min="0" max="20" >
<br>
Chemistry: <input type="text", name="Chemistry",min="0" max="20">
<br>
English: <input type="text", name="English",min="0" max="20">
<br>
Hindi: <input type="text", name="Hindi",min="0" max="20">
<br>

<input type="submit" name="Marksheet" value="get result">

</form>

<?php

error_reporting(0);

if($_POST["Marksheet"])
{
$Physics=$_POST["Physics"];
$Maths=$_POST["Maths"];
$Chemistry=$_POST["Chemistry"];
$English=$_POST["English"];
$Hindi=$_POST["Hindi"];
$Result = $Physics + $Maths + $Chemistry + $English + $Hindi;

echo"<h1>";
echo "Total Marks=".$Result;
echo "<br>";
echo "</h1>";
}


if($Result<=100 && $Result>=60)
{
echo"<h1>";
echo"First Division";
echo"<br>";
echo "</h1>";
}
else if($Result<=59.99 && $Result>=45)
{
echo"<h1>";
echo"Second Division";
echo"<br>";
echo "</h1>";
}

if($Result<=44.99 && $Result>=36)
{
echo"<h1>";
echo"Third Division";
echo"<br>";
echo "</h1>";
}
else if($Result<=35.99 && $Result>=0.1)
{
echo"<h1>";
echo"Fail";
echo"<br>";
echo "</h1>";

}
?>
