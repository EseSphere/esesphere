<?php
require_once "dbconnection.php";

// Ensure ID exists
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: ./quote-data");
    exit;
}

$id = intval($_GET['id']);

// Prepare delete statement
$stmt = $conn->prepare("DELETE FROM client_requests WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: quote-data");
} else {
    header("Location: quote-data");
}

$stmt->close();
$conn->close();
