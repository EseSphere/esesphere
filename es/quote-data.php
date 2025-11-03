<?php
require_once "header.php";

// Fetch all client requests
$sql = "SELECT id, full_name, email, phone, service_type, submitted_at FROM client_requests ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<div class="container my-5">
    <div style="margin-top: 160px;"></div>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary">
            <i class="bi bi-people-fill me-2"></i> Client Requests
        </h3>
        <a style="width: 130px;" href="./get-a-quote?ulen_ru74=<?= $encrypted ?>" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle"></i> Add New
        </a>
    </div>

    <!-- Search Bar -->
    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="🔍 Search by name, email, or service type...">
    </div>

    <!-- Table -->
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle" id="requestsTable">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Service Type</th>
                            <th>Submitted At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0):
                            $counter = 1;
                            while ($row = $result->fetch_assoc()):
                                $date = new DateTime($row['submitted_at']);
                                $formattedDate = $date->format('d F Y, h:i A');
                        ?>
                                <tr>
                                    <td class="text-center"><?= $counter++ ?></td>
                                    <td><?= htmlspecialchars($row['full_name']) ?></td>
                                    <td><?= htmlspecialchars($row['email']) ?></td>
                                    <td><?= htmlspecialchars($row['phone']) ?></td>
                                    <td><?= htmlspecialchars($row['service_type']) ?></td>
                                    <td><?= $formattedDate ?></td>
                                    <td class="text-center">
                                        <form action="./delete-request?id=<?= $row['id'] ?>&ulen_ru74=<?= $encrypted ?>" method="post" enctype="multipart/form-data">
                                            <a href="view-details?id=<?= $row['id'] ?>&ulen_ru74=<?= $encrypted ?>"
                                                class="btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Details">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-basket"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile;
                        else: ?>
                            <tr>
                                <td colspan="7" class="text-center text-muted py-3">
                                    <i class="bi bi-info-circle me-2"></i> No records found.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Tooltip & Search Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Enable Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Search filter
        const searchInput = document.getElementById("searchInput");
        const table = document.getElementById("requestsTable");
        searchInput.addEventListener("keyup", function() {
            const searchValue = this.value.toLowerCase();
            const rows = table.querySelectorAll("tbody tr");
            rows.forEach(row => {
                const text = row.innerText.toLowerCase();
                row.style.display = text.includes(searchValue) ? "" : "none";
            });
        });
    });
</script>

<?php
$conn->close();
require_once "footer.php";
?>