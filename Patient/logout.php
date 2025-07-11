<?php
session_start();
session_unset();
session_destroy();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

echo 
"<script>
alert('Logged out successfully'); 
window.location.href='category.php';
</script>";
exit;
?>
