<html>
<head>
<title>test connection</title>
</head>
<body bgcolo="blue">
<form method="post">

Enter username:<input type="text" name="t1" placeholder="username"/>
Enter password:<input type="text" name="t2" placeholder="password"/>
<input type="submit" name="b1" value="login"/>
<input type="submit" name="b2" value="register"/>

</form>
<?php

if(isset($_POST['b1']))

{

	$user=$_POST['t1'];
    $pass=$_POST['t2'];



	//check for username and pass in DB----------
	if($user=="root"&&$pass=="root")
	{
      header('Location: http://localhost:8888/welcome.php');
     }
	else 
	{
	
	echo"<script>alert('incorrect username or pass')</script>";
	
	}
}
//----------------------------------



?>
</table>
</body>
</html>
