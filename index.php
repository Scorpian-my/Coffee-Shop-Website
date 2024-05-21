<?php
include("./php/config.php");


$data = mysqli_query($connect, "SELECT * FROM `coffees`");
?>
<!DOCTYPE html>

<html lang="fa" dir="rtl">


<!-- Mirrored from hamyarmenu.ir/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2024 07:29:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="همیار کافه" />
    <meta name="description" content="این منو دمو محصول دیداری میباشد" />
    <meta name="keywords" content="این منو دمو محصول دیداری میباشد؛دمو">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>همیار کافه</title>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="demo/5c21832f46774b62a3682d385fc7b8ff53199.html">
    <meta name="theme-color" content="#ffffff">

    <!-- FONTS -->
    <link href="static/css/fonts.css" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="static/css/all.css" rel="stylesheet">

    <link href="static/css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="static/css/menu.css" rel="stylesheet">
    <link href="static/css/magnific-popup.css" rel="stylesheet">
    <link href="static/css/flexslider.css" rel="stylesheet">
    <link href="static/css/owl.carousel.min.css" rel="stylesheet">
    <link href="static/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="static/css/jquery.datetimepicker.min.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="static/css/style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="static/css/responsive.css" rel="stylesheet">
    <link href="static/css/swiper.min.css" rel="stylesheet">
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
</head>

<body>
    <!-- PRELOADER SPINNER
============================================= -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="cssload-spinner">
                <div class="cssload-ball cssload-ball-1"></div>
                <div class="cssload-ball cssload-ball-2"></div>
                <div class="cssload-ball cssload-ball-3"></div>
                <div class="cssload-ball cssload-ball-4"></div>
            </div>
        </div>
    </div>

    <!-- HEADER-3
