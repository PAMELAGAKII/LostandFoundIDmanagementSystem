<?php
require_once('../config.php'); // adjust path if needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $conn->real_escape_string($_POST['phone']);
    $location = $conn->real_escape_string($_POST['location']);
    $role = $conn->real_escape_string($_POST['role']);

    // check if email already exists
    $check = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($check->num_rows > 0) {
        echo "Email already exists.";
    } else {
        $sql = "INSERT INTO users (first_name, last_name, email, password, phone, location, role) 
                VALUES ('$first_name', '$last_name', '$email', '$password', '$phone', '$location', '$role')";

        if ($conn->query($sql)) {
            echo "Registration successful. <a href='login.php'>Login here</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
