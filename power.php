<html>
<head>
	<title>power.php</title>
</head>
<body bgcolor="blue">
	
	<form method = "POST" >
  <center>
	enter a number :<input type = "text" name ="t1"><br>
		enter its power :<input type = "text" name ="t2"><br>
	
	<input type="submit" name="b1" value="enter">
	</center>

</form>
</body>
</html>


<?php

if(isset($_POST['b1']))
{


$c=1;
$a=$_POST['t1'];
$b=$_POST['t2'];

while($b>0)
{
	
	$c=$c*$a; 
	$b--;
	
} 
echo"hi<br>";

echo"$b th power of $a  is $c";   
}

?>