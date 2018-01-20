<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
$servername = "127.16.1.1";
$username = "root";
$password = "";
$dbname ="miniproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($pass == $cpass){
 $sql="INSERT INTO register (fname,lname,email,uname,pass,cpass)values('$fname','$lname','$email','$uname','$pass','$cpass')";
 if($conn->query($sql)==TRUE )
{
	echo "<script> window.location.assign('s.php');</script>";
}
else
{
	echo "error:".$sql."<br>".$conn->error;
}
}else
echo "<script>window.alert('Passwords do not match !');</script>";


?>