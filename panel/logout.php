<?php
// این فایل برای حذف سشن است
session_start();
session_unset();
header("Location: ./../index.php");
?>
