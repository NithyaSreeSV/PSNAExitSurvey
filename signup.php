<?php
include('config.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST['full_name'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if passwords match
    if ($password !== $_POST['confirm_password']) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // Hash the password
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement to insert user data
        $stmt = $conn->prepare("INSERT INTO users (full_name, regno, email, password,role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $full_name, $regno, $email, $password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Signup successful!'); window.location.href='index.html';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>