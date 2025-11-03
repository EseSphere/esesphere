<?php
require_once "header.php";

// Get ID from URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch client request by ID
$stmt = $conn->prepare("SELECT * FROM client_requests WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    echo "<div class='container my-5'><p class='text-center text-danger fw-bold'>Request not found.</p></div>";
    exit;
}

// Format date
$date = new DateTime($row['submitted_at']);
$submitted_at = $date->format('d F Y, h:i A');
?>

<style>
    .section-header {
        font-weight: 600;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
    }

    .section-header i {
        margin-right: 8px;
    }

    .card {
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .card-header {
        border-top-left-radius: 0.75rem !important;
        border-top-right-radius: 0.75rem !important;
        font-weight: 500;
        font-size: 1rem;
    }

    .card-body strong {
        color: #333;
    }

    .info-item {
        margin-bottom: 10px;
        word-break: break-word;
    }

    @media (max-width: 576px) {
        .card-body {
            padding: 1rem;
        }

        .section-header {
            font-size: 1rem;
        }
    }
</style>

<div class="container my-5">
    <div style="margin-top: 150px;"></div>

    <!-- Page Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <h3 class="fw-bold text-primary mb-3 mb-md-0">
            <i class="bi bi-card-list me-2"></i> Request Details
        </h3>
        <a href="client-requests.php" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left-circle me-1"></i> Go Back
        </a>
    </div>

    <!-- CLIENT INFORMATION -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white section-header">
            <i class="bi bi-person-circle"></i> Client Information
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col info-item"><strong>Full Name:</strong> <?= htmlspecialchars($row['full_name']) ?></div>
                <div class="col info-item"><strong>Company Name:</strong> <?= htmlspecialchars($row['company_name']) ?></div>
                <div class="col info-item"><strong>Email:</strong> <?= htmlspecialchars($row['email']) ?></div>
                <div class="col info-item"><strong>Phone:</strong> <?= htmlspecialchars($row['phone']) ?></div>
                <div class="col info-item"><strong>Communication:</strong> <?= htmlspecialchars($row['communication']) ?></div>
                <div class="col info-item"><strong>NDA Agreement:</strong>
                    <?php if (strtolower($row['nda_agreement']) === 'yes'): ?>
                        <span class="badge bg-success">Yes</span>
                    <?php else: ?>
                        <span class="badge bg-secondary">No</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- PROJECT DETAILS -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white section-header">
            <i class="bi bi-laptop"></i> Project Details
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col info-item"><strong>Service Type:</strong> <?= htmlspecialchars($row['service_type']) ?></div>
                <div class="col info-item"><strong>Project Type:</strong> <?= htmlspecialchars($row['project_type']) ?></div>
                <div class="col info-item"><strong>Technology:</strong> <?= htmlspecialchars($row['technology']) ?></div>
                <div class="col info-item"><strong>Business Description:</strong> <?= htmlspecialchars($row['business_description']) ?></div>
                <div class="col info-item"><strong>Project Purpose:</strong> <?= htmlspecialchars($row['project_purpose']) ?></div>
                <div class="col info-item"><strong>Features:</strong> <?= htmlspecialchars($row['features']) ?></div>
                <div class="col info-item"><strong>Competitors:</strong> <?= htmlspecialchars($row['competitors']) ?></div>
                <div class="col info-item"><strong>Style Preference:</strong> <?= htmlspecialchars($row['style_preference']) ?></div>
                <div class="col info-item"><strong>Budget:</strong> <?= htmlspecialchars($row['budget']) ?></div>
                <div class="col info-item"><strong>Deadline:</strong> <?= htmlspecialchars($row['deadline']) ?></div>
                <div class="col-12 info-item"><strong>Attachments:</strong>
                    <?php if (!empty($row['attachments'])): ?>
                        <a href="uploads/<?= htmlspecialchars($row['attachments']) ?>" target="_blank" class="text-decoration-none text-primary">
                            <i class="bi bi-paperclip"></i> View File
                        </a>
                    <?php else: ?>
                        <span class="text-muted">No attachment uploaded</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- MARKETING DETAILS -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white section-header">
            <i class="bi bi-bullseye"></i> Marketing Details
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col info-item"><strong>Marketing Focus:</strong> <?= htmlspecialchars($row['marketing_focus']) ?></div>
                <div class="col info-item"><strong>Ad Budget:</strong> <?= htmlspecialchars($row['ad_budget']) ?></div>
                <div class="col info-item"><strong>Marketing Goals:</strong> <?= htmlspecialchars($row['marketing_goals']) ?></div>
                <div class="col info-item"><strong>Current Presence:</strong> <?= htmlspecialchars($row['current_presence']) ?></div>
                <div class="col info-item"><strong>Target Audience:</strong> <?= htmlspecialchars($row['target_audience']) ?></div>
                <div class="col info-item"><strong>KPIs:</strong> <?= htmlspecialchars($row['kpis']) ?></div>
            </div>
        </div>
    </div>

    <!-- SUBMISSION INFO -->
    <div class="card mb-5">
        <div class="card-header bg-secondary text-white section-header">
            <i class="bi bi-clock-history"></i> Submission Info
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col info-item"><strong>Request ID:</strong> #<?= $row['id'] ?></div>
                <div class="col info-item"><strong>Submitted On:</strong> <?= $submitted_at ?></div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="text-end mb-5">
        <a href="./quote-data" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Go Back
        </a>
    </div>
</div>

<?php
$stmt->close();
$conn->close();
require_once "footer.php";
?>