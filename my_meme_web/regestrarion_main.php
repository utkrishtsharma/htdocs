<html>
<head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    margin-top: 10%;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    margin-top: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
      font-size: 60px;
}

input[type=submit]:hover {
    background-color: #45a049;
     font-size: 80px;

}

.container {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 40px;
    height: 60%;
}
</style>
		







<title>main_regestration</title>
</head>
<body>
<form method="post">
Enter First Name:<input type="text" name="t1" /><br>
Enter Last Name:<input type="text" name="t2" /><br>
Enter user Id:<input type="text" name="t3" /><br>
Enter password:<input type="text" name="t4" /><br>
<input type="submit" name="b1" value="Create" /><br>
<a href="main_login.php">Login</a>
</form>
</body>
</html>
<?php
if(isset($_POST['b1']))
{
$con=mysqli_connect("localhost","root","root","mymemewebsite");
if($con)
{

$fnmae=$_POST['t1'];
$lname=$_POST['t2'];
$uid=$_POST['t3'];
$pwd=$_POST['t4'];


$a="insert into regestration values('".$fnmae."','".$lname."','".$uid."','".$pwd."')";

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