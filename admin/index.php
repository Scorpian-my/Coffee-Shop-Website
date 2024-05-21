<?php

session_start();


if (isset($_SESSION["admin_user"]) and isset($_SESSION["admin_pass"])) {
    $admin_user = $_SESSION["admin_user"];
    $admin_pass = $_SESSION["admin_pass"];
}
if (!isset($admin_user) and !isset($admin_pass)) {
    echo "
    <link rel='stylesheet' href='./style.scss'>
    <meta charset='UTF-8'>
    <div class='login-wrap'>
        <h2>پنل ادمین</h2>

        <div class='form'>
            <form action='./verify.php' method='post''>
                <input type='text' placeholder='Username' name='un' />
                <input type='password' placeholder='Password' name='pw' />
                <button> Sign in </button>
            </form>

        </div>
    </div>

    ";
} else {

    header('Location:./verify.php');
}
