<?php
// اتصال به دیتابیس
$connect = mysqli_connect("localhost", "root", "", "coffee");
//--------------------------------------------//

//این فانکشن کد ارسالی را اجرا میکند
function Run($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    return $result;
}
