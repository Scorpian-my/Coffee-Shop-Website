
<!-- این فایل برای خواندن سفارشات کاربر است -->
<?php
include("./../php/config.php");
session_start();

$data = mysqli_query($connect, "SELECT * FROM `users` where name='Mahyar'");

?>

<link href="./../static/css/fonts.css" rel="stylesheet">

<!-- BOOTSTRAP CSS -->
<link href="./../static/css/bootstrap.min.css" rel="stylesheet">

<!-- FONT ICONS -->
<link href="./../static/css/all.css" rel="stylesheet">

<link href="./../static/css/flaticon.css" rel="stylesheet">

<!-- PLUGINS STYLESHEET -->
<link href="./../static/css/menu.css" rel="stylesheet">
<link href="./../static/css/magnific-popup.css" rel="stylesheet">
<link href="./../static/css/flexslider.css" rel="stylesheet">
<link href="./../static/css/owl.carousel.min.css" rel="stylesheet">
<link href="./../static/css/owl.theme.default.min.css" rel="stylesheet">
<link href="./../static/css/jquery.datetimepicker.min.css" rel="stylesheet">

<!-- TEMPLATE CSS -->
<link href="./../static/css/style.css" rel="stylesheet">

<!-- RESPONSIVE CSS -->
<link href="./../static/css/responsive.css" rel="stylesheet">
<link href="./../static/css/swiper.min.css" rel="stylesheet">
<style>
    /* Global Styles */
    body {
        font-family: "Tahoma", sans-serif;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    /* Product Section Styles */
    .product-section {
        background-color: #f9f9f9;
        padding: 50px 0;
    }

    .product-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 30px;
    }

    .product-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .product {
        text-align: center;
        margin-bottom: 30px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
    }

    .product img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .product-name {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-top: 10px;
    }

    .product-description {
        font-size: 16px;
        color: #666;
        margin-top: 10px;
    }

    .product-price {
        font-size: 18px;
        color: #333;
        margin-top: 10px;
    }
</style>

<div class="row">
    <center>
        <h1>
            سبد خرید شما <br><span><a href="./profile.php"><img width="50px" height="50px" src="./../media/demo/back.png" alt="">بازگشت</a></span>
        </h1>
    </center>
    <?php
    while ($row = mysqli_fetch_array($data)) {
        $words = explode(",", $row["coffees"]);
        foreach ($words as $word) {
            $data = mysqli_query($connect, "SELECT * FROM `coffees` WHERE `name` = '" . trim($word) . "'");
            if ($data && mysqli_num_rows($data) > 0) {
                $info = mysqli_fetch_array($data);
                echo '
                        <div class="col-sm-6 col-lg-3">
                        <div class="menu-6-item bg-white">

                            <!-- IMAGE -->
                            <div class="menu-6-img rel">
                                <div class="hover-overlay">

                                    <!-- Image -->
                                    <img class="img-fluid" src="./../' . $info["img"] . '" alt="' . $info["name"] . '" />

                                    <!-- Zoom Icon -->
                                    <div class="menu-img-zoom ico-25">
                                        <a href="./../' . $info["img"] . '" class="' . $info["name"] . '">
                                            <span class="flaticon-zoom"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- TEXT -->
                            <div class="menu-6-txt rel">
                                <!-- Title -->
                                <a href="2.html">
                                    <center><h5 class="h5-sm">' . $info["name"] . '</h5></center>
                                </a>
                                <!-- Description -->
                                <center><p class="grey-color">' . $info["description"] . '</p></center>
                                <form action="./del.php" method="post">
                                <input type="hidden" name="coffee" value="' . $info["name"] . '">
                                <input type="submit" value="حذف">
                                </form>




                            </div>

                        </div>


                    </div>
                        ';
            }
        }
    } ?>

</div>
<script src="./../static/js/jquery-3.5.1.min.js"></script>
<script src="./../static/js/menu.js"></script>
<script src="./../static/js/custom.js"></script>
