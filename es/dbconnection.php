<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $db   = getenv('DB_NAME') ?: 'esesphere';
    $user = getenv('DB_USER') ?: 'root';
    $pass = getenv('DB_PASS') ?: '';

    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset('utf8mb4');

    if ($conn->connect_errno) {
        throw new Exception("Database connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('Database connection error. Please try again later.');
}

$ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN';

$today = date('Y-m-d');

$checkStmt = $conn->prepare("SELECT id FROM website_visitors WHERE ip_address = ? AND DATE(visit_time) = ?");
$checkStmt->bind_param("ss", $ip, $today);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows == 0) {
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
    $stmt = $conn->prepare("
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

$secretKey = $_ENV['APP_KEY'] ?? 'default-secret-key';
$data = uniqid('', true);
$iv = random_bytes(openssl_cipher_iv_length('AES-256-CBC'));
$encryptedData = openssl_encrypt($data, 'AES-256-CBC', $secretKey, 0, $iv);
$encrypted = base64_encode($iv . $encryptedData);

$checkStmt->close();
