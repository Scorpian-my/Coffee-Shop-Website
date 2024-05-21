<?php
//این فایل برای حذف سفارش است
session_start();
include("./../php/config.php");
$del = $_POST["coffee"];
$q = mysqli_query($connect, "SELECT * FROM `users` where email='" . $_SESSION['email'] . "'");
$coffee = mysqli_fetch_array($q)["coffees"];

$replace = str_replace($del, "", $coffee);

mysqli_query($connect, "UPDATE `users` SET `coffees`='$replace' WHERE email='" . $_SESSION['email'] . "'");

echo "
<script>
    alert('حذف شد');
    window.location = 'profile.php';
</script>
";
