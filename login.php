<?php
// Include your database connection file
include("config.php");
session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $myusername = mysqli_real_escape_string($conn, $_POST['email']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['password']); 

    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT password, role, full_name FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $myusername);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($db_password, $dbrole, $stname);
        $stmt->fetch();
		echo ".$db_password.";

        // Verify the password
        if ($mypassword == $db_password) {
            // Password is correct, set session variable
            $_SESSION['login_user'] = $myusername;
			
			session_start();
			$_SESSION['user']= $myusername;
			$_SESSION['username']= $stname;
			$_SESSION['role']= $dbrole;
			if($dbrole == 'student'){
				header("Location: student_dashboard.php");
			}else if($dbrole == 'hod'){
				header("Location: hod_dashboard.php");				
			}else{
				header("Location: yearin_dashboard.php");
			}// Redirect to dashboard
            exit();
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    } else {
        $error = "Your Login Name or Password is invalid";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
