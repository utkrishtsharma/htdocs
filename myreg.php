<html>
<head>
<title>TestReg</title>
</head>
<body>
<form method="post">
Enter First Name:<input type="text" name="t1" /><br>
Enter Last Name:<input type="text" name="t2" /><br>
Enter user Id:<input type="text" name="t3" /><br>
Enter password:<input type="text" name="t4" /><br>
<input type="submit" name="b1" value="Create" /><br>
<a href="login1.php">Login</a>
</form>
</body>
</html>
<?php
if(isset($_POST['b1']))
{
$con=mysqli_connect("localhost","root","","MyAppDb");
if($con)
{

$fnmae=$_POST['t1'];
$lname=$_POST['t2'];
$uid=$_POST['t3'];
$pwd=$_POST['t4'];


$a="insert into reg_detail values('".$fnmae."','".$lname."','".$uid."','".$pwd."')";
echo $a;
$res=mysqli_query($con,$a);
if($res)
echo"successfully registered";
else
echo "not registered";
}
else
{
echo"connection error";
}

}
?>