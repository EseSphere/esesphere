<?php
// Database configuration
$host = 'localhost';
$db   = 'esesphere';
$user = 'root';
$pass = '';

// Create mysqli connection
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get visitor IP and User Agent
$ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN';

// Get today's date
$today = date('Y-m-d');

// Check if IP already exists today
$checkStmt = $mysqli->prepare("
    SELECT id 
    FROM website_visitors 
    WHERE ip_address = ? 
      AND DATE(visit_time) = ?
");
$checkStmt->bind_param("ss", $ip, $today);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows == 0) {
    // Use ip-api.com to get location data
    $locationData = @file_get_contents("http://ip-api.com/json/{$ip}?fields=status,country,regionName,city,zip,lat,lon,isp,org,query");
    $location = json_decode($locationData, true);

    $country = $location['country'] ?? 'UNKNOWN';
    $region  = $location['regionName'] ?? 'UNKNOWN';
    $city    = $location['city'] ?? 'UNKNOWN';
    $zip     = $location['zip'] ?? 'UNKNOWN';
    $lat     = $location['lat'] ?? 0;
    $lon     = $location['lon'] ?? 0;
    $isp     = $location['isp'] ?? 'UNKNOWN';
    $org     = $location['org'] ?? 'UNKNOWN';

    // Prepare and bind insert statement
    $stmt = $mysqli->prepare("
        INSERT INTO website_visitors 
        (ip_address, user_agent, country, region, city, zip, latitude, longitude, isp, org)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("ssssssidss", $ip, $userAgent, $country, $region, $city, $zip, $lat, $lon, $isp, $org);

    if ($stmt->execute()) {
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
}

$checkStmt->close();
$mysqli->close();
