<!DOCTYPE html>
<html>

	<head>
  
</head>
<body bgcolor="green">





<?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$sql="SELECT * FROM dankmemes";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
?>
<div class="div3">

<img src ="<?php echo $row[0]?>"

  


</div>


<?php
 
    }
}
mysqli_close($con);

?>








</table>
</body>



	


</html>