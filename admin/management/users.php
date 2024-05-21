<?php

$connection = mysqli_connect("localhost", "root", "", "coffee");
$query = mysqli_query($connection, "SELECT * FROM `users`");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .test {
            border: 2px solid brown;
            border-radius: 10px;
            font-family: 'B Titr';
        }

        .span {
            color: royalblue;
            font-family: 'B Titr';
            font-weight: bold;
        }

        .php {
            color: saddlebrown;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }

        li {
            direction: rtl;
        }

        ol {
            width: 500px;
        }
    </style>
</head>

<body bgcolor="gray">
    <center>
        <ol>
            <?php
            while ($user = mysqli_fetch_array($query)) {
                $words = explode(",", $user["coffees"]);
                echo "<li class='test'>نام کاربر '" . '<span class="span">' . $user["name"] . '</span>' . "'<br>";
                echo "سفارش های انتخاب شده ";
                foreach ($words as $word) {
                    $coffe = trim($word);
                    echo "<span class='span'>" . $coffe . "<hr><br>";
                }
                echo "</li><br><hr color='red'><br>";
            }
            ?>
        </ol>
    </center>
</body>

</html>
