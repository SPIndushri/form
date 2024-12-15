<?php
// process_registration.php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Collect form data
    $student_id = htmlspecialchars($_GET['student_id']);
    $full_name = htmlspecialchars($_GET['full_name']);
    $email = htmlspecialchars($_GET['email']);
    $password = htmlspecialchars($_GET['password']);  // For password security, consider hashing it
    $dob = htmlspecialchars($_GET['dob']);
    $course = htmlspecialchars($_GET['course']);
    $year = htmlspecialchars($_GET['year']);
    $family_income = htmlspecialchars($_GET['family_income']);
    $reason = htmlspecialchars($_GET['reason']);

    // Basic validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    if (!is_numeric($family_income)) {
        die("Family income must be a number");
    }

    // Database connection
    $conn = new mysqli("localhost", "root", "", "scholarship_db"); // 'root' is default user in XAMPP, no password.
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $sql = "INSERT INTO scholarship_applications (student_id, full_name, email, dob, course, year, family_income, reason)
            VALUES ('$student_id', '$full_name', '$email', '$dob', '$course', '$year', '$family_income', '$reason')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
