<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "coffee");

if (isset($_SESSION['admin_user']) && isset($_SESSION['admin_pass'])) {
    $user = $_SESSION['admin_user'];
    $pass = $_SESSION['admin_pass'];
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user' AND password='$pass'");
    $res = mysqli_fetch_array($query);
} elseif (isset($_POST['un']) and isset($_POST["pw"])) {
    $user = $_POST['un'];
    $pass = $_POST['pw'];
    $_SESSION['admin_user'] = $user;
    $_SESSION['admin_pass'] = $pass;
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user' AND password='$pass'");
    $res = mysqli_fetch_array($query);
}
if (isset($res["username"]) && isset($res["password"]) && $res["username"] == $user && $res["password"] == $pass) {
    header("Location: ./panell.html");
} else {
    session_unset();
    echo "
    <script>
    alert('دسترسی رد شد. اطلاعات وارد شده نادرست میباشد');
    window.location = './../php/index.php';
    </script>
    ";
}
