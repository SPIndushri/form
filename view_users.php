<?php
// view_users.php

// Simulated data for demonstration (replace with database retrieval code)
$applications = [
    [
        'student_id' => '12345',
        'full_name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'dob' => '2001-06-15',
        'course' => 'B.Tech',
        'year' => '2nd Year',
        'family_income' => '500000',
        'reason' => 'To fund my studies and support my family.'
    ],
    // Add more applications as needed
];

echo "<h1>Scholarship Applications</h1>";
echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Student ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Course</th>
        <th>Year</th>
        <th>Family Income</th>
        <th>Reason</th>
      </tr>";

foreach ($applications as $app) {
    echo "<tr>
            <td>{$app['student_id']}</td>
            <td>{$app['full_name']}</td>
            <td>{$app['email']}</td>
            <td>{$app['dob']}</td>
            <td>{$app['course']}</td>
            <td>{$app['year']}</td>
            <td>{$app['family_income']}</td>
            <td>{$app['reason']}</td>
          </tr>";
}

echo "</table>";
?>
