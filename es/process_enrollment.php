<?php
// Database configuration
require_once "dbconnection.php";

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect and sanitize input data
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $dob = !empty($_POST['dob']) ? $_POST['dob'] : NULL;
    $gender = !empty($_POST['gender']) ? $_POST['gender'] : NULL;

    $city = !empty($_POST['city']) ? trim($_POST['city']) : NULL;
    $state = !empty($_POST['state']) ? trim($_POST['state']) : NULL;
    $address = !empty($_POST['address']) ? trim($_POST['address']) : NULL;

    $education = !empty($_POST['education']) ? trim($_POST['education']) : NULL;
    $experience = !empty($_POST['experience']) ? trim($_POST['experience']) : NULL;

    $course = trim($_POST['course']);
    $schedule = !empty($_POST['schedule']) ? $_POST['schedule'] : NULL;
    $message = !empty($_POST['message']) ? trim($_POST['message']) : NULL;

    $payment_method = !empty($_POST['payment']) ? $_POST['payment'] : NULL;
    $agreement = isset($_POST['agreement']) ? 1 : 0;

    // Prepare the INSERT statement
    $stmt = $conn->prepare("
        INSERT INTO course_enrollments
        (full_name, email, phone, dob, gender, city, state, address, education, experience, course, schedule, message, payment_method, agreement)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param(
        "ssssssssssssssi",
        $full_name,
        $email,
        $phone,
        $dob,
        $gender,
        $city,
        $state,
        $address,
        $education,
        $experience,
        $course,
        $schedule,
        $message,
        $payment_method,
        $agreement
    );

    // Execute statement
    if ($stmt->execute()) {
        echo "<div style='max-width:600px;margin:50px auto;padding:20px;border:1px solid #ccc;border-radius:10px;text-align:center;'>
                <h2>Enrollment Successful!</h2>
                <p>Thank you, <strong>" . htmlspecialchars($full_name) . "</strong>, for enrolling in <strong>" . htmlspecialchars($course) . "</strong>.</p>
                <a href='./' style='display:inline-block;margin-top:15px;padding:10px 20px;background-color:#c0392b;color:#fff;border-radius:5px;text-decoration:none;'>Go Back Home</a>
              </div>";
    } else {
        echo "Error while saving enrollment: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Redirect if accessed directly
    header("Location: ./");
    exit;
}
