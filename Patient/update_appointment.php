<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login first'); window.location.href='../Patient/category.php';</script>";
    exit;
}

include('../Patient/db.php');

// Get appointment ID from URL
if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid appointment ID.'); window.location.href='../Patient/profile.php';</script>";
    exit;
}

$appointment_id = $_GET['id'];
$email = $_SESSION['email'];

// Fetch appointment for that user
$query = "SELECT * FROM appointment WHERE id = '$appointment_id' AND email = '$email' AND status = 'Pending'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<script>alert('Pending appointment not found.'); window.location.href='profile.php';</script>";
    exit;
}

$appointment = mysqli_fetch_assoc($result);

// Update logic
if (isset($_POST['update'])) {
    $doctor_type = $_POST['doctor_type'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $reason = $_POST['reason'];

    $update_sql = "UPDATE patient SET 
                    doctor_type = '$doctor_type',
                    appointment_date = '$appointment_date',
                    appointment_time = '$appointment_time',
                    reason = '$reason',
                    status = 'Pending',
                    doctor_reply = ''
                WHERE id = '$appointment_id' AND email = '$email'";

    if (mysqli_query($conn, $update_sql)) {
        echo "<script>alert('Appointment updated successfully!'); window.location.href='profile.php';</script>";
    } else {
        echo "<script>alert('Update failed: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Appointment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background: #f7f9fc;
        font-family: 'Segoe UI', sans-serif;
    }
    .update-container {
        max-width: 600px;
        margin: 60px auto;
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    h3 {
        margin-bottom: 25px;
        color: #1f2b6c;
        text-align: center;
    }
    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        padding: 10px 25px;
        border-radius: 25px;
        font-weight: 600;
    }
    .btn-primary:hover {
        background: linear-gradient(45deg, #0056b3, #004494);
    }
  </style>
</head>
<body>

<div class="container update-container">
    <h3>Update Your Appointment</h3>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Doctor Type</label>
            <input type="text" name="doctor_type" class="form-control" value="<?= htmlspecialchars($appointment['doctor_type']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Appointment Date</label>
            <input type="date" name="appointment_date" class="form-control" value="<?= htmlspecialchars($appointment['appointment_date']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Appointment Time</label>
            <input type="time" name="appointment_time" class="form-control" value="<?= htmlspecialchars($appointment['appointment_time']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Reason</label>
            <textarea name="reason" class="form-control" rows="4"><?= htmlspecialchars($appointment['reason']) ?></textarea>
        </div>

        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="profile.php" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>

</body>
</html>
