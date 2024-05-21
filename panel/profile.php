<?php
// پنل کاربری
session_start();
$conn = mysqli_connect("localhost", "root", "", "coffee");

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $res = mysqli_fetch_array($query);
} elseif (isset($_POST['email']) and isset($_POST["password"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $res = mysqli_fetch_array($query);
}

if (isset($res["email"]) && isset($res["password"]) && $res["email"] == $email && $res["password"] == $password) {
    $_SESSION["user"] = $res["name"];
    echo '
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <style>
        body {
            font-family: "B Titr";
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        span{
            font-family: Arial, sans-serif;
        }
        .user-panel {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: "B Titr";
        }

        button:hover {
            background-color: #0056b3;

        }
        h1 {
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke: coral;
    
        }
    
        #table,
        #th,
        #td {
            background: #a39a9d;
            border: 2px solid brown;
            margin: 25px auto;
            font-family: b nazanin;
            font-size: 20px;
        }
    
        #table,
        #th,
        #td {
            direction: rtl;
            border: 1px solid black;
            border-collapse: collapse;
        }
    
        #th,
        #td {
            padding: 15px;
    
        }
    
        #caption {
            margin-bottom: 15px;
            color: #c82c74;
        }
    
        input[type="submit"],
        input[type="reset"] {
            color: #c82c74;
            border: 2px solid rgb(64, 85, 85);
            font-family: "B Titr";
            font-size: 15px;
            padding: 10px 20px;
        }
    
        input {
            border-radius: 5px;
        }
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
    
        .user-panel {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    
        h1 {
            color: #333;
        }
    
        p {
            color: #666;
            margin-bottom: 20px;
        }
    
        button {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
<script>
        function loadContent(url) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
        }
</script>
<script src="./ajax.js"></script>
<script>
    $(document).ready(function(){
        $("#change-password-btn").click(function(){
            $(".user-panel").hide(); // مخفی کردن پنل کاربر
            $(".change-password-form").show(); // نمایش فرم تغییر رمز
        });
    });
</script>
<script>
    function replace(){
        window.location = "./../index.php";
    }
    function replace2(){
        alert("از حساب کاربری خود خارج شدید")
        window.location = "./logout.php";
    }
    function replace3(){
        window.location = "./profile.php";
    }
</script>
    <div class="user-panel">
        <div id="content">
            <h1> خوش آمدید <span>' . $_SESSION["user"] . '</span>سلام کاربر <br></h1>
            <p>در اینجا می توانید تنظیمات حساب خود را مدیریت کنید</p>
            <button onclick="replace2()">خروج از حساب</button>
            <button id="change-password-btn">تغییر رمز</button>
            <button onclick="loadContent(' . "'balanse.php'" . ')">سبد خرید</button>
            <button onclick="replace()">خانه</button>
        </div>
    </div>
    <div class="change-password-form" style="display: none;">
    <center><button onclick="replace3()">بازگشت<img width="50px" height="50px" src="./../media/demo/back.png" alt=""></center>

    </button>
        <div class="main">
            <form method="post" action="./change.php" enctype="multipart/form-data">
                <table id="table" width="800" align="center">

                    <caption id="caption"><b>در این جدول میتوانید اطلاعات حساب کاربری خود را تغییر دهید</b></caption>

                    <tr id="tr">
                        <th id="th"><b>اطلاعات اکانت</b></th>
                        <th id="th"><b>مقدار ورودی برای هر کدام از ویژگی ها</b></th>
                    </tr>
                    <tr id="tr">
                        <td id="td"><b>ایمیل جدید</b></td>
                        <td id="td"><input type="text" name="email-new" placeholder="ایمیل جدید" required></td>
                    </tr>
                    <tr id="tr">
                        <td id="td"><b>رمز قبلی اکانت</b></td>
                        <td id="td"><input type="text" name="pass-old" size="20" placeholder="رمز قبلی اکانت" required></td>
                    </tr>

                    <tr id="tr">
                        <td id="td"><b>رمز جدید اکانت</b></td>
                        <td id="td">
                            <input type="password" name="pass-new" placeholder="رمز جدید اکانت" required>
                        </td>
                    </tr>





                    <tr id="tr">
                        <td align="center"><input type="reset" name="reset" value="ریست کردن"></td>
                        <td align="center"><input type="submit" name="submit" value="بارگذاری"></td>
                    </tr>

                </table>
            </form>
        </div>
    </div>
    
</div>
</body>

</html>
    ';
} else {
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);

    echo "<script>
    alert('اطلاعات وارد شده صحیح نمیباشد لطفا مجدد بررسی کنید')
    window.location = './../index.php'
    </script>";
}
