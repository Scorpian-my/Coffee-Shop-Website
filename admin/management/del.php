<?php

if (isset($_POST["coffee"])) {
    $coffee = $_POST["coffee"];
    $coffee = str_replace("حذف ","",$coffee);
    $conn = mysqli_connect("localhost", "root", "", "coffee");
    mysqli_query($conn, "DELETE FROM `coffees` WHERE `name`='$coffee';");
    echo "
    <script>
    alert('محصول با موفقیت حذف شد');
    window.location = './../panell.html';
    </script>
    ";
}else{
    echo "
    <script>
    alert('خطای سمت سرور. ظاهرا مشکلی پیش آمده است');
    window.location = './../panell.html';
    </script>
    ";
}
// دریافت عکس از فرم
