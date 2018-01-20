<?php
// Initialize the session
session_start();
 include "controller.php";
$userid = $_SESSION['userid'];
$q = "SELECT *from register where userid=$userid";
$res = mysqli_query($conn,$q);
  $r = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="s.css">
	<link rel="stylesheet" type="text/php" href="itemdetail.php">
  <link rel="stylesheet" type="text/php" href="sell.php">
  <link rel="stylesheet" type="text/php" href="bid.php">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script_.js"></script>
<title>My Website</title>


  <script type="text/javascript">
function set_range(range_id, id) {
  var slider = document.getElementById(range_id);
  var output = document.getElementById(id);
  output.innerHTML = slider.value; // Display the default slider value
  console.log( slider.value);
  // Update the current slider value (each time you drag the slider handle)
  slider.oninput = function() {
    output.innerHTML = this.value;
}

}
</script>
</head>
<body>
<div class="navbar navbar-default ">
    <div class="container">
       <div class="col-md-6">
           <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="s.php">
                <div id="logo">
                    <div id="bid">BidGE<img src="l.png" >
                    </div>
                </div>
   
              </a>
            </div>
        </div>
        <div class="col-md-4 ">
          <div class="navbar-header " >
                
                 <br>
                 <br>
                 <span class="icon-bar " id="seller"><i class="glyphicon glyphicon-user"> <?php echo $r['uname']?></i></span>
                  
                
            </div>
        </div>
        
        <div class="col-md-2 ">
           <div class="navbar-header " >
                 
                 <br>
                 <br>
                <span class="icon-bar"> <a href="logout.php" >Logout</a>   </span> 
                
            </div>
        </div>
    </div>

    <br><br>
</div>

<div class=" container w3-display-container w3-container">
    <img src="geu.jpg"  style="width:100%">
    
  </div>
 
             
              




<div class="container">
  <h2>Welcome to BidGEU</h2>
  <p>The number 1 auction site for all members of Graphic Era University to bid and sell items with ease</p>
  <p>.</p>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover" >
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="carousel img/1c.jpg" alt="laptop" size="cover" >
            <div class="carousel-caption">
                <h2 id="slider" >Laptops</h2>
            </div>
          </div>

          <div class="item">
            <img src="2c.jpg" alt="books" >
            <div class="carousel-caption">
                 <h2 id="slider" >Books</h2>
            </div>
          </div>
        
          <div class="item">
            <img src="3c.jpg" alt="phone" >
            <div class="carousel-caption">
               <h2 id="slider" >Mobile Phones and Tablets</h2>
            </div>
          </div>

          <div class="item">
            <img src="4c.jpg" alt="calculator" >
            <div class="carousel-caption">
               <h2 id="slider" >Scientific Calculators</h2>
            </div>
          </div>
          <div class="item">
            <img src="5c.jpg" alt="drfter" >
            <div class="carousel-caption">
                <h2 id="slider" >Engineering Tools</h2>
            </div>
          </div>
      </div>

       <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
</div>


<div class="container">
  <br>
  <h2 class="w3-large text-center">LIVE NOW</h2><br>
 <?php 
 $query_image = "SELECT * FROM items";
 
 $result = mysqli_query($conn,$query_image);
 if(mysqli_num_rows($result) > 0)
 {
  $i = 0;
   while($row = mysqli_fetch_array($result))
   {
    $i++;
    $date1 = Date("Y-m-d");
    $now = new DateTime($date1);
    $ref = new DateTime($row ['edate']);
    $diff = $now->diff($ref);
    $edate=$row ['edate'];
    $sdate=$row['sdate'];
     $today = strtotime($date1);
     $itemid=$row['itemid'];
/*     echo "today :".$today."  sdate : ".strtotime($row['sdate'])." edate : ".strtotime($row['edate'])."<br>";
*/     if(($today >= strtotime($row['sdate']))&&($today <= strtotime($row['edate']))) { 
/*      echo $today;
*/ // echo '<img alt="" src="uploads/'.$row["image"].'">';
     $_SESSION['itemid']=$itemid;
     
$edate=$row ['edate'];?>

      <div class="col-md-4">
        <div class="panel panel-danger" >
          <div class="panel-heading" align="center"> <?php echo $row ['itemname']; ?> </div>
          <div class="panel-body"><a href="itemdetail.php?x=<?=$itemid?>"><img src="<?php echo 'uploads/'.$row['image'];?>" class="img-responsive" style="width:100%; max-height: 750px" alt="Image"></a></div>
          <form action="bid.php" method="GET">
            <input type="hidden" name="item_id" value="<?=$itemid?>">
          <div class="panel-body"><div id="slidecontainer">
            <input type="range" name="bid" min="<?php echo $row ['sprice']; ?>" max="<?php echo $row ['oprice']; ?>" value="<?php ($row ['sprice'] + $row ['oprice'])/2; ?>" class="slider" id="range-<?=$i?>">
            <div align="center"><p id="s-<?=$i?>"></p></div></div></div>
          <div class="panel-footer" align="center">GEU-<?php echo $row['itemid'];?></div>
          <div class="panel-footer" align="center">ENDS IN<p id="demo-<?=$i?>"></p></div>
          <div class="panel-footer" align="center"><div><button type="submit" class="btn btn-danger btn-lg btn-block" > BID NOW</button></div></div>
        </form>
          <!---<div class="panel-footer" align="center"><div><a href="bid.php?x=<?=$itemid?>"><button type="button" class="btn btn-danger btn-lg btn-block">Bid Now</button></a></div></div>-->
        </div>
      </div>
      <script>
        set_range('range-<?=$i?>', 's-<?=$i?>');
        setTimer('demo-<?=$i?>','<?=$row['edate']?>');
      </script>
    <?php  
   }
 }
}?>
</div>

