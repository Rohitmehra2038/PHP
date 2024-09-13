<form action="" method="post">

Enter your %: <input type="text", name="marks">


<input type="submit" name="Marksheet" value="get result">

</form>

<?php
//error_reporting(0);

if($_POST["Marksheet"])
{
$marks=$_POST["marks"];


if($marks<=100 && $marks>=60)
{
echo"First Division";
echo"<br>";
}
else if($marks<=59.99 &&$marks>=45)
{
echo"Second Division";
echo"<br>";
}

if($marks<=44.99 && $marks>=36)
{
echo"Third Division";
echo"<br>";
}
if($marks<=35.99 && $marks>=0)
{
echo"Fail";
echo"<br>";
}
}
?>


