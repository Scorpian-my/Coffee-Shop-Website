<?php
session_start();
include("./config.php");
if (isset($_SESSION["email"]) and isset($_SESSION["password"])) {
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    $coffee = $_POST["add"];

    // بررسی وجود سفارش در پایگاه داده
    $check_query = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `coffees` LIKE '%$coffee%'");
    if (mysqli_num_rows($check_query) > 0) {
        echo "
        <script>
        alert('سفارش \"$coffee\" از قبل موجود است.');
        window.location = './../index.php';
        </script>
        ";
    } else {
        mysqli_query($connect, "UPDATE `users` SET `coffees` = CONCAT(`coffees`, ', ', '$coffee') WHERE `email` = '$email' AND `password` = '$password'");
        echo "
        <script>
        alert('سفارش با موفقیت به لیست علاقه مندی ها اضافه شد');
        window.location = './../index.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('برای انتخاب سفارش ابتدا باید حساب کاربری بسازید');
    window.location = './../index.php';
    </script>
    ";
}
