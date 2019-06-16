<html>
<head>
	<title> test.php</title>
</head>
<body>
	<form methord = "post" >

	enter 1st no :<input type = "text" name ="t1"><br>
	enter 2nd no :<input type = "text" name ="t2"><br>
	<input type="submit" name="b1" value="add">
	<input type="submit" name="b2" value="sub">
	<input type="submit" name="b2" value="mul">
	<input type="submit" name="b4" value="div">
	
</form>
</body>
</html>





<?php
if(isset($_GET['b1']))
{
$a=$_GET['t1'];
$b=$_GET['t2'];
$sum=$a+$b;
echo"Sum of $a and $b =$sum";
}
if(isset($_GET['b2']))
{
$a=$_GET['t1'];
$b=$_GET['t2'];
$sub=$a-$b;
echo"Sub of $a and $b =$sub";
}
if(isset($_GET['b3']))
{
$a=$_GET['t1'];
$b=$_GET['t2'];
$mul=$a*$b;
echo"multiplication of $a and $b =$mul";
}

if(isset($_GET['b4']))
{
$a=$_GET['t1'];
$b=$_GET['t2'];
$div=$a/$b;
echo"divison of $a and $b =$div";
}



?>

