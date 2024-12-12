<?php
session_start();
session_destroy(); // Mengakhiri sesi
header("Location: Landing.php"); // Redirect ke halaman Landing
exit();
?>
