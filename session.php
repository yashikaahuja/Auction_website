<?php
// Initialize the session
session_start();
 include "controller.php";
$userid=$_SESSION['userid'];
//$q="SELECT *from register where userid=$userid";
//$res = mysqli_query($conn,$q);
 // $r = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="s.css">
	<link rel="stylesheet" type="text/php" href="itemdetail.php">
  <link rel="stylesheet" type="text/css" href="sell.php">
  <link rel="stylesheet" type="text/php" href="bid.php">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>My Website</title>



</head>
<body>

<div class="container">
  <br>
  <h2 class="w3-large text-center">LIVE NOW</h2><br>
 <?php 
 $query_image = "SELECT * FROM items";
 
 $result = mysqli_query($conn,$query_image);
 if(mysqli_num_rows($result) > 0)
 {
   while($row = mysqli_fetch_array($result))
   {
    $date1 = Date("Y-m-d");
    $now = new DateTime($date1);
    $ref = new DateTime($row ['edate']);
    $diff = $now->diff($ref);
    $edate=$row ['edate'];
     $today = strtotime($date1);
     $itemid=$row['itemid'];
     if(($today >= strtotime($row['sdate']))&&($today <= strtotime($row['edate']))) { 
 // echo '<img alt="" src="uploads/'.$row["image"].'">';
     $_SESSION['itemid']=$itemid;
     
$edate=$row ['edate'];?>

      <div class="col-md-4">
        <div class="panel panel-danger">
          <div class="panel-heading" align="center"> <?php echo $row ['itemname']; ?> </div>
          <div class="panel-body"><a href="itemdetail.php?x=<?=$itemid?>"><img src="<?php echo 'uploads/'.$row['image'];?>" class="img-responsive" style="width:100% " alt="Image"></a></div>
          <form action="bid.php" method="GET">
          <div class="panel-body"><div id="slidecontainer"><input type="range" name="bid" min="<?php echo $row ['minbid']; ?>" max="<?php echo $row ['maxbid']; ?>" value="(<?php echo $row ['minbid']; ?>+<?php echo $row ['maxbid']; ?>)/2" class="slider" id="myRange"><div align="center"><p id="demo1"></p></div></div></div>
          <div class="panel-footer" align="center">GEU-<?php echo $row['itemid'];?></div>
          <div class="panel-footer" align="center">ENDS IN<p id="demo"></p></div>
          <div class="panel-footer" align="center"><div><a href="bid.php?x=<?=$itemid?>"><button type="button" class="btn btn-danger btn-lg btn-block" > BID NOW</button></a></div></div>
        </form>
          <!---<div class="panel-footer" align="center"><div><a href="bid.php?x=<?=$itemid?>"><button type="button" class="btn btn-danger btn-lg btn-block">Bid Now</button></a></div></div>-->
        </div>
      </div>
    <?php  
   }
 }
}?>
</div>


       <script type="text/javascript">
  var slider = document.getElementById("myRange");
var output = document.getElementById("demo1");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
}
</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $edate ;?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>         
</body>

</html>


