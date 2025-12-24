<?php
// Database credentials
$host = "localhost";
$user = "root";
$pass = "";
$db   = "esesphere";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database connection failed: " . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $role = $conn->real_escape_string($_POST['role']);
    $date = $_POST['date'];
    $signatureData = $_POST['signature'];

    // Remove "data:image/png;base64,"
    $signatureData = str_replace('data:image/png;base64,', '', $signatureData);
    $signatureData = str_replace(' ', '+', $signatureData);

    $signatureDir = 'signatures/';
    if (!is_dir($signatureDir)) mkdir($signatureDir, 0755, true);

    $fileName = $signatureDir . 'signature_' . time() . '.png';
    $success = file_put_contents($fileName, base64_decode($signatureData));

    if ($success) {
        $sql = "INSERT INTO contributor_agreements (name, role, date, signature_path) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $role, $date, $fileName);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Agreement submitted successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to save signature image"]);
    }
}
$conn->close();
