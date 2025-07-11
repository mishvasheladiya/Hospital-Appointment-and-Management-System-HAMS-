<?php
session_start();
include('db.php');

// Ensure user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: plogin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['appointment_id'])) {
    $appointment_id = intval($_POST['appointment_id']);
    $user_email = $_SESSION['email'];

    // Check if appointment belongs to the logged-in user
    $check = mysqli_query($conn, "SELECT * FROM appointment WHERE id = $appointment_id AND email = '$user_email'");

    if (mysqli_num_rows($check) > 0) {
        $delete = mysqli_query($conn, "DELETE FROM appointment WHERE id = $appointment_id");
        if ($delete) {
            $_SESSION['msg'] = "Appointment dropped successfully.";
        } else {
            $_SESSION['msg'] = "Failed to drop appointment.";
        }
    } else {
        $_SESSION['msg'] = "Invalid appointment or unauthorized access.";
    }
}

header("Location: profile.php");
exit();
?>
