
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Mobile_no=$_POST['num'];
$Email_id=$_POST['mailid'];
$Password=$_POST['password'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$conn=mysqli_connect('localhost','root','','luckydraw');
$sql="SELECT mobile FROM users WHERE mobile='$Mobile_no'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{

	while($row=mysqli_fetch_assoc($result))
	{
	echo "ALREADY EXISTS";
	}
}
else{
	//echo "123";
	$v="INSERT INTO users VALUES('','$firstname','$lastname','$Password','$Email_id','$Mobile_no')";
	if(mysqli_query($conn,$v))
	{
		//echo $Username;
 header("location:luckylogin.html");	
 }
	else{
	echo "noo";
	}
}
mysqli_close($conn);
}
?>