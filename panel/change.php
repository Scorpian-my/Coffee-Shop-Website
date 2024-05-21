<?php
// این فایل برای تغییر رمز است
session_start();
include("./../php/config.php");
if (isset($_POST["email-new"]) && isset($_POST["pass-new"]) && isset($_POST["pass-old"]) && isset($_SESSION["email"]) && $_SESSION["password"]) {
    $email_new = $_POST["email-new"];
    $pass_old = $_POST["pass-old"];
    $pass_new = $_POST["pass-new"];
    $query = mysqli_query($connect, "SELECT * FROM `users` WHERE email='" . $_SESSION["email"] . "' AND password='$pass_old';");
    $profile = mysqli_fetch_array($query);
    if ($profile["email"] == $_SESSION["email"] and $profile["password"] == $pass_old) {
        mysqli_query($connect, "UPDATE `users` SET `email`='$email_new',`password`='$pass_new' WHERE email='" . $_SESSION["email"] . "' AND password='$pass_old';");
        $_SESSION["email"] = $email_new;
        $_SESSION["password"] = $pass_new;
        echo "
    <script>
    alert('تغییرات با موفقیت اعمال شد');
    window.location = './../login/login.php';
    </script>
    
    ";
    } else {
        echo "
    <script>
    alert('اطلاعات وارد شده اشتباه است. دوباره تلاش کنید');
    window.location = './../login/login.php';
    </script>
    
    ";
    }
} else {
    echo "
    <script>
    alert('اطلاعات وارد شده ناقص میباشد');
    </script>
    
    ";
}