============================================= -->
    <header id="header-3" class="header navik-header header-transparent header-shadow">
        <div class="container">
            <!-- NAVIGATION MENU -->
            <div class="navik-header-container">

                <!-- CALL BUTTON -->

                <div class="callusbtn text-right"><a href="tel:011-11111111"><i class="fas fa-phone"></i></a>
                </div>


                <!-- LOGO IMAGE -->




                <!-- BURGER MENU -->
                <div class="burger-menu">
                    <div class="line-menu line-half first-line"></div>
                    <div class="line-menu"></div>
                    <div class="line-menu line-half last-line"></div>
                </div>


                <!-- MAIN MENU -->
                <nav class="navik-menu menu-caret navik-yellow">
                    <ul class="top-list text-right">
                        <li class=""><a href="./login/sign.html">ثبت نام</a>

                        </li>
                        <li><a href="index.php">خانه</a></li>
                        <li><a href="about/index.html">درباره ما</a></li>
                        <li><a href="team/index.html">تیم ما</a></li>


                        <!-- HEADER BUTTON  -->


                        <li class="r"><a href="./login/login.php">ورود</a>
                        </li>



                    </ul>
                </nav> <!-- END MAIN MENU -->


            </div> <!-- END NAVIGATION MENU -->


        </div> <!-- End container -->
    </header> <!-- END HEADER-3 -->

    <div id="page" class="page">

        <!-- PAGE HERO
       ============================================= -->
        <div id="menu-page" style="background-image: url(background.jpg);" class="page-hero-section division">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-txt text-center white-color">
                            <!-- Title -->
                            <h2 class="h2-xl nav-btn yellow-colo"> کافه معرفت</h2>
                        </div>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div> <!-- END PAGE HERO -->
        <div class="product-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="product-title">محصولات</h2>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="row">

                    <?php while ($row = mysqli_fetch_array($data)) {
                        $img = str_replace(" ", "%20", $row["img"]);
                        echo '
                        <div class="col-sm-6 col-lg-3">
                        <div class="menu-6-item bg-white">

                            <!-- IMAGE -->
                            <div class="menu-6-img rel">
                                <div class="hover-overlay">

                                    <!-- Image -->
                                    <img class="img-fluid" src="' . $img . '" alt="' . $row["name"] . '" />

                                    <!-- Zoom Icon -->
                                    <div class="menu-img-zoom ico-25">
                                        <a href="' . $img . '" class="' . $row["name"] . '">
                                            <span class="flaticon-zoom"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- TEXT -->
                            <div class="menu-6-txt rel">
                                <!-- Title -->
                                <a href="2.html">
                                    <h5 class="h5-sm">' . $row["name"] . '</h5>
                                </a>
                                <!-- Description -->
                                <p class="grey-color">' . $row["description"] . '</p>

                                <!-- Price -->
                                <div class="menu-6-price bg-coffee">

                                    <h5 class="h5-xs yellow-color">
                                        <span class="old-price">190000 ت</span> ' . $row["price"] . ' ت
                                    </h5>

                                </div>

                                <!-- Add To Cart -->
                                <div class="add-to-cart bg-yellow ico-10">
                                    <form action="./php/save.php" method="post">
                                        <button class="flaticon"><input type="hidden" name="add" value="' . $row["name"] . '">اضافه کردن به سبد خرید</button>

                                    </form>

                                </div>

                            </div>

                        </div>


                    </div>
                        ';
                    } ?>

                </div>
            </div>

        </div>


    </div> <!-- END MENU ITEM #1 -->





    </div> <!-- End row -->
    </div>
    </div>

    <footer id="footer-4" class="footer division">
        <div class="container grey-color">
            <!-- FOOTER CONTENT -->
            <div class="row">
                <!-- FOOTER INFO -->
                <div class="col-xl-3">
                    <div class="footer-info mb-40">

                        <!-- Footer Logo -->

                        <div class="footer-logo"><img src="media/demo/coffee.png" alt="footer-logo" /></div>


                        <!-- Text -->

                        <p>این منو دمو محصول دیداری میباشد</p>

                    </div>
                </div>


                <!-- FOOTER CONTACTS -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-contacts mb-40">

                        <!-- Title -->
                        <h5 class="h5-sm">سفارش دهید</h5>

                        <!-- Address -->

                        <p style="width: 200px">ایران، مشهد</p>

                        <!-- Contacts -->

                        <p class="foo-email txt-500 mt-15"><a href="https://github.com/Scorpian-my">GitHub</a>
                        </p>


                        <p><span class="yellow-color"><a href="https://t.me/Dev_Scorpian">Telegram</a></span>
                        </p>


                        <p><span class="yellow-color"><a href="https://instagram.com/mahyar.develop">Instagram</a></span>
                        </p>


                        <p><span class="yellow-color"><a href="https://wa.me/+989019603966">Whatsapp</a></span>
                        </p>

                    </div>
                </div>


                <!-- FOOTER INFO -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-info mb-30">

                        <!-- Title -->
                        <h5 class="h5-sm">ساعات کاری</h5>



                        <p class="mt-15">شنبه-جمعه: ۹:۰۰ ب.ظ - ۱۰:۰۰ ب.ظ</p>

                        <p class="mt-15">شنبه: ۱۰:۰۰ ب.ظ - ۸:۳۰ ق.ظ</p>

                        <p class="mt-15">یکشنبه: ۱۲:۰۰ ق.ظ - ۵:۰۰ ق.ظ</p>


                    </div>
                </div>
                <!-- FOOTER IMAGES -->
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="footer-img mb-40">

                        <!-- Title -->
                        <h5 class="h5-sm">ارتباط با مجموعه</h5>

                        <!-- Instagram Images -->
                        <ul class="text-center clearfix">


                            <li><a href="https://instagram.com/mahyar.develop" target="_blank"><img class="insta-img" src="messanger/insta.png" alt="insta-img"></a></li>


                            <li><a href="https://t.me/Dev_Scorpian" target="_blank"><img class="insta-img" src="messanger/telegram.png" alt="insta-img"></a></li>


                            <li><a href="https://wa.me/+989019603966" target="_blank"><img class="insta-img" src="messanger/whatsapp.png" alt="insta-img"></a></li>



                        </ul>

                    </div>
                </div> <!-- END FOOTER IMAGES -->
            </div> <!-- END FOOTER CONTENT -->


            <!-- BOTTOM FOOTER -->
            <div class="bottom-footer">
                <div class="row d-flex align-items-center">


                    <!-- FOOTER COPYRIGHT -->
                    <div class="col-md-5 col-lg-6">
                        <div class="footer-copyright">
                            <p>تمامی حقوق کافه معرفت محفوظ می باشد</p>
                            <br>
                            <p>طراحی و توسعه <a style="color: #0ab1e8" href="https://t.me/Dev_Scorpian">منو کافه</a>
                            </p>
                        </div>
                    </div>

                    <!--  BOTTOM FOOTER LINKS -->
                    <div class="col-md-7 col-lg-6">
                        <ul class="bottom-footer-list text-right clearfix">



                            <li>
                                <p><a href="https://instagram.com/mahyar.develop"><i class="fab fa-instagram"></i>
                                        Instagram</a>
                                </p>
                            </li>





                        </ul>
                    </div>


                </div> <!-- End row -->
            </div> <!-- END BOTTOM FOOTER -->


        </div> <!-- End container -->
    </footer> <!-- END FOOTER-4 -->
    </div>





    <!-- EXTERNAL SCRIPTS
============================================= -->
    <script src="static/js/jquery-3.5.1.min.js"></script>
    <script src="static/js/menu.js"></script>
    <script src="static/js/custom.js"></script>
</body>



</html>