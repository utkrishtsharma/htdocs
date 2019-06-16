<?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$sql="SELECT * FROM dankmemes";


$res=mysqli_query($con,$sql);


if($res)
{ 
	echo"saved successfully";
}
else
{
	echo" not saved";
}

$sql1="SELECT image FROM dankmemes";



$result=mysqli_query($con,$sql1)
while ($row=mysqli_fetch_row($result))
    { 
    echo $row[0]
}



?>


