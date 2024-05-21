<?php

$connection = mysqli_connect("localhost", "root", "", "coffee");
$query = mysqli_query($connection, "SELECT * FROM `coffees`");


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
            while ($coffee = mysqli_fetch_array($query)) {

                echo "<li class='test'>نام محصول '" . '<span class="span">' . $coffee["name"] . '</span>' . "'<br>";
                echo "<form action='./management/del.php' method='post'>";
                echo "توضیحات <br>" . "<span class='span'>" . $coffee["description"] . "<hr><br><input type='submit' name='coffee' value='حذف " . $coffee["name"] . "'><br><br>";
                echo "</form>";
                echo "</li><br><hr color='red'><br>";
            }
            ?>
        </ol>
    </center>
</body>

</html>