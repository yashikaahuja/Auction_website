<?php
session_start();

include "controller.php";

 if((isset($_POST['submit']))&&(isset($_FILES['image']))){
	if($_POST)
	{
	    //$item_id = "GEU".rand(100000,999999);
		$itemname=$_POST["itemname"];
		$category=$_POST["category"];
		$oprice=$_POST["oprice"];
		$sprice=$_POST["sprice"];
		$sdate=$_POST["sdate"];
		$edate=$_POST["edate"];
		
		$description=$_POST["description"];
        $userid=$_SESSION['userid'];
	    if ($_FILES["image"]["error"] > 0)
        {
// if there is error in file uploading 
            echo "Return Code: " . $_FILES["image"]["error"] . "<br />";

        }
        else
        {
// check if file already exit in "uploads" folder.
            if (file_exists("uploads/" . $_FILES["image"]["name"]))
                {
                    echo $_FILES["image"]["name"] . " already exists. ";
                }
            else
                {  
                    if(move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]))
                        {
// If file has uploaded successfully, store its name in data base

                             
                            $query_image = "INSERT INTO items(itemname,category,oprice,sprice,sdate,edate,description,image,userid) values('$itemname','$category','$oprice','$sprice','$sdate','$edate','$description','".$_FILES['image']['name']."','$userid')";
                            if(mysqli_query($conn,$query_image)==TRUE)
                                {
                                    //echo "Stored in: " . "uploads/" . $_FILES["image"]["name"];
                                    echo "YOUR DETAILS HAVE BEEN SAVED";
                                    echo "<script> window.location.assign('s.php');</script>";
                                }
                            else
                                {
                                    echo ($query_image);
                                }
                        }
                }


        }
	}
	}
	$userid=$_SESSION['userid'];
$q="SELECT *from register where userid=$userid";
$res = mysqli_query($conn,$q);
  $r = mysqli_fetch_array($res);
?>
	

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="s.css">
    <link rel="stylesheet" type="text/css" href="s.php">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
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


<div class="container" >
	
	<form action="" method="post" enctype="multipart/form-data">
		<div class="col-md-6">
			<h1 >Enter the Details</h1><br>
			<div class="container">
				<div class="form_row" >
		            <label id="seller" >ITEM NAME</label><br>
		            <input type="text" name="itemname" id="itemname">
		            
		        </div>
		            <br>
		        <div class="form_row">
		            <label id="seller">CATEGORY</label><br>
		            <select  name="category" id="category">
		                <option value="">--Select Category--</option>
		                <option value="CarBikes">Car & Bikes</option>
		                <option value="Mobile">Mobile & Tablets</option>
		                <option value="Electronics">Electronics</option>
		                <option value="Home">Home & Furnitures</option>
		                <option value="Fashion">Fashion & Beauty</option>
		                <option value="Pets">Pets & Animals</option>
                    <option value="Books">Books</option>
		                <option value="Others">Others</option>
		            </select>
		        </div><br>
	        </div> 
		    <div class="container">
		    	<div class="form_row"  >
                <label id="seller" >INPUT IMAGE</label>
                
                <input type="file" name="image" id="image_">
                </div>
            </div><br><br>
            <div class="container">
            	<div class="col-md-3">
            		<div class="form_row"> <input type="submit" name="submit" id="submit" style="background: #808E91;margin-left: 3cm"></div> 
            	</div>
            </div>
            
            
              
	    </div>
        <div class="col-md-5">
	            <br>
	        <div class="container">
	        	<div class="form_row col-md-3 ">
		            <label id="seller" >ORIGINAL PRICE</label><br>
		            <input type="number" name="oprice" id="oprice" min="1" max="5000000">
		        </div>
	            
	            <div class="form_row col-md-3">
		            <label id="seller">STARTING RICE</label><br>
		            <input type="number" name="sprice" id="sprice" min="1" max="5000000">
	            </div>
	        </div>
	            <br>
	        <div class="container">
		        <div class="form_row col-md-3">
		            <label id="seller">FROM</label>
		            <input type="datetime-local" name="sdate" id="sdate">
		        </div>
		            
		        <div class="form_row col-md-3">
		            <label id="seller">TO</label>
		            <input type="datetime-local" name="edate" id="edate">
		        </div>
	        </div>
	             <br>
		    <br>
	        <div class="container">
	        	<div class="form_row col-md-3">
	            	<label id="seller">DESCRIPTION</label>
	            	<br>
	            	<textarea name="description" id="description" style="width:500px; height:80px;"></textarea>
	            </div>
	        </div>
	       <br>
		</div>	
         </div>
         
            
            
              
            </div>
        
         


	</form><br><br>


</div>

<div class="container"><footer>
            
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
                </div><
</body>
</html>