
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="s.css">
	<link rel="stylesheet" type="text/php" href="q.php">
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
<div class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><div id="logo">
         <div id="bid">BidGE<img src="l.png" ></div></div></a></div>
  
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
              <br>
                
                <form class="navbar-form navbar-center" role="search" action="q.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="uname" placeholder="Username/Email" required="required"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                    </div>
                    <button type="submit" class="btn btn-default">Sign In</button>
                </form>
            </div>
        </center>
    </div>
    <br><br>
</div>

<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $usernameErr = $passwordErr =$confirmpasswordErr = "";
$fname =$lname = $email = $uname = $pass = $cpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["lname"]);
  }
  if (empty($_POST["lname"])) {
    $nameErr = "Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["uname"])) {
    $usernameErr = "";
  } else {
    $user = test_input($_POST["uname"]);
  }

  if (empty($_POST["pass"])) {
    $passwordErr = "";
  } else {
    $pass = test_input($_POST["pass"]);
  }

  if (empty($_POST["cpass"])) {
    $confirmpasswordErr = "confirm your password";
  } else {
    $cpass = test_input($_POST["cpass"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 
<div class="container">
 <div id="Sign-Up">
    <fieldset style="width:30%"><legend>Registration Form</legend>
      <table border="0">
      <form method="post" action="signup.php"?>  
          <tr>
            <td style="color:red;"><b>First Name</b></td><td> <input type="text" name="fname"><span class="error">* <?php echo $fnameErr;?></span><br></td>
            <td style="color:red;"><b>Last Name</b></td><td> <input type="text" name="lname"><span class="error">* <?php echo $lnameErr;?></span><br></td>
            
          </tr>
          <tr>
            <td style="color:red;"><b>Email</b></td><td> <input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span><br></td>
          </tr>
          <tr>
            <td style="color:red;"><b>UserName</b></td><td> <input type="text" name="uname"><span class="error">* <?php echo $usernameErr;?></span><br></td>
          </tr>
          <tr>
            <td style="color:red;"><b>Password</b></td><td> <input type="password" name="pass"><span class="error">* <?php echo $passwordErr;?></span><br></td>
          </tr>
          <tr>
            <td style="color:red;"><b>Confirm Password</b></td><td><input type="password" name="cpass"><span class="error">* <?php echo $confirmpasswordErr;?></span><br><br></td>
          </tr>
          <tr>
            <td><input id="button" type="submit" name="submit" value="Sign-Up"></td>
            <td id="li"><a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fwww.google.co.in%2Fsearch%3Fclient%3Dubuntu%26channel%3Dfs%26dcr%3D0%26biw%3D1311%26bih%3D671%26tbm%3Disch%26ei%3DWCP2WcuBLMHbvASRvamQDA%26q%3Dsign%2Bup%2Bwith%2Bgoogle%26oq%3Dsign%2Bup%2Bwith%2Bgoogle%26gs_l%3Dpsy-ab.3..0i10k1l5j0i10i24k1l5.706856.710219.0.710905.7.7.0.0.0.0.767.1948.5-2j1.3.0....0...1.1.64.psy-ab..4.3.1945...0j0i7i30k1j0i7i10i30k1.0.tLFNreWfw7E&flowName=GlifWebSignIn&flowEntry=AddSession"  title="Google Plus" target="signup.php"><img src="signupwithg.jpg" ></a></td>
          </tr>

        </form>
      </table>
    </fieldset>
  </div>
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
        <img src="1c.jpg" alt="laptop" size="cover" >
        <div class="carousel-caption">
        <h2 id="slider" >Laptops</h2></div>
      </div>

      <div class="item">
        <img src="2c.jpg" alt="books" >
        <div class="carousel-caption">
        <h2 id="slider" >Books</h2></div>
      </div>
    
      <div class="item">
        <img src="3c.jpg" alt="phone" >
        <div class="carousel-caption">
        <h2 id="slider" >Mobile Phones and Tablets</h2></div>
      </div>

      <div class="item">
        <img src="4c.jpg" alt="calculator" >
        <div class="carousel-caption">
        <h2 id="slider" >Scientific Calculators</h2></div>
      </div>
      <div class="item">
        <img src="5c.jpg" alt="drfter" >
        <div class="carousel-caption">
        <h2 id="slider" >Engineering Tools</h2></div>
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


</body>
</html>