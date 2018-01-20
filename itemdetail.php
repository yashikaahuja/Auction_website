<?php
// Initialize the session
session_start();
 include "controller.php";
 $row4 = null;
 $itemid=$_GET['x'];
 $userid=$_SESSION['userid'];
 $query1 = "SELECT * FROM items where itemid=$itemid";
  $result1 = mysqli_query($conn,$query1);
  $row1 = mysqli_fetch_array($result1);
  $uid=$row1['userid'];
  $query2= "SELECT * FROM register where userid=$uid";
    $result2 = mysqli_query($conn,$query2);
  $row2 = mysqli_fetch_array($result2);
   $query3="SELECT * From bid where cprice=(select MAX(cprice) from bid where itemid=$itemid) ";
   $result3 = mysqli_query($conn,$query3);
   $row3 = mysqli_fetch_array($result3);
   $usid=$row3['userid'];
   $query4= "SELECT * FROM register where userid=$usid";
   
   $result4 = mysqli_query($conn,$query4);
   if ($result4)
    $row4 = mysqli_fetch_array($result4);
   $q="SELECT *from register where userid=$userid";
$res = mysqli_query($conn,$q);
  $r = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="s.css">
	<link rel="stylesheet" type="text/php" href="login.php">
  <link rel="stylesheet" type="text/css" href="sell.php">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>My Website</title>



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
        <div class="col-md-2 "></div>
        <div class="col-md-2 ">
           <div class="navbar-header " >
                 <br>
                 <br>
                 <a href="s.php"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-home"></span> Home </button></a>
                  

            </div>
        </div>
        <div class="col-md-2 ">
           <div class="navbar-header " >
                 <span class="icon-bar"> <a href="logout.php" >Logout</a>   </span>
                 <br>
                 <br>
                 <span class="icon-bar " id="seller"><i class="glyphicon glyphicon-user"> <?php echo $r['uname']?></i></span>
                  
                
            </div>
        </div>
    </div>

    <br><br>
</div>

    <br><br>
</div>
<div class="container">
    <div class="col-md-5">
      <div class="container">
      <div class="container">
        <img style="width: 45%" src="<?php echo 'uploads/'.$row1['image'];?>" >
      </div>
      <div class="container" >
        <div class="col-md-3">
            <p class="w3-large"><b> <?php echo $row1 ['itemname']; ?></b></p>
        </div>
        <div class="col-md-3">
            <p class="w3-large"><b>Item Id:GEU<?php echo $row1 ['itemid']; ?></b></p>
        </div>
      </div>
      <div class="container">
        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>  TOP BIDDER</b></p>
        <p  style="font-size: 15px"><?=$row4['fname']." ".$row4['lname']?> -<?php echo $row3['cprice']; ?></p></div>
      </div>
    </div>
    </div>
    <div class="col-md-6">
      <div class="container">
       <div class="container"><p class="w3-large "><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>  DESCRIPTION</b></p>
       <p  style="font-size: 15px"><?php echo $row1 ['description']; ?></p></div>
       <div class="container"><p class="w3-large "><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>  SELLER INFORMATION</b></p>
       <p  style="font-size: 15px"><i class="fa fa-user"></i><?php echo $row2 ['fname'];?> <?php echo $row2 ['lname']; ?></p>
       <p  style="font-size: 15px"><a href="mailto:<?php echo $r ['email'];?>" ><i class="fa fa-envelope"></i><?php echo $row2 ['email'];?> </a></p>
      </div>
     </div>
    </div>
</div>
<div class="container">
<footer
            
                <div class="footer-top">
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


