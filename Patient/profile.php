<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Redirect if not logged in
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login first'); window.location.href='category.php';</script>";
    exit;
}

include('../Patient/db.php');

$email = $_SESSION['email'];
$patient_sql = "SELECT * FROM patient WHERE email = '$email'";
$patient_result = mysqli_query($conn, $patient_sql);

if (!$patient_result || mysqli_num_rows($patient_result) === 0) {
    die("Error fetching patient data: " . mysqli_error($conn));
}
$patient_data = mysqli_fetch_assoc($patient_result);

$appt_sql = "SELECT * FROM appointment WHERE email = '$email'";
$appt_result = mysqli_query($conn, $appt_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Patient Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f7fc;
      font-family: 'Segoe UI', sans-serif;
    }
    .profile-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
    }
    .profile-header img.avatar {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 20px;
        border: 2px solid #007bff;
    }
    .info-label {
        font-weight: bold;
        color: #007bff;
    }
    .appointment-card {
        background-color: #fdfdfd;
        padding: 20px;
        margin-top: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }
    .appointment-actions form {
        display: inline-block;
    }
  </style>
</head>
<body>

<?php include('header.php'); ?>

<div class="container profile-container">
    <div class="profile-header">
        <img class="avatar" src="../image/profile.jpg" alt="Profile Picture">
        <div>
            <p><span class="info-label">Full Name:</span> <?= htmlspecialchars($patient_data['Name']) ?></p>
            <p><span class="info-label">Email:</span> <?= htmlspecialchars($patient_data['Email']) ?></p>
        </div>
    </div>

    <h5 class="mt-4 mb-3">Your Appointments</h5>
    <?php if (mysqli_num_rows($appt_result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($appt_result)): ?>
            <div class="appointment-card">
                <p><strong>Doctor Type:</strong> <?= htmlspecialchars($row['doctor_type']) ?></p>
                <p><strong>Date:</strong> <?= htmlspecialchars($row['appointment_date']) ?></p>
                <p><strong>Time:</strong> <?= htmlspecialchars($row['appointment_time']) ?></p>
                <p><strong>Status:</strong> <?= htmlspecialchars($row['status']) ?></p>

                <?php if (!empty($row['reason'])): ?>
                    <p><strong>Your Reason:</strong><br><?= nl2br(htmlspecialchars($row['reason'])) ?></p>
                <?php endif; ?>
                <?php if (!empty($row['doctor_reply'])): ?>
                    <p><strong>Doctor's Reply:</strong><br><?= nl2br(htmlspecialchars($row['doctor_reply'])) ?></p>
                <?php endif; ?>

                <?php if ($row['status'] === 'Pending'): ?>
                    <div class="appointment-actions mt-2">
                        <form method="POST" action="delete_appointment.php" onsubmit="return confirm('Are you sure to delete this appointment?');">
                            <input type="hidden" name="appointment_id" value="<?= $row['id'] ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <form method="GET" action="update_appointment.php">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" class="btn btn-primary btn-sm ms-2">Update</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="alert alert-info">No appointments found.</div>
    <?php endif; ?>
</div>

<?php include('footer.php'); ?>
</body>
</html>
