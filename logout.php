<?php

	session_start();
	
	if(session_destroy())
		header("location: index.php");
	else{
		$_SESSION['uname'] = null;
		$_SESSION["log_in"] = 0;
	}

?>
