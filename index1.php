<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Echo session variables that were set on previous page.
        echo "Favorite animal is ".$_SESSION["favanimal"].".<br>";
        //Favorite animal is cat.
        echo "Favorite color is ".$_SESSION["favcolor"].".<br>";
        //Favorite color is yellow.
    ?>
    <a href="index2.php">다음 페이지로 이동</a>
</body>
</html>