<?php
session_start();
$con=mysqli_connect("localhost","root","");
$uname=mysqli_real_escape_string($con,$_POST['uname']);
$pass=mysqli_real_escape_string($con,$_POST['pass']);
mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($con,"miniproject") or die("Cannot connect to database");
$sql="SELECT * from register Where uname ='$uname'";
$query=mysqli_query($con,$sql);
$exist=mysqli_num_rows($query);
$users="";
$passwords="";
if($exist>0)
{
    while ($row=mysqli_fetch_assoc($query)) 
    {
        $users=$row['uname'];
        $passwords=$row['pass'];   
    }
    if(($uname==$users)&&($pass==$passwords))
    {
        if($pass==$pass)
        {
            $_SESSION['user']=$uname;
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