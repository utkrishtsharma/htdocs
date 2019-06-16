<html>
<head>
	<title>Login1.html</title>
</head>
<body bgcolor="blue">
	
	<form method = "post" >
  <center>
	enter a number :<input type = "text" name ="t1"><br>
	
	<input type="submit" name="b1" value="enter">
	</center>

</form>
</body>
</html>


<?php

if(isset($_POST['b1']))
{
$a=$_POST['t1'];

$b=0;
while($a>=1)
{
$b=$b+$a;
$a--;
}
<
echo"sum is ".$b;

}
?>