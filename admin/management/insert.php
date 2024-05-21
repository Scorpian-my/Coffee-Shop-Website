<?php
$conn = mysqli_connect("localhost", "root", "", "coffee");
if (isset($_FILES["image"]['tmp_name']) && $_POST["name"] && $_POST["description"]) {
    $image = $_FILES['image']['tmp_name'];
    $name = $_POST["name"];
    $desk = $_POST["description"];
    $price = $_POST["price"];
    move_uploaded_file($image, "./../../images/" . $_FILES['image']["name"]);
    mysqli_query($conn, "INSERT INTO `coffees` (`name`, `description`, `img`,`price`, `id`) VALUES ('$name', '$desk', 'images/" . $_FILES['image']["name"] . "','$price', NULL);");
    echo "
    <script>
    alert('محصول با موفقیت به سایت اضافه شد')
    window.location = './../panell.html'
    </script>
    ";
}
