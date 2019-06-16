<html>
<head>
<title>Login</title>
</head>
<body>
<form method="post">
Enter user Id:<input type="text" name="t1" /><br>
Enter password:<input type="text" name="t2" /><br>
<input type="submit" name="b1" value="Login" /><br>

</form>
</body>
</html>
<?php
if(isset($_POST['b1']))
{
$con=mysqli_connect("localhost","root","","database1");
$s1="select *from student where userid='".$_POST['t1']."' and password='".$_POST['t2']."'";
echo $s1;

}


$result=mysqli_query($con,$s1);

$f=0;

$p1="php language";
while ($row=mysqli_fetch_row($result))
{
$f=1;
}
if($f==1)
	header('location:mydashboard.php?x='.$myuid.'&p='.$p1);
else
	echo"invalid user id or password";

}
*/
?>