<div class="container">
  <br>
  <h2 class="w3-large text-center">UPCOMING AUCTIONS</h2><br>
 <?php 
 $query_image = "SELECT * FROM items";
 
 $result = mysqli_query($conn,$query_image);
 if(mysqli_num_rows($result) > 0)
 {
 	$j=0;
   while($row = mysqli_fetch_array($result))
   {
   	$j++;
    $date1 = Date("Y-m-d");
    $now = new DateTime($date1);
    $ref = new DateTime($row ['sdate']);
    $diff = $now->diff($ref);
   
     $today = strtotime($date1);
     if(($today < strtotime($row['sdate']))) { 
 // echo '<img alt="" src="uploads/'.$row["image"].'">';

      ?>
     
    <div class="col-md-3">
        <div class="panel panel-danger">
           <div class="panel-heading" align="center"  > <?php echo $row ['itemname']; ?> </div>
           <div class="panel-body"><img src="<?php echo 'uploads/'.$row['image'];?>" class="img-responsive" style="width:100% " alt="Image"></div>
          
            <div class="panel-footer" align="center">GEU-<?php echo $row['itemid'];?></div>
          <div class="panel-footer" align="center">OPEN AFTER<p id="demo-<?=$j?>"></p></div>
        </div>
    </div>
    <script>
        
        setTimer('demo-<?=$j?>','<?=$row['sdate']?>');
      </script>
 
 <?php  
   }
 }
}?>
</div>


<div  class="container">
  <div class="col-md-12">
 <form action="sell.php">
  <a href="sell.php" ><button type="button" class="btn btn-danger btn-lg btn-block" > Sell an item</button></a>
</form>
  </div>

</div>
<br>








<div class="container">
<footer>
            
                <div class="footer-top container">
                    <div class="wrap">
                        

                        <tr> <nav id="fmenu" >
                            <ul style="list-style-type:none">
                                <li id="tc"><a  href="Terms" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li>
                                <li mid="tc"><a href="Legal" title="Legal Terms of use">Legal Terms of use</a></li>
                                <li id="tc"><a href="Privacy" title="Privacy">Privacy</a></li>
                                <li id="tc"><a href="About-us" title="About Us">About Us</a></li>
                                <li id="tc"><a href="Contact-us" title="Contact Us">Contact Us</a></li>
                                
                               
                            </ul>
                        </nav></tr>
                      <tr> <nav id="social">
                        <ul  style="list-style-type:none">
                            <li><a href="" class="fa fa-facebook" title="Facebook" target="_blank"></a></li>
                            <li><a href="" class="fa fa-twitter" title="Twitter" target="_blank"></a></li>
                            <li><a href="" class="fa fa-google" title="Google Plus" target="_blank"></a></li>
                            
                        </ul>
                    </nav></tr>
                        
                    </div>
                </div>
  </footer> 

                  
                    <div class="container">
                        <div class="copyright">All rights reserved.Made with<i id="heart" class="fa fa-heart"></i>By <a href="mailto:yashikaahuja3@gmail.com">Yashika Ahuja</a></div>
                        <!--/.copyright-->
                        

                    </div>
  </div>                  


     
</body>

</html>


