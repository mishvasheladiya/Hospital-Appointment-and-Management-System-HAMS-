<?php
include("db.php");

if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if ($action == "accept") {
        mysqli_query($conn, "UPDATE appointment SET status='Accepted' WHERE id=$id");
    } elseif ($action == "reject") {
        mysqli_query($conn, "UPDATE appointment SET status='Rejected' WHERE id=$id");
    }

    header("Location: profile.php");
}
?>
