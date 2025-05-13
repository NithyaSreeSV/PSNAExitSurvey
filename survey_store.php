<?php

include('config.php');

$k = 'timestamp,';
$v = 'now(),';

foreach($_POST as $key => $value){
	$k .= $key.',';
	$v .= "'".$value."',";
}

$k = rtrim($k, ",");
$v = rtrim($v, ",");
echo $k.$v;

$ins = mysqli_query($conn, "Insert into survey ($k) values ($v)");
if($ins){
	echo "success";
}
else{
	echo mysqli_error($conn);
}

	session_start();
	$username = $_SESSION['username'];
	if($_SESSION['role'] == 'student'){
		header("Location: student_dashboard.php");
	}else{
		header("Location: index.html");
	}
?>