<?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect("162.243.65.63", "ixp_hackathon", "root", "weisql");
	if (!$connection) {
	    echo "connection failed";
	} else {
		echo "connection successful";
		}
	        	
// 	session_start();// Starting Session

	// Storing Session
	// $EID=$_SESSION['login_user'];
	// $ref_id = $_SESSION['usid'];

	// // SQL Query To Fetch Complete Information Of employee
	// $query = mysqli_query($connection, "select * from employee where EID='$EID'");
	// $row = mysqli_fetch_assoc($query);
	// $login_session = $row['Username'];
	// $permission = $_SESSION['acct_type'];
	 
	// if(!isset($login_session)){
	// 	mysqli_close($connection); // Closing Connection
	// 	header('Location: index.html'); // Redirecting To Home Page
	// }
?>