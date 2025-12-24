<?php
// Database credentials
$host = "localhost"; // change if needed
$user = "root";      // your db username
$pass = "";          // your db password
$db   = "esesphere"; // your db name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $role = $conn->real_escape_string($_POST['role']);
    $date = $_POST['date'];
    $signature = $_POST['signature']; // signature as base64 image

    // Insert into database
    $sql = "INSERT INTO contributor_agreements (name, role, date, signature) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $role, $date, $signature);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Agreement submitted successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => $stmt->error]);
    }

    $stmt->close();
}
$conn->close();
