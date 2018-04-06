<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_POST['username'];	
$pswrd=$_POST['password'];
$conn=mysqli_connect('localhost','root','','luckydraw')or die("UNABLE TO CONNECT");
$sql="SELECT * FROM users where mobile='$user' OR mail_id='$user'";
if($res=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res)){
		while($fetch=mysqli_fetch_assoc($res)){
			$passwrd=$fetch['password'];
			$username=$fetch['First_name'];	
			$id=$fetch['Id'];
		}
	}
if($pswrd==$passwrd){
	session_start();
	$_SESSION['Username']=$username;
	$_SESSION['Id']=$id;
	header("location:dash.php");
}
		
	else{
		//echo "<script>";
		//echo "alert('wrong')";
		//echo"</script>";
		header("location:luckylogin.html");
}
#header("location:luckylogin.html");
}
else{
	echo "fuck";
}
	}
	else{
		echo"a";
	}

	

?>
