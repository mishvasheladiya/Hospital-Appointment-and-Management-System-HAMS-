<?php
session_start();
include('db.php');

$query = "SELECT * FROM appointment ORDER BY appointment_date DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f7fa;
    }
    .card {
      border-radius: 15px;
    }
    .card-title {
      font-weight: bold;
    }
    .badge-status {
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
<?php include('header.php'); ?>

<div class="container py-5">
  <h2 class="text-center mb-4">Doctor Dashboard</h2>

  <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success text-center" id="success-alert">
      Your response has been sent to the patient.
    </div>
  <?php endif; ?>

  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h5 class="card-title">Patient: <?= htmlspecialchars($row['name']) ?></h5>
        <p><strong>Gender:</strong> <?= htmlspecialchars($row['gender']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($row['email']) ?></p>
        <p><strong>Phone:</strong> <?= htmlspecialchars($row['phone']) ?></p>
        <p><strong>Doctor Type:</strong> <?= htmlspecialchars($row['doctor_type']) ?></p>
        <p><strong>Appointment Date:</strong> <?= htmlspecialchars($row['appointment_date']) ?></p>
        <p><strong>Time:</strong> <?= htmlspecialchars($row['appointment_time']) ?></p>
        <p><strong>Weight:</strong> <?= htmlspecialchars($row['weight']) ?> kg</p>
        <p><strong>Blood Group:</strong> <?= htmlspecialchars($row['blood_group']) ?></p>
        <p><strong>Diabetes:</strong> <?= htmlspecialchars($row['diabetes']) ?></p>
        <p><strong>Blood Pressure:</strong> <?= htmlspecialchars($row['bp']) ?></p>

        <?php if (!empty($row['medical_report'])): ?>
          <p><strong>Medical Report:</strong><br><?= nl2br(htmlspecialchars($row['medical_report'])) ?></p>
        <?php endif; ?>

        <p><strong>Status:</strong>
          <span class="badge bg-<?= $row['status'] == 'Accepted' ? 'success' : ($row['status'] == 'Rejected' ? 'danger' : 'secondary') ?> badge-status">
            <?= $row['status'] ?>
          </span>
        </p>

        <?php if ($row['status'] == 'Pending') { ?>
          <form action="handle_appointment.php" method="POST">
            <input type="hidden" name="appointment_id" value="<?= $row['id'] ?>">
            <div class="mb-2">
              <label class="form-label">Reply to Patient:</label>
              <textarea name="doctor_reply" class="form-control" required></textarea>
            </div>
            <button type="submit" name="action" value="accept" class="btn btn-success btn-sm me-2">Accept</button>
            <button type="submit" name="action" value="reject" class="btn btn-danger btn-sm">Reject</button>
          </form>
        <?php } else { ?>
          <p><strong>Doctor's Reply:</strong><br><?= nl2br(htmlspecialchars($row['doctor_reply'])) ?></p>
        <?php } ?>
      </div>
    </div>
  <?php } ?>
</div>

<?php include('footer.php'); ?>

<!-- Auto-dismiss alert -->
<script>
  setTimeout(() => {
    const alert = document.getElementById('success-alert');
    if (alert) alert.remove();
  }, 3000);
</script>

</body>
</html>
