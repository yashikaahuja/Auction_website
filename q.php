<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname ="miniproject";


$conn = mysqli_connect($servername, $username, $password, $dbname);
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conn,"miniproject") or die("Cannot connect to database");
$sql="SELECT * from register Where uname ='$uname'";
$query=mysqli_query($conn,$sql);
$exist=mysqli_num_rows($query);
$users="";
$passwords="";
$userid="";
echo "2";
if($exist>0)
{
    while ($row=mysqli_fetch_assoc($query)) 
    {
        $users=$row['uname'];
        $passwords=$row['pass'];   
        $userid=$row['userid'];
    }
    if(($uname==$users)&&($pass==$passwords))
    {
        if($pass==$pass)
        {
            $_SESSION['users']=$uname;
            $_SESSION['userid']=$userid;
            $_SESSION['log_in'] = 1;
            header("location: s.php");
        }

    }
    else
    {
         Print '<script>alert("Incorrect Password!");</script>'; // 
       Print '<script>window.location.assign("index.php");</script>'; 
       
    }
}
else
{
    print '<script>alert("Incorrect username !");</script>';
     Print '<script>window.location.assign("index.php");</script>';
    
}
?>