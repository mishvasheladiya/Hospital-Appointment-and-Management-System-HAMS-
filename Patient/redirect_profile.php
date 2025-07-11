<?php
ini_set('session.gc_maxlifetime', 30);
ini_set('session.cookie_lifetime', 30);
session_start();

// 30-second inactivity timeout
$timeout_duration = 30;

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    echo "<script>alert('Session expired. Please login again.'); window.location.href='category.php';</script>";
    exit;
}
$_SESSION['LAST_ACTIVITY'] = time();
?>
<?php if (isset($_SESSION['email'])): ?>
    <div class="user-info">
        <?php if (isset($_SESSION['role'])): ?>
            <?php echo ucfirst($_SESSION['role']); ?>:
        <?php endif; ?>
        <?php echo $_SESSION['email']; ?>
    </div>
    <a href="../redirect_profile.php">
        <button class="btn btn-appointment me-2">Profile</button>
    </a>
    <a href="../logout.php">
        <button class="btn btn-appointment text-danger">Logout</button>
    </a>
<?php else: ?>
    <a href="../Patient/category.php">
        <button class="btn btn-appointment">Login</button>
    </a>
<?php endif; ?>
