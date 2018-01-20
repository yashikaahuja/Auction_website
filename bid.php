<?php
session_start();
$itemid = $_GET['item_id'];
$price = $_GET['bid'];
	$userid = $_SESSION['userid'];
	//$bid=$_GET["bid"];
include "controller.php";

$sql="SELECT * from items Where itemid ='$itemid'";
$query=mysqli_query($conn,$sql);
$exist=mysqli_num_rows($query);
  
if($exist>0)

{
    while ($row=mysqli_fetch_assoc($query)) 
    {  // echo $bid;
        $cprice=$row['sprice'];
        //$cprice=$cprice+$bid;
        $sq   = "INSERT INTO bid(itemid, userid, cprice)
	          VALUES ('$itemid', '$userid', '$price')";
	          if(mysqli_query($conn,$sq)==TRUE)
		echo "<script>window.alert('Submitted Successfully!');history.back();</script>";

   else  die("Connection failed: " . $conn->connect_error);
    }
    
}

?>