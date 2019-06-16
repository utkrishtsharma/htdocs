<?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$id=$_POST["id"];
$sql="update dankmemes set upvotes=upvotes+1 where id=$id";

if (mysqli_query($con,$sql)){
	echo "UpVoted";
}
?>