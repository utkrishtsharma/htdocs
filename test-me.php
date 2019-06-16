<?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$sql="SELECT * FROM dankmemes";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
?>
<tr>
	<td><a href="<?php echo $row[1]?>">Download meme</a></td>
<td><?php echo $row[2];  ?></td>



</tr>
<?php
 
    }
}
mysqli_close($con);
}

?>