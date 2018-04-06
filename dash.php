<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Spain Lottery</title>
    <link rel="stylesheet" type="text/css" href="dash_css.css">
  </head>
  <body>
  <?php
  session_start();
 $name=$_SESSION['Username'];
 $id=$_SESSION['Id'];
  $ra=rand();
  $conn=mysqli_connect('localhost','root','','luckydraw')or die("UNABLE TO CONNECT");
  $sql="SELECT * FROM users where Id='$id'";
  if($res=mysqli_query($conn,$sql)){
		while($fetch=mysqli_fetch_assoc($res)){
	$mail=$fetch['mail_id'];
	$mob=$fetch['mobile'];
	$first=$fetch['First_name'];
	$last=$fetch['Last_name'];
		}
  }
echo "<div class=\"homePage\">";
     echo "<div class=\"header\"> <div class=\"logo\"> </div> </div>";
      echo "<div class=\"mainPage\">";
	  
         echo "<div class=\"header2\"> <blockquote> Win a chance to visit the world of wonders! </blockquote> </div>";
		 
         echo "<div class=\"lottery\">";
		 
           echo "<span> Your lottery number is: </span> <span id=\"number\"> $ra </span>";
           
        echo "</div>";
        echo "<div class=\"personalDetails\">";
          echo "<div id=\"name\"> <span> Username: </span> <span id=\"nameFill\"> $name</span> </div>";
          echo "<div id=\"mail\"> <span> E-Mail: </span> <span id=\"mailFill\"> $mail</span> </div>";
          echo "<div id=\"mobile\"> <span> Mobile:</span> <span> $mob </div>";
        echo "</div>";
      echo "</div>";
	  echo "<div class=\"logout\"><a href=\"logout_luck.php\" >Logout</a></div>";
    echo "</div>";
	?>
  </body>
</html>
