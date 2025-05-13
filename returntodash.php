<?php
	session_start();
	$username = $_SESSION['username'];
	$role = $_SESSION['dbrole'];
	if($role == 'hod'){
				header("Location: hod_dashboard.php");				
	}else if($role = 'yearincharge'){
				header("Location: yearin_dashboard.php");
	}// Redirect to dashboard
    exit();
	?>