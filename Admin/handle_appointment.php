<?php
include('db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $appointment_id = $_POST['appointment_id'];
    $action = $_POST['action'];
    $doctor_reply = mysqli_real_escape_string($conn, $_POST['doctor_reply']);

    // Determine status based on action
    $status = ($action === 'accept') ? 'Accepted' : 'Rejected';

    // Update appointment
    $query = "UPDATE appointment SET status='$status', doctor_reply='$doctor_reply' WHERE id=$appointment_id";
    if (mysqli_query($conn, $query)) {
        // Redirect back to profile.php with success message
        header("Location: profile.php?success=1");
        exit();
    } else {
        echo "Error updating appointment: " . mysqli_error($conn);
    }
}
?>
