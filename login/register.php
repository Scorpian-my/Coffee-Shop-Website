<?php

include("./../php/config.php");
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = Run("INSERT INTO `users`(`name`, `email`, `password`, `coffees`, `id`) VALUES ('$name','$email','$password',' ','')");
}

if ($result) {
    $affectedRows = mysqli_affected_rows($connect);
    if ($affectedRows > 0) {
        echo "<script>
    alert('ثبت نام شما انجام شد')
    window.location = './../index.php'
    </script>";
    }
} else {

    echo "<script>
    alert('مشکلی پیش آمده است لطفا بعدا تلاش کنید')
    window.location = './../index.php'
    </script>";
}
