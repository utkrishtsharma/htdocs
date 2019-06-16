











<!DOCTYPE html>
<html>

  <head>
    <script type="text/javascript">
      myFunction1(){
        alert:"hello";

      }
    </script>
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="main.css" type="text/css">
  <link rel="stylesheet" href="A_Lolita_Scorned/fontface.css" type="text/css">
 

<script type="text/javascript">
  my
</script>








</head>


  <body>

  
<div class="nav">

           <ul >
              
           <li><a href="http://localhost:8888/my_meme_web/main_login.php">LOGIN</a></li>
           <li><a href="http://localhost:8888/my_meme_web/main_login.php">CONTACT</a></li>
           <li><a href="https://utkrishtsharma.wordpress.com/about/">ABOUT</a></li>
           <li ><a href="http://localhost:8888/my_meme_web/copy22.php">HOME</a></li>
          </ul>
      </div>


      <div class="div00" >
       <centre class="centre1" > <h1>DANKEST MEMES</h1></centre>
      </div>





    <div class="div2" > 



<?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$sql="SELECT * FROM dankmemes order by upvotes desc";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row

  while ($row=mysqli_fetch_row($result))
    {
?>

      
 <div class="div3" >


      
  
                <a href="<?php echo $row[0]?>"><img src ="<?php echo $row[0]?>"></a>


              
            
              <div class="div4">
                <div class="upvote" ></div> 
                <form action="up.php" method="POST">
                  <input type="hidden" name="id" value="<?= $row[4] ?>">
                  <input type="submit" value="^">
                </form>
              </div>  
            


               <div class="div4" onclick="myFunction2()">
                <div class="downvote"></div>
                 </div>
                    
  </div>
               



<?php



 
    }


}
mysqli_close($con);


?>







    
  </div>



  </body>

  


</html>