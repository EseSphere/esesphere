<?php
require_once 'dbconnection.php';

// Helper function to sanitize input
function sanitize($data, $conn)
{
    return $conn->real_escape_string(trim($data));
}

// Collect POST data
$full_name = sanitize($_POST['full_name'], $conn);
$company_name = sanitize($_POST['company_name'], $conn);
$email = sanitize($_POST['email'], $conn);
$phone = sanitize($_POST['phone'], $conn);
$service_type = sanitize($_POST['service_type'], $conn);

// Development Section
$project_type = isset($_POST['project_type']) ? sanitize($_POST['project_type'], $conn) : null;
$technology = isset($_POST['technology']) ? sanitize($_POST['technology'], $conn) : null;
$business_description = isset($_POST['business_description']) ? sanitize($_POST['business_description'], $conn) : null;
$project_purpose = isset($_POST['project_purpose']) ? sanitize($_POST['project_purpose'], $conn) : null;
$features = isset($_POST['features']) ? implode(",", $_POST['features']) : null;
$competitors = isset($_POST['competitors']) ? sanitize($_POST['competitors'], $conn) : null;
$style_preference = isset($_POST['style_preference']) ? sanitize($_POST['style_preference'], $conn) : null;

// Marketing Section
$marketing_focus = isset($_POST['marketing_focus']) ? implode(",", $_POST['marketing_focus']) : null;
$ad_budget = isset($_POST['ad_budget']) ? sanitize($_POST['ad_budget'], $conn) : null;
$marketing_goals = isset($_POST['marketing_goals']) ? sanitize($_POST['marketing_goals'], $conn) : null;
$current_presence = isset($_POST['current_presence']) ? sanitize($_POST['current_presence'], $conn) : null;
$target_audience = isset($_POST['target_audience']) ? sanitize($_POST['target_audience'], $conn) : null;
$kpis = isset($_POST['kpis']) ? sanitize($_POST['kpis'], $conn) : null;

// Final Section
$budget = sanitize($_POST['budget'], $conn);
$deadline = sanitize($_POST['deadline'], $conn);
$communication = isset($_POST['communication']) ? sanitize($_POST['communication'], $conn) : null;
$nda_agreement = isset($_POST['nda_agreement']) ? sanitize($_POST['nda_agreement'], $conn) : null;

// Handle file uploads
$uploaded_files = [];
if (!empty($_FILES['attachments']['name'][0])) {
    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

    foreach ($_FILES['attachments']['tmp_name'] as $key => $tmp_name) {
        $file_name = basename($_FILES['attachments']['name'][$key]);
        $target_file = $upload_dir . time() . "_" . $file_name;
        if (move_uploaded_file($tmp_name, $target_file)) {
            $uploaded_files[] = $target_file;
        }
    }
}
$attachments = !empty($uploaded_files) ? implode(",", $uploaded_files) : null;

// Insert into database
$sql = "INSERT INTO client_requests 
(full_name, company_name, email, phone, service_type, project_type, technology, business_description, project_purpose, features, competitors, style_preference, marketing_focus, ad_budget, marketing_goals, current_presence, target_audience, kpis, budget, deadline, attachments, communication, nda_agreement)
VALUES 
('$full_name','$company_name','$email','$phone','$service_type','$project_type','$technology','$business_description','$project_purpose','$features','$competitors','$style_preference','$marketing_focus','$ad_budget','$marketing_goals','$current_presence','$target_audience','$kpis','$budget','$deadline','$attachments','$communication','$nda_agreement')";

if ($conn->query($sql) === TRUE) {

    // ------------------- Send HTML Email to User -------------------
    $toUser = $email;
    $subjectUser = "Form Submitted Successfully";

    $messageUser = "
    <html>
    <head>
        <title>Form Submitted Successfully</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f7f7f7; border-radius: 8px; }
            h2 { color: #28a745; }
            p { margin-bottom: 10px; }
            .btn { display: inline-block; padding: 10px 20px; background: #007bff; color: #fff; text-decoration: none; border-radius: 4px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Thank You, $full_name!</h2>
            <p>Your form has been successfully submitted.</p>
            <p>We have received your request for: <strong>$service_type</strong></p>
            <p>Our team will review your submission and get back to you shortly.</p>
            <a class='btn' href='https://esesphere.com'>Visit Our Website</a>
        </div>
    </body>
    </html>
    ";

    $headersUser  = "MIME-Version: 1.0" . "\r\n";
    $headersUser .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headersUser .= "From: no-reply@esesphere.com" . "\r\n";

    mail($toUser, $subjectUser, $messageUser, $headersUser);
    // ------------------- End Email to User -------------------

    // ------------------- Send HTML Email to Admin -------------------
    $adminEmail = "ese4enterprise@gmail.com"; // <-- replace with actual admin email
    $subjectAdmin = "New Form Submission Received";

    $messageAdmin = "
    <html>
    <head>
        <title>New Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f7f7f7; border-radius: 8px; }
            h2 { color: #dc3545; }
            p { margin-bottom: 10px; }
            .details { background: #fff; padding: 10px; border-radius: 5px; }
            .details p { margin: 5px 0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Form Submission Received</h2>
            <div class='details'>
                <p><strong>Full Name:</strong> $full_name</p>
                <p><strong>Company Name:</strong> $company_name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Service Type:</strong> $service_type</p>
                <p><strong>Project Type:</strong> $project_type</p>
                <p><strong>Technology:</strong> $technology</p>
                <p><strong>Business Description:</strong> $business_description</p>
                <p><strong>Project Purpose:</strong> $project_purpose</p>
                <p><strong>Features:</strong> $features</p>
                <p><strong>Competitors:</strong> $competitors</p>
                <p><strong>Style Preference:</strong> $style_preference</p>
                <p><strong>Marketing Focus:</strong> $marketing_focus</p>
                <p><strong>Ad Budget:</strong> $ad_budget</p>
                <p><strong>Marketing Goals:</strong> $marketing_goals</p>
                <p><strong>Current Presence:</strong> $current_presence</p>
                <p><strong>Target Audience:</strong> $target_audience</p>
                <p><strong>KPIs:</strong> $kpis</p>
                <p><strong>Budget:</strong> $budget</p>
                <p><strong>Deadline:</strong> $deadline</p>
                <p><strong>Attachments:</strong> $attachments</p>
                <p><strong>Communication:</strong> $communication</p>
                <p><strong>NDA Agreement:</strong> $nda_agreement</p>
            </div>
        </div>
    </body>
    </html>
    ";

    $headersAdmin  = "MIME-Version: 1.0" . "\r\n";
    $headersAdmin .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headersAdmin .= "From: no-reply@esesphere.com" . "\r\n";

    mail($adminEmail, $subjectAdmin, $messageAdmin, $headersAdmin);
    // ------------------- End Email to Admin -------------------

    header("Location: ./thank-you");
} else {
    echo "Error: " . $conn->error;
}


$conn->close();
